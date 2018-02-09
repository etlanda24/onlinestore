<?php
	session_start();
	include "koneksi.php";
	$sqladm = mysql_query("select * from admin where username='$_SESSION[namaadm]'");
	$radm = mysql_fetch_array($sqladm);
	
	$logo  = $_FILES['logojasa']['name'];
	$loklogo = $_FILES['logojasa']['tmp_name'];
	
	move_uploaded_file($loklogo, "../logojasa/$logo");
	
	$sqljas = mysql_query("insert into jasakirim (idadmin, namajasa, logojasa, detailjasa) values ('$radm[idadmin]', '$_POST[namajasa]',  '$logo', '$_POST[detailjasa]')");
	
	if($sqljas){
		echo "Jasa Kirim berhasil Disimpan";
	}else{
		echo "Gagal menyimpan";
	}
?>