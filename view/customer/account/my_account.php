<?php
require_once INCLUDES_PATH . '/config_session.inc.php';
include_once INCLUDES_PATH . '/my_account/my_account.inc.php';
include_once INCLUDES_PATH . '/my_account/my_account_view.inc.php';
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
            <section class="page__heading template__width-content">
                <h1 class="page__title">My account profile</h1>
            </section>
            <?php display_account_error_messages(); ?>
            <section class="page__greeting template__width-content">
                <?php display_greeting(); ?>
            </section>
            <section class="page__account account template__width-content">
                <div class="account__column account__column--sidebar">
                    <ul class="account__menu">
                        <li class="account__item">
                            <a href="#" class="account__link account__link--current">My Account</a>
                        </li>
                        <li class="account__item">
                            <a href="#" class="account__link">Orders</a>
                        </li>
                        <li class="account__item">
                            <a href="#" class="account__link">Addresse</a>
                        </li>
                        <li class="account__item">
                            <a href="#" class="account__link">Payment information</a>
                        </li>
                        <li class="account__item">
                            <a href="#" class="account__link">Settings</a>
                        </li>
                        <li class="account__item">
                            <form action="/customer/logout/action" method="post" class="account__logout">
                                <button type="submit" class="account__link account__link--logout">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="account__column account__column--content">
                    <div class="account__info">
                        <div class="account__heading">
                            <h2 class="account__title">Account information</h2>
                        </div>
                        <ul class="account__attribute attribute">
                            <li class="attribute__list">
                                <span class="attribute__label">Status: <a href="#" class="attribute__value">Enable</a></span>
                            </li>
                            <li class="attribute__list">
                                <span class="attribute__label">Role: <a href="#" class="attribute__value">Author</a></span>
                            </li>
                            <li class="attribute__list">
                                <span class="attribute__label">Account balance: <a href="#" class="attribute__value">100$</a></span>
                            </li>
                            <li class="attribute__list">
                                <span class="attribute__label">Review rating: <a href="#" class="attribute__value">5 out of 5</a></span>
                            </li>
                            <li class="attribute__list">
                                <span class="attribute__label">Articles: <a href="#" class="attribute__value">6</a></span>
                            </li>
                            <li class="attribute__list">
                                <a href="#" class="attribute__value">View more</a>
                            </li>
                        </ul>
                    </div>
                    <div class="account__addresses">
                        <div class="account__heading">
                            <h2 class="account__title">Account addresses</h2>
                        </div>
                        <div class="account__address account__address--billing address">
                            <div class="address__heading">
                                <h3 class="address__title">Billing address</h3>
                            </div>
                            <dl class="address__list">
                                <dt class="address__term">Email:</dt>
                                <dd class="address__details">lordcommander@wall.nw</dd>
                                <dt class="address__term">Full name:</dt>
                                <dd class="address__details">Jogn Show</dd>
                                <dt class="address__term">Street address:</dt>
                                <dd class="address__details">North wall, gate 2</dd>
                                <dt class="address__term">Region:</dt>
                                <dd class="address__details">Winterfell</dd>
                                <dt class="address__term">Country:</dt>
                                <dd class="address__details">North</dd>
                                <dt class="address__term">Postal code:</dt>
                                <dd class="address__details">AB12 3CD</dd>
                                <dt class="address__term">Phone number:</dt>
                                <dd class="address__details">+44-##-####-####</dd>
                            </dl>
                            <div class="address__action">
                                <a href="#" class="address__link">Change</a>
                                <a href="#" class="address__link">Edit</a>
                            </div>
                        </div>
                        <div class="account__address account__address--shipping address">
                            <div class="address__heading">
                                <h3 class="address__title">Shipping address</h3>
                            </div>
                            <dl class="address__list">
                                <dt class="address__term">Email:</dt>
                                <dd class="address__details">lordcommander@wall.nw</dd>
                                <dt class="address__term">Full name:</dt>
                                <dd class="address__details">Jogn Show</dd>
                                <dt class="address__term">Street address:</dt>
                                <dd class="address__details">North wall, gate 2</dd>
                                <dt class="address__term">Region:</dt>
                                <dd class="address__details">Winterfell</dd>
                                <dt class="address__term">Country:</dt>
                                <dd class="address__details">North</dd>
                                <dt class="address__term">Postal code:</dt>
                                <dd class="address__details">AB12 3CD</dd>
                                <dt class="address__term">Phone number:</dt>
                                <dd class="address__details">+44-##-####-####</dd>
                            </dl>
                            <div class="address__action">
                                <a href="#" class="address__link">Change</a>
                                <a href="#" class="address__link">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php require INCLUDES_PATH . '/layout/page_footer.inc.php'; ?>
    </div>
</body>

</html>