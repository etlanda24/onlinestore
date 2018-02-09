<?php
	session_start();
	include "koneksi.php";
	$sqladm = mysql_query("select * from admin where username='$_SESSION[namaadm]'");
	$radm = mysql_fetch_array($sqladm);
	
	$sqlkat = mysql_query("insert into kategoriutama (idadmin, namakat) values ('$radm[idadmin]', '$_POST[namakat]')");
	
	if($sqlkat){
		echo "Kategori berhasil Disimpan";
	}else{
		echo "Gagal menyimpan";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=kat'>";
?>