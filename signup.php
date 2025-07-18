<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesignup.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="split-screen">
        <div class="left">
            <section class="copy">
                <h1>Welcome To Kursus Online</h1>
                <p>Universitas Abdurrab</p>
            </section>
        </div>
        <div class="right">
            <form action="proses-pendaftaran.php" method="POST">
                <section class="copy">
                    <h2>Sign Up</h2>
                    <div class="login-container">
                        <p>----------sudah mempunyai akun? <a href="index.php"><strong>Log In</strong></a>----------</p>
                    </div>
                </section>
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
                    <input type="text" required name="alamat" placeholder="Alamat Kamu"/>
                </div>
                <div class="input-container jenis_kelamin">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <input type="text" required name="jenis_kelamin" placeholder="Jenis Kelamin Kamu"/>
                </div>
                <div class="input-container agama">
                    <label for="agama">Agama</label>
                    <input type="text" required name="agama" placeholder="Agama Kamu"/>
                </div>
                <div class="input-container sekolah">
                    <label for="sekolah">Sekolah Asal</label>
                    <input type="text" required name="sekolah" placeholder="Sekolah kamu"/>
                </div>
                <div class="input-container cta">
                    <label class="checkbox-container">
                        <input type="checkbox"/>
                        <span class="checkmark"></span>
                        Sign Up for email updates.
                    </label>
                </div>
                <button class="signup-btn" type="submit" name="daftar" >Sign Up</button>
            </form>
        </div>
    </div>
</body>
</html>
