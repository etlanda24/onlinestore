<?php
	session_start();
	include "koneksi.php";
	
	$sqlkat = mysql_query("delete from kategoriutama where idkat='$_GET[idk]'");
	
	if($sqlkat){
		echo "Kategori berhasil Dihapus";
	}else{
		echo "Gagal Menghapus";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=kat'>";
?>