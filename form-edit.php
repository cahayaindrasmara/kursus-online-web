<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesignup.css">
    <title>Update Data</title>
</head>
<body>
    <div class="split-screen">
        <div class="left">
            <section class="copy">
                <h1>Welcome To Kursus Online</h1>
                <p>Perbarui Data Pengguna</p>
            </section>
        </div>
        <div class="right">
            <form action="proses-edit.php" method="POST">

                <?php
                    include("config.php");

                    $id = isset($_GET['id']) ? $_GET['id'] : die('ID tidak ditemukan');

                    $sql = "SELECT * FROM calon_siswa WHERE id = $id";
                    $query = mysqli_query($db, $sql);   

                    if (mysqli_num_rows($query) < 1) {
                        die("Data tidak ditemukan...");
                    }

                    $siswa = mysqli_fetch_array($query);
                ?>

                <section class="copy">
                    <h2>Update Data</h2>
                    <div class="login-container">
                        <p>----------sudah mempunyai akun? <a href="index.php"><strong>Log In</strong></a>----------</p>
                    </div>
                </section>
                <div class="input-container id">
                    <label for="id"></label>
                    <input type="hidden" required name="id" value="<?php echo $siswa['id']; ?>"/>
                </div>
                <div class="input-container nama">
                    <label for="nama">Full Name</label>
                    <input type="text" required name="nama" placeholder="Nama Kamu"/>
                </div>
                <div class="input-container email">
                    <label for="email">Email</label>
                    <input type="email" required name="email" placeholder="nama@gmail.com"/>
                </div>
                <div class="input-container pass">
                    <label for="pass">Password</label>
                    <input type="password" required name="pass" placeholder="Minimal harus 8 karakter"/>
                </div>
                <div class="input-container alamat">
                    <label for="alamat">Alamat</label>
                    <input type="text" required name="alamat" placeholder="Alamat kamu"/>
                </div>
                <div class="input-container jenis_kelamin">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <input type="text" required name="jenis_kelamin" placeholder="Jenis kelamin kamu"/>
                </div>
                <div class="input-container agama">
                    <label for="agama">Agama</label>
                    <input type="text" required name="agama" placeholder="Agama Kamu"/>
                </div>
                <div class="input-container sekolah">
                    <label for="sekolah">Asal Sekolah</label>
                    <input type="text" required name="sekolah" placeholder="Asal sekolah kamu"/>
                </div>
                <button class="signup-btn" type="submit" name="simpan">Simpan</button>
            </form>
        </div>
    </div>
</body>
</html>
