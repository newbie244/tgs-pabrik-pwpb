<?php 
    session_start();
    require_once ('_koneksi.php');
    if (!isset($_SESSION['login'])) {
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

                <div class="col-sm-12 col-xl-12">
                    <div class="bg-light rounded h-100 p-4">
                        <h3 class="mb-4 text-center">Formulir Pegawai</h3>
                        <form action ="_crud.php" method ="POST">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">NIP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nip">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alamat">
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                                            id="gridRadios1" value="laki-laki">
                                        <label class="form-check-label">
                                            Laki - Laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                                            id="gridRadios2" value="perempuan">
                                        <label class="form-check-label">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tanggal_lahir">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="input_pegawai">Submit</button>
                        </form>
                    </div>
                </div>
                <?php require_once ('_footer.php') ?>
            </div>

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <?php require_once ('_js.php') ?>
</body>
</html>