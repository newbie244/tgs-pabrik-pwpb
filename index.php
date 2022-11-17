<?php 
require_once ('_koneksi.php');

session_start();

if(!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php require_once ('_css.php') ?>
</head>
<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <?php require_once ('_sidebar.php') ?>
            <!-- Content Start -->
            <div class="content">
                <?php require_once ('_nav.php') ?>
                <?php require_once ('_footer.php') ?>
            </div>

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <?php require_once ('_js.php') ?>
</body>

</html>