<?php

declare(strict_types=1);

function check_signup_errors()
{
    if (isset($_SESSION["errors_signup"])) {

        $errors = $_SESSION["errors_signup"];
        unset($_SESSION["errors_signup"]);

        echo '<ul class="page__message message template__width-content">';
        foreach ($errors as $error) {
            echo '<li class="message__item message__item--error"><p>' . $error . '</p></li>';
        }
        echo '</ul>';

    } elseif (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo '<ul class="page__message message template__width-content">';
        echo '<li class="message__item message__item--succes">';
        echo '<p>The account has been created, now You can log in</p>';
        echo '</li>';
        echo '</ul>';
    }
}
