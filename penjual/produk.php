<div id="view">
<fieldset>
<?php
	include "koneksi.php";
	$sqlp = mysql_query("select * from penjual where emailpenjual='$_SESSION[namapen]'");
	$rp = mysql_fetch_array($sqlp);
	
	$sqlpr = mysql_query("select * from produk where idpenjual='$rp[idpenjual]'");
	
	echo "<br><a href='?p=produkadd'>Tambah Produk</a><p>";
	echo "<table border='0'>";
	echo "<tr>";
		echo "<th>No.</th>";
		echo "<th>Kategori</th>";
		echo "<th>Nama Produk</th>";
		echo "<th>Aksi</th>";
	echo "</tr>";
	$no = 1;
	while($rpr = mysql_fetch_array($sqlpr)){
		echo "<tr>";
			echo "<td>$no</td>";
			echo "<td>$rpr[idkat]</td>";
			echo "<td>$rpr[namaproduk]</td>";
			echo "<td><a href='?p=produkedit&idp=$rpr[idproduk]'>Edit</a> | 
			          <a href='?p=produkdel&idp=$rpr[idproduk]'>Delete</a></td>";
		echo "</tr>";
		$no++;
	}
	echo "</table>";
?>
</fieldset>
</div>