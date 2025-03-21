<?php
require_once INCLUDES_PATH . '/config_session.inc.php';
require_once INCLUDES_PATH . '/signup/signup_view.inc.php';

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
    <title>Create an account</title>
</head>

<body>
    <div class="wrapper template">
        <?php require INCLUDES_PATH . '/layout/page_header.inc.php'; ?>

        <main class="page template__subgrid">
            <section class="page__heading template__width-content">
                <h1 class="page__title">Create an account</h1>
            </section>
            <?php check_signup_errors(); ?>
            <section class="page__signup template__width-content">
                <form action="/customer/signup/action" method="POST" class="page__form form" autocomplete="on">
                    <div class="form__row">
                        <label for="first-name" class="form__label">First name</label>
                        <input id="first-name" type="text" name="first-name" class="form__input input-shape" placeholder="Enter your first name..." required autocomplete="given-name">
                    </div>
                    <div class="form__row">
                        <label for="last-name" class="form__label">Last name</label>
                        <input id="last-name" type="text" name="last-name" class="form__input input-shape" placeholder="Enter your last name..." required autocomplete="family-name">
                    </div>
                    <div class="form__row">
                        <label for="email" class="form__label">Email</label>
                        <input id="email" type="email" name="email" class="form__input input-shape" placeholder="Enter your email address..." required autocomplete="email">
                    </div>
                    <div class="form__row">
                        <label for="password" class="form__label">Password</label>
                        <input id="password" type="password" name="password" class="form__input input-shape" placeholder="Enter your password..." required autocomplete="current-password">
                    </div>
                    <div class="form__row">
                        <label for="confirm-password" class="form__label">Confirm password</label>
                        <input id="confirm-password" type="password" name="confirm-password" class="form__input input-shape" placeholder="The same as your password..." required autocomplete="current-password">
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