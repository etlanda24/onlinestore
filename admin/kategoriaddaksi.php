<?php
	session_start();
	include "koneksi.php";
	$sqladm = mysql_query("select * from admin where username='$_SESSION[namaadm]'");
	$radm = mysql_fetch_array($sqladm);
	$sqlkat = mysql_query("insert into kategoritambahan (idadmin, idkat, namakategori) values ('$radm[idadmin]', '$_POST[idkat]', '$_POST[namakategori]')");
	if($sqlkat){
		echo "Kategori Tambahan Berhasil Disimpan";
	}else{
		echo "Gagal menyimpan";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=kategori'>";
?>
