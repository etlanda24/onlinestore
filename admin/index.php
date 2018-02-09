<?php
	session_start();
	if(!empty($_SESSION["namaadm"]) && !empty($_SESSION["passadm"])){
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Halaman Administrator</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div class="container1">
	<div class="grid">
	  <div class="dh12">
		<div class="dh3">				
		  <ul id="menu">
			<li><a href="" class="current">Selamat Datang</a></li>
			<li><a href="<?php echo "?p=home";?>">Beranda</a></li>
			<li><a href="<?php echo "?p=kat";?>">Kategori Utama</a></li>
			<li><a href="<?php echo "?p=kategori";?>">Kategori Tambahan</a></li>
			<li><a href="<?php echo "?p=jasakirim";?>">Jasa Kirim</a></li>
			<li><a href="<?php echo "?p=brand";?>">Brand</a></li>
			<li><a href="<?php echo "?p=order";?>">Pesanan</a></li>
			<li><a href="<?php echo "?p=logout";?>">Logout</a></li>
			</ul>
		  </div>
		<div class="dh9">
		  <div class="nav">Halaman Administrator</div>
				<div class="isiadmin">
<?php
	if($_GET["p"] == "kat"){
		include "kat.php";	
	}else if($_GET["p"] == "katadd"){
		include "katadd.php";	
	}else if($_GET["p"] == "kataddaksi"){
		include "kataddaksi.php";
	}else if($_GET["p"] == "katedit"){
		include "katedit.php";
	}else if($_GET["p"] == "kateditaksi"){
		include "kateditaksi.php";
	}else if($_GET["p"] == "katdel"){
		include "katdel.php";
	}else if($_GET["p"] == "kategori"){
		include "kategori.php";	
	}else if($_GET["p"] == "kategoriadd"){
		include "kategoriadd.php";	
	}else if($_GET["p"] == "kategoriaddaksi"){
		include "kategoriaddaksi.php";
	}else if($_GET["p"] == "kategoriedit"){
		include "kategoriedit.php";
	}else if($_GET["p"] == "kategorieditaksi"){
		include "kategorieditaksi.php";
	}else if($_GET["p"] == "kategoridel"){
		include "kategoridel.php";
	}else if($_GET["p"] == "jasakirim"){
		include "jasakirim.php";	
	}else if($_GET["p"] == "jasakirimadd"){
		include "jasakirimadd.php";	
	}else if($_GET["p"] == "jasakirimaddaksi"){
		include "jasakirimaddaksi.php";
	}else if($_GET["p"] == "jasakirimedit"){
		include "jasakirimedit.php";
	}else if($_GET["p"] == "jasakirimeditaksi"){
		include "jasakirimeditaksi.php";
	}else if($_GET["p"] == "jasakirimdel"){
		include "jasakirimdel.php";			
	}else if($_GET["p"] == "brand"){
		include "brand.php";	
	}else if($_GET["p"] == "brandadd"){
		include "brandadd.php";	
	}else if($_GET["p"] == "brandaddaksi"){
		include "brandaddaksi.php";		
	}else if($_GET["p"] == "branddel"){
		include "branddel.php";		
	}else if($_GET["p"] == "order"){
		include "order.php";		
	}else if($_GET["p"] == "orderdetail"){
		include "orderdetail.php";
	}else if($_GET["p"] == "orderdetailstatus"){
		include "orderdetailstatus.php";	
	}else if($_GET["p"] == "logout"){
		include "logout.php";
	}else{
		include "home.php";
	}
?>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<?php
	}else{
		include "login.php";
	}
?>