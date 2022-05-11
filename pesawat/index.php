<?php 
session_start();
if(isset($_SESSION["username"])){
}else{
	echo header("location:login.php");
	
}
include('template/top.php');
include('template/navigasi.php');

?>

<div id="main">
	<div class="content">
		<marquee style="background: #07A0DC; padding:5px; color: #fff;">Selamat Datang di Aplikasi Penjualan Tiket Pesawat Aplikasi Penjualan Tiket Online Bytra</marquee>
		<div id="profile">
			<img src="foto/pp.jpg" alt="" class="animated flipInY">
			<center>
				<h2>TIKET PESAWAT BYTRA</h2>
				<hr/>
			</center>
			

		</div>
		<hr/>

		<h2>Aplikasi Penjualan Tiket Pesawat Bytra</h2>
		<br />
		<br />
		<br />
	</div>
</div>


<?php include('template/footer.php'); ?>