<?php
session_start();
if (!isset($_SESSION['username'])){
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://font.googleapis.com/css?family=Fjalla+One|Abril+Fatface|Noto+Sans|Ubuntu|Parkinsans|Roboto+Condensed|Poppins&effect=shadow-multiple|utline">
	<title> Beranda</title>
	<link rel="stylesheet" type="text/css" href="style-popup.css">
	<link rel="stylesheet" type="text/css" href="style-web.css">
	<script type="text/javascript" scr="jquery.js"></script>
</head>
<body>
<div class="content">
<header>
	<img src="image/header.png" style="border-radius: 8px" height="100%" width="100%">
</header>

	<div class="menu">
		<ul>
			<li><a href="index.php?page=beranda">Beranda</a></li>
			<li><a href="index.php?page=tambah">Tambah</a></li>
			<li><a href="index.php?page=tampil">Tampil</a></li>
			<li><a onClick="openPopup()">Logout</a>
				<div class="popup" id="popup">
					<img src="Images/close.jpeg">
					<h2>Terima Kasih</h2>
					<p>Silahkan klik "OK" jika ingin keluar</p>
					<button type="button" onClick="closePopup()">OK</button>
					<button type="button" onClick="outPopup()">Tutup</button>
				</div>
			</li>
			<li><a onClick="userPopup()"><strong>
				<?php echo $_SESSION['username'];?></strong></a>
				<div class="userpopup" id="userpopup">
					<img src="Images/user.jpeg">
					<h2>Terima Kasih</h2>
					<p><strong><?php echo $_SESSION['username']; ?>
				</strong> sedang aktif</p>
					<button type="button" onClick="closeuserPopup()">Tutup</button>
				</div>
			</li>
		</ul>
	</div>
<div class="main">
	<?php
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'beranda':
				include "page/beranda.php";
				break;
			case 'tambah':
				include "page/tambah.php";
				break;
			case 'tampil':
				include "page/tampil.php";
				break;
			case 'ubah':
				include "page/ubah.php";
				break;
			case 'hapus':
				include "page/hapus.php";
				break;
			case 'logout':
				include "logout.php";
				break;
			default:
				echo "<center><h3>Maaf, halaman tidak ditemukan!</h3></center>";
				break;
		}
	}else{
		include "page/beranda.php";
	}
	?>
</div>
<script>
	let popup = document.getElementById("popup");
	function openPopup(){
		popup.classList.add("open-popup");
	}
	function closePopup(){
		window.location.href="logout.php";
	}
	function outPopup(){
		popup.classList.remove("open-popup");
	}
</script>
<script>
	let userpopup = document,getElementById("userpopup");
	function userPopup(){
		userpopup.classList.add("openuserpopup");
	}
	function closeuserPopup(){
		userpopup.classList.remove("openuserpopup");
	}
</script>
<footer>
	<div class="button">
		<p>&copy;2024 Pemrograman Web. All Rights Reserved | Design by Fikri Erlangga</p>
	</div>
</footer>
</div>
</body>  