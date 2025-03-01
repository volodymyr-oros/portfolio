<?php

require_once '../../../includes/config_session.inc.php';

    if (!isset($_SESSION['user_id'])) {

        header('Location: ../login.php');
        exit();

    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require '../../../includes/layout/page_head.inc.php'; ?>
    <title>Account profile</title>
</head>

<body>
    <div class="wrapper template">
        <?php require '../../../includes/layout/page_header.inc.php'; ?>

        <main class="page template__subgrid">
            <div class="page__title template__width-content">
                <h1 class="page__title-text">Account profile</h1>
            </div>
            <?php require_once '../../../includes/layout/page_message.inc.php'; ?>
            <div class="page__ template__width-content">
                
            </div>
        </main>

        <?php require '../../../includes/layout/page_footer.inc.php'; ?>
    </div>
</body>

</html>