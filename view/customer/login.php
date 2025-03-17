<?php
require_once INCLUDES_PATH . '/config_session.inc.php';
require_once INCLUDES_PATH . '/login/login_view.inc.php';

    if (isset($_SESSION['user_id'])) {
        header('Location: /customer/my-account');
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require INCLUDES_PATH . '/layout/page_head.inc.php'; ?>
    <link rel="stylesheet" href="/assets/css/web-form.css">
    <title>Account login</title>
</head>

<body>
    <div class="wrapper template">
        <?php require INCLUDES_PATH . '/layout/page_header.inc.php'; ?>

        <main class="page template__subgrid">
            <section class="page__heading template__width-content">
                <h1 class="page__title">Account login</h1>
            </section>
            <?php display_login_form_messages(); ?>
            <section class="page__login template__width-content">
                <form action="/customer/login/action" method="POST" class="page__form form" autocomplete="on">

                    <div class="form__row">
                        <label for="email" class="form__label">Email</label>
                        <input id="email" type="email" name="email" class="form__input input-shape" placeholder="example@mail.com" required autocomplete="email">
                    </div>

                    <div class="form__row">
                        <label for="password" class="form__label">Password</label>
                        <input id="password" type="password" name="password" class="form__input input-shape" placeholder="your password" required autocomplete="current-password">
                    </div>

                    <div class="form__row form__row--action">
                        <button id="form-reset" class="form__button button button--reset" type="reset" aria-label="Clear form fields">Reset</button>
                        <button class="form__button button button--submit" type="submit">Submit</button>
                    </div>
                </form>
            </section>
        </main>

        <?php require INCLUDES_PATH . '/layout/page_footer.inc.php'; ?>
    </div>
</body>

</html>