<?php
	session_start();
	include "koneksi.php";
	
	$sqlbrn = mysql_query("delete from brand where idbrand='$_GET[idb]'");
	
	if($sqlbrn){
		echo "Brand berhasil Dihapus";
	}else{
		echo "Gagal Menghapus";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=brand'>";
?>