<?php
	session_start();
	include "koneksi.php";
	$sqlp = mysql_query("select * from penjual where emailpenjual='$_SESSION[namapen]'");
	$rp = mysql_fetch_array($sqlp);
	
   $nmfoto1  = $_FILES["foto1"]["name"];
   $lokfoto1 = $_FILES["foto1"]["tmp_name"];
   if(!empty($lokfoto1)){
   	  move_uploaded_file($lokfoto1, "../fotoproduk/$nmfoto1");
   }
   
   $nmfoto2  = $_FILES["foto2"]["name"];
   $lokfoto2 = $_FILES["foto2"]["tmp_name"];
   if(!empty($lokfoto2)){
   	  move_uploaded_file($lokfoto2, "../fotoproduk/$nmfoto2");
   }
   
   $nmfoto3  = $_FILES["foto3"]["name"];
   $lokfoto3 = $_FILES["foto3"]["tmp_name"];
   if(!empty($lokfoto3)){
   	  move_uploaded_file($lokfoto3, "../fotoproduk/$nmfoto3");
   }
   
   $spek   = nl2br($_POST["spesifikasi"]);
   $detail = nl2br($_POST["detailproduk"]);
   $isi    = nl2br($_POST["isikotak"]);
	
	$sqlpr = mysql_query("insert into produk (idkat, idkategori, idpenjual, idbrand, namaproduk, hargaproduk, stok, spesifikasi, detailproduk, diskon, isikotak, foto1, foto2, foto3, tglpost) values ('$_POST[idkat]', '$_POST[idkategori]', '$rp[idpenjual]', '$_POST[idbrand]', '$_POST[namaproduk]', '$_POST[hargaproduk]', '$_POST[stok]', '$spek', '$detail', '$_POST[diskon]', '$isi', '$nmfoto1', '$nmfoto2', '$nmfoto3', NOW())");
	
	if($sqlpr){
		echo "Produk berhasil Disimpan";
	}else{
		echo "Gagal menyimpan";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=produk'>";
?>