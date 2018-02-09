<?php
	session_start();
	include "koneksi.php";
	$sqladm = mysql_query("select * from admin where username='$_SESSION[namaadm]'");
	$radm = mysql_fetch_array($sqladm);
	
	$logo  = $_FILES['logobrand']['name'];
	$loklogo = $_FILES['logobrand']['tmp_name'];
	
	move_uploaded_file($loklogo, "../logobrand/$logo");
	
	$sqlbrn = mysql_query("insert into brand (idadmin, idkat, namabrand, logobrand) values ('$radm[idadmin]',  '$_POST[idkat]', '$_POST[namabrand]',  '$logo')");
	
	if($sqlbrn){
		echo "Brand berhasil Disimpan";
	}else{
		echo "Gagal menyimpan";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=brand'>";
?>