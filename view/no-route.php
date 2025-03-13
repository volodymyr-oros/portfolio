<?php http_response_code(404); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    require_once INCLUDES_PATH . '/layout/page_head.inc.php'; 
    ?>
    <title>No route</title>
</head>

<body>
    <div class="wrapper template">
        <?php require_once INCLUDES_PATH . '/layout/page_header.inc.php'; ?>

        <main class="page template__subgrid">
            <section class="page__heading template__width-content">
                <h1 class="page__title">404 - Page Not Found</h1>
            </section>
            <section class="page__content template__width-content">
                <p class="page__description">Oops! The page you're looking for doesn't exist. It might have been moved, deleted, or never existed in the first place.</p>
                <ul class="page__list page__list--unordered list">
                    <li class="list__item">
                        <a href="#" class="list__link">Try checking the URL for errors.</a>
                    </li>
                    <li class="list__item">
                        <a href="/" class="list__link">Go back to the homepage.</a>
                    </li>
                    <li class="list__item">
                        <a href="#" class="list__link">Contact us if you need further assistance.</a>
                    </li>
                </ul>
            </section>
        </main>
        
        <?php require_once INCLUDES_PATH . '/layout/page_footer.inc.php'; ?>
    </div>
</body>

</html>