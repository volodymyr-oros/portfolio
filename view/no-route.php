<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/layout/page_head.inc.php'; 
    require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/signup/signup_view.inc.php';
    ?>
    <title>No route</title>
</head>

<body>
    <div class="wrapper template">
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/layout/page_header.inc.php'; ?>

        <main class="page template__subgrid">
            <div class="page__title template__width-content">
                <h1 class="page__title-text">404 Not found</h1>
            </div>
            <div class="page__content template__width-content"></div>
        </main>
        
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/layout/page_footer.inc.php'; ?>
    </div>
</body>

</html>