<?php
    require 'config.php';

    $nip = $_GET['nip'];
    mysqli_query($conn, "DELETE FROM dosen WHERE nip = '$nip' ");

    header("location: index.php");

    $nim = $_GET['nim'];
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE nim = '$nip' ");

    header("location: mhs.php");
?>