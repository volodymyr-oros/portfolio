<?php

declare(strict_types=1);

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

$lifetime = 24 * 60; // 1440 seconds

session_set_cookie_params([
    'lifetime' => 1440,
    'domain' => '.portfolio.local',
    'path' => '/',
    'secure' => false, // Change value to true after set up https connection
    'httponly' => true,
    'samesite' => 'Strict',
]);

session_start();

if (isset($_SESSION['user_id'])) {
    regenerate_expired_session($lifetime, 'regenerate_loggedin_session');
} else {
    regenerate_expired_session($lifetime, 'regenerate_session');
}

function regenerate_expired_session(int $lifetime, callable  $regenerate_session_method)
{
    if (!isset($_SESSION['session_regenerated_at'])) {
        $regenerate_session_method();
    } else {
        if (time() - $_SESSION['session_regenerated_at'] >= $lifetime) {
            $regenerate_session_method();
        }
    }
}

function regenerate_loggedin_session()
{
    session_regenerate_id(true); // Old session will be deleted

    $user_id = $_SESSION['user_id'];
    $new_session_id = session_create_id();
    $user_session_id = $new_session_id . '_' . $user_id;
    session_id($user_session_id);

    $_SESSION['session_regenerated_at'] = time();
}

function regenerate_session()
{
    session_regenerate_id(true); // Old session will be deleted
    $_SESSION['session_regenerated_at'] = time();
}
