<?php

declare(strict_types=1);

function is_user_not_logged_in()
{
    if (!isset($_SESSION['user_id'])) {
        return true;
    } else {
        return false;
    }
}
