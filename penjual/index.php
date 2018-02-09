<?php
	session_start();
	if(!empty($_SESSION["namapen"]) && !empty($_SESSION["passpen"])){
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Halaman Penjual</title>
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
			<li><a href="<?php echo "?p=produk";?>">Produk</a></li>
			<li><a href="<?php echo "?p=order";?>">Pesanan</a></li>
			<li><a href="<?php echo "?p=logout";?>">Logout</a></li>
			</ul>
		  </div>
		<div class="dh9">
		  <div class="nav">Halaman Penjual</div>
				<div class="isiadmin">
<?php
	if($_GET["p"] == "produk"){
		include "produk.php";
	}else if($_GET["p"] == "produkadd"){
		include "produkadd.php";
	}else if($_GET["p"] == "produkaddaksi"){
		include "produkaddaksi.php";
	}else if($_GET["p"] == "produkedit"){
		include "produkedit.php";
	}else if($_GET["p"] == "produkeditaksi"){
		include "produkeditaksi.php";
	}else if($_GET["p"] == "produkdel"){
		include "produkdel.php";
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
		if($_GET["p"]=="register"){
			include "register.php";
		}else if($_GET["p"]=="registeraksi"){
			include "registeraksi.php";
		}else{
			include "login.php";
		}
	}
?>