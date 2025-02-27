<?php

declare(strict_types=1);

if ($_SESSION['errors_login']) {

    function display_login_form_messages()
    {
        if ($_SESSION['errors_login']) {

            $errors = $_SESSION['errors_login'];
            unset($_SESSION['errors_login']);

            echo '<ul class="page__message message template__width-content">';
            foreach ($errors as $error) {
                echo '<li class="message__item message__item--error"><p>' . $error . '</p></li>';
            }
            echo '</ul>';
        } elseif (isset($_GET['login']) && $_GET['login'] === 'success') {
            echo '<ul class="page__message message template__width-content">';
            echo '<li class="message__item message__item--succes">';
            echo '<p>You are logged in</p>';
            echo '</li>';
            echo '</ul>';
        }
    }
}
