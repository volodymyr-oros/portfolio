<?php

declare(strict_types=1);

// Form general validation

// Check if user submit data
function is_inputs_empty(string $user_email, string $user_password)
{
    if (empty($user_email) || empty($user_password)) {
        return true;
    } else {
        return false;
    }
}

// Login input validation

// Check email allowed length
function is_email_length_invalid(string $user_email)
{ // 100 - is varchar(100) for an email column in the db
    if (strlen($user_email) > 100) {
        return true;
    } else {
        return false;
    }
}

// Check the email address format
function is_email_format_invalid(string $user_email)
{
    if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

// Check if user exists
function is_email_not_registered(bool | array $user_data)
{
    if (!$user_data) {
        return true;
    } else {
        return false;
    }
}

// Password input validation

// Check password allowed length
function is_password_length_invalid(string $user_password)
{
    if (strlen($user_password) > 20) {
        return true;
    } else {
        return false;
    }
}

// Sumited password and real password match
function is_password_incorrect(string $user_password, string $user_password_hashed)
{
    if (!password_verify($user_password, $user_password_hashed)) {
        return true;
    } else {
        return false;
    }
}
