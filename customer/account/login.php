<!DOCTYPE html>
<html lang="en">

<head>
    <?php require '../../includes/layout/page_head.inc.php'; ?>
    <script src="/assets/js/form.js" defer></script>
    <title>Account login</title>
</head>

<body>
    <div class="wrapper template">
        <?php require '../../includes/layout/page_header.inc.php'; ?>
        <main class="page">
            <div class="page__box template--content">
                <div class="page__content">
                    <div class="page__title-wrapper">
                        <h1 class="page__title-text">Login in to your account</h1>
                    </div>
                    <div class="page__section flex flex-jst-cnt">
                        <form action="../../includes/login/login.inc.php" method="POST" class="form" autocomplete="on">

                            <div class="form__row">
                                <label for="email" class="form__label">Email</label>
                                <input id="email" type="email" name="email" class="form__input" placeholder="Enter your email address..." required autocomplete="email">
                            </div>

                            <div class="form__row">
                                <label for="password" class="form__label">Password</label>
                                <input id="password" type="password" name="password" class="form__input" placeholder="Enter your password..." required autocomplete="current-password">
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
        <?php require '../../includes/layout/page_footer.inc.php'; ?>
    </div>
</body>

</html>