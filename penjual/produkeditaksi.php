<?php
	session_start();
	include "koneksi.php";
	
	$sqlpr = mysql_query("update produk set namaproduk='$_POST[namaproduk]', hargaproduk='$_POST[hargaproduk]', stok='$_POST[stok]', spesifikasi='$_POST[spesifikasi]', detailproduk='$_POST[detailproduk]', diskon='$_POST[diskon]', isikotak='$_POST[isikotak]' where idproduk='$_POST[idproduk]'");
	
	if($sqlpr){
		echo "Produk berhasil Disimpan";
	}else{
		echo "Gagal menyimpan";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=produk'>";
?>