<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $user_first_name = $_POST["first-name"];
    $user_last_name = $_POST["last-name"];
    $user_email = $_POST["email"];
    $user_password = $_POST["password"];
    $user_confirm_password = $_POST["confirm-password"];

    try {

        require_once '../dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        // Error handlers
        $errors = [];

        if (is_required_inputs_empty(
            $user_first_name,
            $user_last_name,
            $user_email,
            $user_password,
            $user_confirm_password
        )) {
            $errors["required_input"] = "All required fields should be filled with valid data.";
        }
        if (is_email_invalid($user_email)) {
            $errors["invalid_email"] = "The \"Email\" address is not valid.";
        }
        if (is_email_used($pdo, $user_email)) {
            $errors["used_email"] = "The \"Email\" is already used.";
        }
        if (is_password_havenot_capital_letter($user_password)) {
            $errors["password_capital_letter"] = "The \"Password\" should contain at least one capital letter.";
        }
        if (is_password_havenot_numbers($user_password)) {
            $errors["password_contains_number"] = "The \"Password\" should contain at least one number character.";
        }
        if (is_password_too_short($user_password)) {
            $errors["password_length"] = "The \"Password\" should be 8 characters or more.";
        }
        if (is_password_havenot_special_characters($user_password)) {
            $errors["password_special_characters"] = "The \"Password\" should contain at least one special character.";
        }
        if (is_password_confirmpassword_different(
            $user_password,
            $user_confirm_password
        )) {
            $errors["password_compare"] = "The \"Password\" and \"Confirm password\" should be the same.";
        }

        include_once '../config_session.inc.php';

        if ($errors) {
            $_SESSION["errors_signup"] = $errors;
            header('Location: /customer/signup');
            die();
        }

        create_user(
            $pdo,
            $user_first_name, 
            $user_last_name, 
            $user_email,
            $user_password
        );

        header('Location: /customer/?signup=success');

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {

        die('Query failed: ' . $e->getMessage());
    }
} else {

    header('Location: /customer/signup');
    die();
}
