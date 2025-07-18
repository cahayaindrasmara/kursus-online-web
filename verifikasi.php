<?php
session_start();

include('config.php');

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $pass = mysqli_real_escape_string($db, $_POST['pass']);    

    $query = "SELECT * FROM calon_siswa WHERE email = '$email' AND pass = '$pass'";
    $result = mysqli_query($db, $query);

    if(mysqli_num_rows($result) > 0) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
    
} else {
    die("Akses dilarang...");
}
?>