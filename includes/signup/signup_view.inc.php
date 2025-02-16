<?php

declare(strict_types=1);

function check_signup_errors()
{
    if (isset($_SESSION["errors_signup"])) {

        $errors = $_SESSION["errors_signup"];
        foreach ($errors as $error) {
            echo "<p>" . $error . "</p>";
        }
        unset($_SESSION["errors_signup"]);
    } elseif (isset($_GET["signup"]) && $_GET === "success") {
        echo "<p>The user has been created!</p>";
    }
}
