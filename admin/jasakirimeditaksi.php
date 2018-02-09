<?php
	session_start();
	include "koneksi.php";
	
	$sqljas = mysql_query("update jasakirim set detailjasa='$_POST[detailjasa]', tarif='$_POST[tarif]' where idjasa='$_POST[idjasa]'");
	
	if($sqljas){
		echo "Jasa kirim berhasil Disimpan";
	}else{
		echo "Gagal menyimpan";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=jasakirim'>";
?>