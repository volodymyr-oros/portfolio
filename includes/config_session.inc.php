<?php

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

if (!isset($_SESSION['session_regenerated_at'])) {
    regenerate_session();
} else {
    if (time() - $_SESSION['session_regenerated_at'] >= $lifetime) {
        regenerate_session();
    }
}

function regenerate_session()
{
    session_regenerate_id(); // Old session will be deleted
    $_SESSION['session_regenerated_at'] = time();
}
