<?php
include_once "top.php";
include_once "menu.php";
?>

<div>
    <!-- <div class="container-fluid px-4"> -->
    <?php
    error_reporting(0);
    // Devine the url
    $url = $_GET['url'];

    // Routing
    if (empty($url)) {
        include_once "dashboard.php";
    } else {
        include_once "$url.php";
    }
    ?>
    <!-- </div> -->
</div>

<?php include_once "bottom.php"; ?>