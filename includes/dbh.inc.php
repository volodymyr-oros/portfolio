<?php

$config = parse_ini_file(__DIR__ . './env');

$host_name = $config['DB_HOST'];
$db_name = $config['DB_NAME'];
$db_user_name = $config['DB_USER_NAME'];
$db_user_password = $config['DB_USER_PASSWORD'];

try {
    $pdo = new PDO(
        "mysql:host=$host_name;dbname=$db_name;charset=utf8", 
        $db_user_name, 
        $db_user_password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
} catch (PDOException $e) {
    die("Something went wrong while connecting to the database: " . $e->getMessage());
}