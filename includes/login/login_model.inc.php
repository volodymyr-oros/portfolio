<?php

declare(strict_types=1);

function get_user_data(object $pdo, string $user_email)
{
    $query = 'SELECT * FROM users WHERE email = :user_email;';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':user_email', $user_email);
    $stmt->execute();

    $user_data = $stmt->fetch();
    return $user_data;
}
