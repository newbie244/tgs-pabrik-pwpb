<?php 
session_start();
require_once ('_koneksi.php');

if (isset($_SESSION['login'])) {
    header("location: index.php");
    exit;
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hasil = mysqli_query($conn,"SELECT * FROM user WHERE username='$username'");

    if (mysqli_num_rows($hasil) === 1) { 
        $row = mysqli_fetch_assoc($hasil);
        if (password_verify($password, $row['password'])) {
            $_SESSION['login'] = true;

            header("location: index.php");
            exit;
        }
        header("location: login.php");
        exit;
    }
    $error = true;
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
        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <form action="" method="POST">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <a href="index.php" class="">
                                    <h3 class="text-primary"><i class="fa me-2"></i>Welcome</h3>
                                </a>
                                <h3>Login</h3>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="nama" name="username">
                                <label for="floatingInput">Username</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="login">Login</button>
                            <p class="text-center mb-0">Don't have an Account? <a href="register.php">Register</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <?php require_once ('_js.php') ?>
</body>

</html>