<?php

include("config.php");

if(isset($_POST['simpan'])){
    
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah'];


    $sql = "UPDATE calon_siswa SET nama='$nama', email='$email', pass='$pass', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah='$sekolah' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: list-siswa.php');
    } else {
        die("Gagal menyimpang perubahan...");
    }
} else {
    die("Akses dilarang...");
}

?>