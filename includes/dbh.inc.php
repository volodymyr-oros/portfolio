<?php

$host_name = "localhost";
$db_name = "portfolio_db";
$db_user_name = "portfolio_dba";
$db_user_password = "password1";

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