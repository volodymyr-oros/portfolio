<?php

require_once 'my_account_contr.inc.php';


if(is_user_not_logged_in()) {
    header('Location: /customer/login');
    exit();
}
