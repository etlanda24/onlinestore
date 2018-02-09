<div id="view">
<fieldset>
<?php
	include "koneksi.php";
	$sqlp = mysql_query("select * from penjual where emailpenjual='$_SESSION[namapen]'");
	$rp = mysql_fetch_array($sqlp);
	echo "<h3 align='center'>Selamat Datang di Halaman Penjual, $rp[namapenjual]</h3><br>";
	
	$sqlpr = mysql_query("select * from produk where idpenjual='$rp[idpenjual]'");
	$rowpr = mysql_num_rows($sqlpr);
	echo "<a href='?p=produk'><div class='dh6' align='center'>Produk yang dijual <h2>$rowpr</h2></div></a>";
	
	$sqlo = mysql_query("select * from orderdetail where idpenjual='$rp[idpenjual]'");
	$rowo = mysql_num_rows($sqlo);
	echo "<a href='?p=order'><div class='dh6' align='center'>Pesanan Baru <h2>$rowo</h2></div></a>";	
	
?>
</fieldset>
</div>