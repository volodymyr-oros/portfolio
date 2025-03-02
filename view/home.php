<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/layout/page_head.inc.php'; 
    require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/signup/signup_view.inc.php';
    ?>
    <title>Portfolio</title>
</head>

<body>
    <div class="wrapper template">
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/layout/page_header.inc.php'; ?>

        <main class="page template__subgrid">
            <div class="page__title template__width-content">
                <h1 class="page__title-text sr-only">Home page</h1>
            </div>
            <?php check_signup_errors(); ?>
            <div class="page__content template__width-content"></div>
        </main>
        
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/layout/page_footer.inc.php'; ?>
    </div>
</body>

</html>