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