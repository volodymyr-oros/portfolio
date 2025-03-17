<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user_email = $_POST['email'];
    $user_password = $_POST['password'];
    
    try {

        require_once INCLUDES_PATH . '/dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';

        // Error handlers
        $errors = [];

        if (is_inputs_empty($user_email, $user_password)) {
            $errors["empty_input"] = 'Fill in the form fields.';
        }
        if (is_email_length_invalid($user_email)) {
            $errors['email_length'] = 'The email address must be no longer than 100 characters.';
        }
        if (is_email_format_invalid($user_email)) {
            $errors["email_format"] = 'Invalid email format.';
        }

        $user_data = get_user_data($pdo, $user_email);

        if (is_email_not_registered($user_data)) {
            $errors["unregistered_email"] = 'Oops! We could not find an account with that email. Double-check your entry or create a new account.';
        }
        if (is_password_length_invalid($user_password)) {
            $errors['password_length'] = 'The password must be no longer than 20 characters.';
        }
        if (
            !is_email_not_registered($user_data) &&
            is_password_incorrect($user_password, $user_data['password_hash'])
            ) {
            $errors["login_incorrect"] = "Incorrect login info.";
        }

        require_once INCLUDES_PATH . '/config_session.inc.php';

        if ($errors) {
            $_SESSION['errors_login'] = $errors;

            header('Location: /customer/login');
            die();
        }

        $new_session_id = session_create_id();
        $user_session_id = $new_session_id . '_' . $user_data['id'];
        session_id($user_session_id);
        
        $_SESSION['user_id'] = $user_data['id'];
        $_SESSION['user_first_name'] = htmlspecialchars($user_data['first_name']);
        $_SESSION['user_last_name'] = htmlentities($user_data['last_name']);

        $_SESSION['session_regenerated_at'] = time();

        header('Location: /customer/my-account?login=success');
        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        
        die('Something went wrong: ' . $e->getMessage());
    }

} else {

    header('Location: /customer/login');
    die();
}