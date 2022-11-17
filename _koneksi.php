<?php
    $namahost = "localhost";
    $user = "root";
    $password = "";
    $database = "pabrik";
    $conn = mysqli_connect($namahost,$user,$password,$database);

    if (!($conn)) {
        echo "Database belum terhubung";
    }
?> 