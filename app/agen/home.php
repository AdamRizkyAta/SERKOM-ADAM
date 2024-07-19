<?php  
	if (!isset($_GET['menu'])) {
	 	header('location:hal_utama.php?menu=home');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
</head>
<body>
	<div class="container-fluid">

		<div class="row">
		<img alt="Brand" src="../images/logo_payment.png" width="1350px" >
			<!-- <div class="col-md-12">
				<div class="alert alert-success alert-dimis">
					<center><h4>LOGIN BERHASIL <?php echo $_SESSION['nama_agen']; ?></h4></center>
					<h2>APLIKASI PEMBAYARAN LISTRIK PASCA BAYAR</h2>
				</div>
			</div> -->
		</div>
	</div>
</body>
</html>