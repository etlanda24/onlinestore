<?php
	session_start();
	include "koneksi.php";
	
	$sqlkat = mysql_query("update kategoriutama set namakat='$_POST[namakat]' where idkat='$_POST[idkat]'");
	
	if($sqlkat){
		echo "Kategori berhasil Disimpan";
	}else{
		echo "Gagal menyimpan";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=kat'>";
?>