<?php
	session_start();
	include "koneksi.php";
	
	$sqljas = mysql_query("delete from jasakirim where idjasa='$_GET[idj]'");
	
	if($sqljas){
		echo "Jasa kirim berhasil Dihapus";
	}else{
		echo "Gagal Menghapus";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=jasakirim'>";
?>