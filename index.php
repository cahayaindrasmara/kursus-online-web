<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login kursus online</title>
    <link rel="stylesheet" href="stylelogin.css">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <div class="container">
        <div class="main-box">
            <h1>LOG IN</h1>
            <form action="verifikasi.php" method="POST">
                <div class="input-box">
                    <span class="icon"><i data-feather="mail"></i></span>
                    <input type="email"  name="email" required/>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i data-feather="lock"></i></span>
                    <input type="password" name="pass" required/>
                    <label>Password</label>
                </div>
                <button type="submit" class="btn" name="login">Login</button>
                <div class="register">
                    <p>Don't have an account ? <a href="signup.php" class="register-link">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>
    <?php if(isset($_GET['status'])):?> 
		<script type="text/javascript">
			<?php 
				if($_GET['status'] == 'sukses'){
					echo "alert('Login Berhasil di Lakukan');
    					window.location.assign('beranda.php');";
				}else{
					echo "pendaftaran gagal";
				}
			 ?>
		</script>
	<?php endif; ?>
    <script>
        feather.replace();
    </script>
</body>
</html>
