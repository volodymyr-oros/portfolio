<?php

declare(strict_types=1);

function is_inputs_empty(string $user_email, string $user_password)
{
    if (empty($user_email) || empty($user_password)) {
        return true;
    } else {
        return false;
    }
}

function is_email_invalid(string $user_email)
{
    if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function is_email_wrong(bool | array $user_data)
{
    if (!$user_data) {
        return true;
    } else {
        return false;
    }
}

function is_password_wrong(string $user_password, string $user_password_hashed)
{
    if (!password_verify($user_password, $user_password_hashed)) {
        return true;
    } else {
        return false;
    }
}
