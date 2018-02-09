<?php
	include "koneksi.php";
	$sqlp = mysql_query("select * from penjual where emailpenjual='$_POST[emailpenjual]' and passwordpenjual='$_POST[passwordpenjual]'");
	$rowp = mysql_num_rows($sqlp);
	$rp = mysql_fetch_array($sqlp);
	if($rowp > 0){
		session_start();
		$_SESSION["namapen"]=$rp["emailpenjual"];
		$_SESSION["passpen"]=$rp["passwordpenjual"];
		header("location:index.php");
	}else{
		header("location:index.php");
	}
?> 