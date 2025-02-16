<?php

declare(strict_types=1);

function get_user_email(object $pdo, string $user_email) {
    $query = "SELECT email FROM users WHERE email = :user_email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":user_email", $user_email);
    $stmt->execute();

    $result = $stmt->fetch();
    return $result;
}

function insert_user(
    object $pdo, 
    string $user_first_name, 
    string $user_last_name, 
    string $user_email,
    string $user_password
) {
    $query = "INSERT INTO users (first_name, last_name, email, password_hash) 
        VALUES (:first_name, :last_name, :email, :password_hash);";
    $stmt = $pdo->prepare($query);
    $options = ["cost" => 12];
    $user_password_hesh = password_hash($user_password, PASSWORD_BCRYPT, $options);
    $stmt->bindParam(":first_name", $user_first_name);
    $stmt->bindParam(":last_name", $user_last_name);
    $stmt->bindParam(":email", $user_email);
    $stmt->bindParam(":password_hash", $user_password_hesh);
    $stmt->execute();
}