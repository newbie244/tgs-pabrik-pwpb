<?php
require_once ('_koneksi.php'); 

if (isset($_POST["input_pegawai"])) {
    $nip = $_POST["nip"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $query = "INSERT INTO pegawai VALUES('','$nip','$nama','$alamat','$jenis_kelamin','$tanggal_lahir')";

    mysqli_query($conn, $query);

    header("location: table.php");
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE from pegawai where id_pegawai='$id'";
    mysqli_query($conn, $query);
    header("Location: table.php");
}


if(isset($_POST['ubah_pegawai'])){
    $id = $_POST['id'];
    $nip = $_POST["nip"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $tanggal_lahir = $_POST["tanggal_lahir"];

    $query = "UPDATE pegawai SET
              nip = '$nip',
              nama = '$nama',
              alamat = '$alamat',
              jenis_kelamin = '$jenis_kelamin',
              tanggal_lahir = '$tanggal_lahir'
              WHERE id_pegawai=$id
    ";
    mysqli_query($conn, $query);

    header("location: table.php");
}
if(isset($_POST['register'])){
    function registrasi($data){
        global $conn;
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn,$data['password']);
        $password2 = mysqli_real_escape_string($conn,$data['password2']);

        $hasil = mysqli_query($conn, "SELECT username FROM user WHERE username='$username'");

        if(mysqli_fetch_assoc($hasil)){
            echo "<script>
                alert('username sudah terdaftar');
            </script>";
            return false;
        }

        if ($password !== $password2) {
            echo "<script>
                alert('konfirmasi password salah');
            </script>";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO user VALUES(
            '',
            '$username',
            '$password'
            )";

            mysqli_query($conn, $query);
            return mysqli_affected_rows($conn);
    }

    if (registrasi($_POST) > 0) {
        echo "<script>
            alert('user baru berhasil ditambahkan');
        </script>";
        header("location: login.php"); 
        exit;
    }else {
        echo mysqli_error($conn);
    }
}
?>