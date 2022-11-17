<?php 
session_start();
require_once ('_koneksi.php');
if (isset($_SESSION['login'])) {
    header("location: index.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php require_once ('_css.php') ?>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <form action="_crud.php" method="post">

                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <a href="index.html" class="">
                                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                                </a>
                                <h3>Sign Up</h3>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingText" placeholder="jhondoe" name="username">
                                <label for="floatingText">Username</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Masukkan Password" name="password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Masukkan Password" name="password2">
                                <label for="floatingPassword">Konfirmasi Password</label>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="register">Sign Up</button>
                            <p class="text-center mb-0">Already have an Account? <a href="login.php">Sign In</a></p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

    <?php require_once ('_js.php') ?>
</body>

</html>