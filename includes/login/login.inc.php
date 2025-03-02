<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user_email = $_POST['email'];
    $user_password = $_POST['password'];
    
    try {

        require_once '../dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';

        // Error handlers
        $errors = [];

        if (is_inputs_empty($user_email, $user_password)) {
            $errors["required_input"] = "All required fields should be filled with valid data.";
        }
        if (is_email_invalid($user_email)) {
            $errors["invalid_email"] = "The \"Email\" address is not valid.";
        }

        $user_data = get_user_data($pdo, $user_email);

        if (is_email_wrong($user_data)) {
            $errors["used_email"] = "The \"Email\" is already used.";
        }
        if (
            !is_email_wrong($user_data) &&
            is_password_wrong($user_password, $user_data['password_hash'])
            ) {
            $errors["login_incorrect"] = "Incorrect login info.";
        }

        require_once '../config_session.inc.php';

        if ($errors) {
            $_SESSION['errors_login'] = $errors;

            header('Location: /login');
            die();
        }

        $new_session_id = session_create_id();
        $user_session_id = $new_session_id . '_' . $user_data['id'];
        session_id($user_session_id);
        
        $_SESSION['user_id'] = $user_data['id'];
        $_SESSION['user_first_name'] = htmlspecialchars($user_data['first_name']);
        $_SESSION['user_last_name'] = htmlentities($user_data['last_name']);

        $_SESSION['session_regenerated_at'] = time();

        header('Location: ../../customer/account/profile/home.php?login=success');
        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        
        die('Something went wrong: ' . $e->getMessage());
    }

} else {

    header('Location: /login');
    die();
}