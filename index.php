<!DOCTYPE html>
<html lang="en">
<head>
	<title>SPPKK</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/Logo.png"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/background.jfif');">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<img src="images/Logo.png" alt="" >
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						SPPKK
					</span>
					
					<div class="ttl">
						Sistem Seleksi Pegawai Baru Kementrian Kelautan dan Perikanan
					</div>

						<div class="container-login100-form-btn">
                            <button class="login100-form-btn lp"><a href="daftar.php"> Daftar</a></button>
						</div>

						<div class="container-login100-form-btn">
                        <button class="login100-form-btn lp"><a href="login.php">Login Pendaftar</a></button>
						</div>

						<div class="container-login100-form-btn">
                        <button class="login100-form-btn lp"><a href="login-admin.php">Login Admin</a></button>
						</div>

                        <?php if (isset($_GET['status'])) : ?>
                        </br>
                            <p>
                                <?php
                                if ($_GET['status'] == 'sukses') {
                                    echo "<h3>Pendaftaran siswa baru berhasil!</h3>";
                                } else {                            
                                    echo "<br><br><h3>Pendaftaran gagal!</h3>";
                                }
                                ?>
                            </p>
                        <?php endif; ?>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>