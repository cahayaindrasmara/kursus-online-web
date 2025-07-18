<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database kursusonline</title>
    <link rel="stylesheet" href="styledb.css">
</head>
<body>
    <header>
        <h3>Database Siswa</h3>
        <h1>Kursus Online</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="signup.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>

    <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "Pendaftaran siswa baru berhasil!";
                } else {
                    echo "Pendaftaran gagal";
                }
            ?>
        </p>
    <?php endif; ?>
</body>
</html>