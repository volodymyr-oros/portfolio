<?php

declare(strict_types=1);

function display_account_error_messages() {
    if (isset($_SESSION['account_error_message'])) {
        $page_error_messages[] = $_SESSION['account_error_message'];
        unset($_SESSION['account_error_message']);

        echo '<ul class="page__message message template__width-content">';
        foreach ($page_error_messages as $page_error_message) {
            echo '<li class="message__item message__item--error"><p>' . $page_error_message . '</p></li>';
        }
        echo '</ul>';
    }
}

function display_greeting()
{
    echo '<h2>Hi ' . $_SESSION['user_first_name'] . ', glad you\'re back.</h2>';
}