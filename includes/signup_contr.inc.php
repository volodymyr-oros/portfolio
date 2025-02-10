<?php

declare(strict_types=1);

function is_required_inputs_empty(
    string $user_first_name,
    string $user_last_name,
    string $user_email,
    string $user_password,
    string $user_confirm_password
) {
    if (
        empty($user_first_name) ||
        empty($user_last_name) ||
        empty($user_email) ||
        empty($user_password) ||
        empty($user_confirm_password)
    ) {
        return true;
    } else {
        return false;
    }
}

// is_required_inputs_empty($user_email, $user_password, $user_confirm_password)

function is_email_invalid(string $user_email)
{
    if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function is_email_used(object $pdo, string $user_email) {
    if (get_user_email($pdo, $user_email)) {
        return true;
    } else {
        return false;
    }
}

function is_password_havenot_capital_letter(string $user_password)
{
    if (!preg_match("/[A-Z]/", $user_password)) {
        return true;
    } else {
        return false;
    }
}

function is_password_havenot_numbers(string $user_password)
{
    if (!preg_match("/\d/", $user_password)) {
        return true;
    } else {
        return false;
    }
}

function is_password_too_short(string $user_password)
{
    if (strlen($user_password) <= 8) {
        return true;
    } else {
        return false;
    }
}

function is_password_havenot_special_characters(string $user_password)
{
    if (!preg_match('/[^a-zA-Z0-9]/', $user_password)) {
        return true;
    } else {
        return false;
    }
}


function is_password_confirmpassword_different(
    string $user_password,
    string $user_confirm_password
) {
    if ($user_password !== $user_confirm_password) {
        return true;
    } else {
        return false;
    }
}

function create_user(
    object $pdo, 
    string $user_first_name, 
    string $user_last_name, 
    string $user_email,
    string $user_password
) {
    insert_user(
        $pdo, 
        $user_first_name, 
        $user_last_name, 
        $user_email,
        $user_password
    );
}