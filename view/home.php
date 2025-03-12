<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once INCLUDES_PATH . '/layout/page_head.inc.php';
    require_once INCLUDES_PATH . '/signup/signup_view.inc.php';
    ?>
    <title>Portfolio</title>
</head>

<body>
    <div class="wrapper template">
        <?php require_once INCLUDES_PATH . '/layout/page_header.inc.php'; ?>

        <main class="page template__subgrid">
            <section class="template__width-content">
                <h1 class="sr-only">Home page</h1>
            </section>
            <?php check_signup_errors(); ?>
            <section class="page__hero hero template__width-content">
                <div class="hero__banner">
                    <div class="hero__heading">
                        <h2 class="hero__title">Banner title</h2>
                    </div>
                    <picture class="hero__picture">
                        <source srcset="/assets/images/hero/red-panda_mobile.jpg" media="(max-width: 450px)" />
                        <source srcset="/assets/images/hero/red-panda_tablet.jpg" media="(max-width: 800px)" />
                        <img class="hero__image" src="/assets/images/hero/red-panda_desktop.jpg" alt="MDN" />
                    </picture>
                </div>
            </section>
            <section class="page__technologies technologies template__width-content">
                <div class="technologies__row technologies__row--head">
                    <div class="technologies__heading">
                        <h2 class="technologies__title">Technologies Used</h2>
                    </div>
                    <p class="technologies__description">Here you can finde showcases the programming languages that played a key role in building this website. Each card represents a language I used, providing insights into its purpose and significance in the project. Click on a card to explore more about how it was implemented.</p>
                </div>
                <div class="technologies__row technologies__row--grid">
                    <a href="/" class="technologies__cell technologies__cell--html frame">
                        <h3 class="technologies__label technologies__label--html">html</h3>
                        <p class="technologies__description technologies__description--card">Structures the content and elements of the website.</p>
                    </a>
                    <a href="/" class="technologies__cell technologies__cell--css frame">
                        <h3 class="technologies__label technologies__label--css">css</h3>
                        <p class="technologies__description technologies__description--card">Styles the design, layout, and responsiveness.</p>
                    </a>
                    <a href="/" class="technologies__cell technologies__cell--js frame">
                        <h3 class="technologies__label technologies__label--js">js</h3>
                        <p class="technologies__description technologies__description--card">Adds interactivity and enhances user experience.</p>
                    </a>
                    <a href="/" class="technologies__cell technologies__cell--php frame">
                        <h3 class="technologies__label technologies__label--php">php</h3>
                        <p class="technologies__description technologies__description--card">Handles server-side logic and dynamic content.</p>
                    </a>
                </div>
            </section>
        </main>

        <?php require_once INCLUDES_PATH . '/layout/page_footer.inc.php'; ?>
    </div>
</body>

</html>