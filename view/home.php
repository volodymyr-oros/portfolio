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
            <section class="page__title template__width-content">
                <h1 class="page__title-text sr-only">Home page</h1>
            </section>
            <?php check_signup_errors(); ?>
            <section class="page__hero hero template__width-content">
                <div class="hero__frame">
                    <div class="hero__column">
                        <picture class="hero__picture">
                            <source srcset="/assets/images/hero/red-panda_mobile.jpg" media="(max-width: 450px)" />
                            <source srcset="/assets/images/hero/red-panda_tablet.jpg" media="(max-width: 800px)" />
                            <img src="/assets/images/hero/red-panda_desktop.jpg" alt="MDN" />
                        </picture>
                    </div>
                    <div class="hero__column">
                        <h2 class="hero__title">What is all about</h2>
                        <p class="hero__text">This project showcases my skills, projects, and passion for web development. Here, you'll experience a blend of creativity, functionality, and attention to detail in every project.</p>
                        <a href="" class="hero__link link">Find out more</a>
                    </div>
                </div>
            </section>
            <section class="page__technologies technologies template__width-content">
                <div class="technologies__banner">
                    <h2 class="technologies__title">Technologies Used</h2>
                    <p class="technologies__description">This section showcases the programming languages that played a key role in building this website. Each card represents a language I used, providing insights into its purpose and significance in the project. Click on a card to explore more about how it was implemented.</p>
                </div>
                <div class="technologies__grid">
                    <div class="technologies__cell">
                        <div class="technologies__html">
                            <h3 class="technologies__label">html</h3>
                            <p class="technologies__text">Structures the content and elements of the website.</p>
                        </div>
                    </div>
                    <div class="technologies__cell">
                        <div class="technologies__css">
                            <h3 class="technologies__label">css</h3>
                            <p class="technologies__text">Styles the design, layout, and responsiveness.</p>
                        </div>
                    </div>
                    <div class="technologies__cell">
                        <div class="technologies__js">
                            <h3 class="technologies__label">js</h3>
                            <p class="technologies__text">Adds interactivity and enhances user experience.</p>
                        </div>
                    </div>
                    <div class="technologies__cell">
                        <div class="technologies__php">
                            <h3 class="technologies__label">php</h3>
                            <p class="technologies__text">Handles server-side logic and dynamic content.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php require_once INCLUDES_PATH . '/layout/page_footer.inc.php'; ?>
    </div>
</body>

</html>