<?php
	session_start();
	include "koneksi.php";
	
	$sqlka = mysql_query("delete from kategoritambahan where idkategori='$_GET[idka]'");
	
	if($sqlka){
		echo "Kategori berhasil Dihapus";
	}else{
		echo "Gagal Menghapus";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=kategori'>";
?>