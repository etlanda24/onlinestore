<?php
	include "koneksi.php";
	
	if(!empty($_POST["emailpenjual"]) and !empty($_POST["passwordpenjual"]) and !empty($_POST["namapenjual"]) and !empty($_POST["nohppenjual"]) and !empty($_POST["namatoko"]) and !empty($_POST["detailpenjual"])){
		$sqlreg = mysql_query("insert into penjual (emailpenjual, passwordpenjual, namapenjual, nohppenjual, namatoko, detailpenjual) values ('$_POST[emailpenjual]', '$_POST[passwordpenjual]', '$_POST[namapenjual]', '$_POST[nohppenjual]', '$_POST[namatoko]', '$_POST[detailpenjual]')");
	}
	
	if($sqlreg){
		echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=login'>";
	}else{
		echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=register'>";
	}
?>