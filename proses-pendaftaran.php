<?php

include("config.php");

if(isset($_POST['daftar'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah =$_POST['sekolah'];

    $sql = "INSERT INTO calon_siswa (id, nama, email, pass, alamat, jenis_kelamin, agama, sekolah) 
    VALUE ('$id', '$nama', '$email', '$pass', '$alamat', '$jk','$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}

?>