<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config_session.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/login/login_view.inc.php';

    if (isset($_SESSION['user_id'])) {
        header('Location: ./profile/home.php');
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/includes/layout/page_head.inc.php'; ?>
    <title>Account login</title>
</head>

<body>
    <div class="wrapper template">
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/includes/layout/page_header.inc.php'; ?>

        <main class="page template__subgrid">
            <div class="page__title template__width-content">
                <h1 class="page__title-text">Account login</h1>
            </div>
            <?php display_login_form_messages(); ?>
            <div class="page__login template__width-content">
                <form action="../../includes/login/login.inc.php" method="POST" class="page__form form" autocomplete="on">

                    <div class="form__row">
                        <label for="email" class="form__label">Email</label>
                        <input id="email" type="email" name="email" class="form__input" placeholder="example@mail.com" required autocomplete="email">
                    </div>

                    <div class="form__row">
                        <label for="password" class="form__label">Password</label>
                        <input id="password" type="password" name="password" class="form__input" placeholder="your password" required autocomplete="current-password">
                    </div>

                    <div class="form__row form__row--action flex flex-jst-ard">
                        <button id="form-reset" class="form__button button button--reset" type="reset" aria-label="Clear form fields">Reset</button>
                        <button class="form__button button button--submit" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </main>

        <?php require $_SERVER['DOCUMENT_ROOT'] . '/includes/layout/page_footer.inc.php'; ?>
    </div>
</body>

</html>