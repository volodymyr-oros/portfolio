<?php
require_once "../../includes/config_session.inc.php";
require_once "../../includes/signup_view.inc.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php require("../../includes/header-meta.php"); ?>
    <script src="../../assets/js/form.js" defer></script>
    <title>Create an account</title>
</head>

<body>
    <div class="wrapper template">
        <?php require("../../includes/header.php"); ?>
        <?php check_signup_errors(); ?>
        <main class="page">
            <div class="page__box template__inherit template--content">
                <div class="page__content">
                    <div class="page__title-wrapper">
                        <h1 class="page__title-text">Customer account create</h1>
                    </div>
                    <div class="page__section flex flex-jst-cnt">
                        <form action="../../includes/signup.inc.php" method="POST" class="form" autocomplete="on">
                            <div class="form__row">
                                <label for="first-name" class="form__label">First name</label>
                                <input id="first-name" type="text" name="first-name" class="form__input" placeholder="Enter your first name..." required autocomplete="given-name">
                            </div>

                            <div class="form__row">
                                <label for="last-name" class="form__label">Last name</label>
                                <input id="last-name" type="text" name="last-name" class="form__input" placeholder="Enter your last name..." required autocomplete="family-name">
                            </div>

                            <div class="form__row">
                                <label for="email" class="form__label">Email</label>
                                <input id="email" type="email" name="email" class="form__input" placeholder="Enter your email address..." required autocomplete="email">
                            </div>

                            <div class="form__row">
                                <label for="password" class="form__label">Password</label>
                                <input id="password" type="password" name="password" class="form__input" placeholder="Enter your password..." required autocomplete="current-password">
                            </div>

                            <div class="form__row">
                                <label for="confirm-password" class="form__label">Confirm password</label>
                                <input id="confirm-password" type="password" name="confirm-password" class="form__input" placeholder="The same as your password..." required autocomplete="current-password">
                            </div>

                            <div class="form__row form__row--action">
                                <button class="form__button button button__submit" type="submit">Submit</button>
                                <button id="form-reset" class="form__button button button__reset" type="reset" aria-label="Clear form fields">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <?php require("../../includes/footer.php"); ?>
    </div>
</body>

</html>