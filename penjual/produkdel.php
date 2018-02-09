<?php
	session_start();
	include "koneksi.php";
	
	$sqlpr = mysql_query("delete from produk where idproduk='$_POST[idp]'");
	
	if($sqlpr){
		echo "Produk berhasil dihapus";
	}else{
		echo "Gagal menghapus";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=produk'>";
?>