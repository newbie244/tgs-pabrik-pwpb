<?php 
    session_start();
    require_once ('_koneksi.php');
    if (!isset($_SESSION['login'])) {
        header("location: login.php");
        exit;
    }
    $query = "SELECT * FROM pegawai";
    $data_pegawai = mysqli_query($conn, $query);
    $no = 1;
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


                    <div class="container-fluid pt-4 px-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-xl-12">
                                <div class="bg-light rounded h-100 p-4">
                                    <h6 class="mb-4">Tabel Pegawai</h6>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">NIP</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Jenis Kelamin</th>
                                                <th scope="col">Tanggal Lahir</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data_pegawai as $pegawai): ?>
                                            <tr>
                                                <td><?= $no; ?></td> 
                                                <td><?= $pegawai['nip']; ?></td>
                                                <td><?= $pegawai['nama']; ?></td>
                                                <td><?= $pegawai['alamat']; ?></td>
                                                <td><?= $pegawai['jenis_kelamin']; ?></td>
                                                <td><?= $pegawai['tanggal_lahir']; ?></td>
                                                <td>
                                                    <a href="_crud.php?id=<?= $pegawai ['id_pegawai']; ?>" onclick="return confirm(`Apakah anda yakin ingin menghapus <?= $pegawai['nama']; ?> dari daftar ?`)" class="badge btn btn-danger">Hapus</a>
                                                    <a href="_ubah.php?id=<?= $pegawai['id_pegawai']; ?>" class="badge btn btn-warning">Edit</a>
                                                </td>
                                            </tr>
                                            <?php $no++; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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