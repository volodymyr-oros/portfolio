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
            <div class="page__title template__width-content">
                <h1 class="page__title-text sr-only">Home page</h1>
            </div>
            <?php check_signup_errors(); ?>
            <div class="page__hero hero template__width-content">
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
            </div>
            <div class="page__content template__width-content"></div>
        </main>

        <?php require_once INCLUDES_PATH . '/layout/page_footer.inc.php'; ?>
    </div>
</body>

</html>