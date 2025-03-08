<?php
require_once INCLUDES_PATH . '/config_session.inc.php';
include_once INCLUDES_PATH . '/my_account/my_account_view.inc.php';

if (!isset($_SESSION['user_id'])) {

    header('Location: ../login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require INCLUDES_PATH . '/layout/page_head.inc.php'; ?>
    <title>My account</title>
</head>

<body>
    <div class="wrapper template">
        <?php require INCLUDES_PATH . '/layout/page_header.inc.php'; ?>

        <main class="page template__subgrid">
            <div class="page__title template__width-content">
                <h1 class="page__title-text">My account profile</h1>
            </div>
            <?php display_account_error_messages(); ?>
            <div class="page__greeting template__width-content">
                <?php display_greeting(); ?>
            </div>
        </main>

        <?php require INCLUDES_PATH . '/layout/page_footer.inc.php'; ?>
    </div>
</body>

</html>