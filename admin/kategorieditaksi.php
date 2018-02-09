<?php
	session_start();
	include "koneksi.php";
	
	$sqlka = mysql_query("update kategoritambahan set namakategori='$_POST[namakategori]' where idkategori='$_POST[idkategori]'");
	
	if($sqlka){
		echo "Kategori berhasil Disimpan";
	}else{
		echo "Gagal menyimpan";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=kategori'>";
?>