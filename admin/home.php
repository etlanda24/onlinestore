<div id="view">
<fieldset>
<?php
	include "koneksi.php";
	echo "<h3 align='center'>Selamat Datang di Halaman Administrator ONLINE STORE IF</h3><br>";
	$sqlkat = mysql_query("select * from kategoriutama");
	$rowkat = mysql_num_rows($sqlkat);
	echo "<a href='?p=kat'><div class='dh6' align='center'>Kategori Utama <h2>$rowkat</h2></div></a>";
	
	$sqlk = mysql_query("select * from kategoritambahan");
	$rowk = mysql_num_rows($sqlk);
	echo "<a href='?p=kategori'><div class='dh6' align='center'>Kategori Tambahan <h2>$rowk</h2></div></a>";
	
	$sqljas = mysql_query("select * from jasakirim");
	$rowjas = mysql_num_rows($sqljas);
	echo "<a href='?p=jasakirim'><div class='dh6' align='center'>Jasa Kirim <h2>$rowjas</h2></div></a>";		
	
	$sqlbrn = mysql_query("select * from brand");
	$rowbrn = mysql_num_rows($sqlbrn);
	echo "<a href='?p=brand'><div class='dh6' align='center'>Brand <h2>$rowbrn</h2></div></a>";		
	
?>
</fieldset>
</div>