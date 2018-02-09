<div id="view">
<fieldset>
<?php
	include "koneksi.php";
	$sqlk = mysql_query("select * from kategoritambahan order by namakategori asc");
	echo "<br><a href='?p=kategoriadd'>Tambah Kategori Tambahan</a><p>";
	echo "<table border='0'>";
	echo "<tr>";
		echo "<th>No.</th>";
		echo "<th>Kategori Utama</th>";
		echo "<th>Kategori Tambahan</th>";
		echo "<th>Aksi</th>";
	echo "</tr>";
	$no = 1;
	while($rk = mysql_fetch_array($sqlk)){
		$sqlkat = mysql_query("select * from kategoriutama where idkat='$rk[idkat]'");
		$rkat = mysql_fetch_array($sqlkat);
		echo "<tr>";
			echo "<td>$no</td>";
			echo "<td>$rkat[namakat]</td>";
			echo "<td>$rk[namakategori]</td>";
			echo "<td><a href='?p=kategoriedit&idka=$rk[idkategori]'>Edit</a> | 
			          <a href='?p=kategoridel&idka=$rk[idkategori]'>Delete</a></td>";
		echo "</tr>";
		$no++;
	}
	echo "</table>";
?>
</fieldset>
</div>