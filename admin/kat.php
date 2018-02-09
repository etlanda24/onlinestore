<div id="view">
<fieldset>
<?php
	include "koneksi.php";
	$sqlkat = mysql_query("select * from kategoriutama order by namakat asc");
	echo "<br><a href='?p=katadd'>Tambah Kategori Utama</a><p>";
	echo "<table border='0'>";
	echo "<tr>";
		echo "<th>No.</th>";
		echo "<th>Kategori</th>";
		echo "<th>Aksi</th>";
	echo "</tr>";
	$no = 1;
	while($rkat = mysql_fetch_array($sqlkat)){
		echo "<tr>";
			echo "<td>$no</td>";
			echo "<td>$rkat[namakat]</td>";
			echo "<td><a href='?p=katedit&idk=$rkat[idkat]'>Edit</a> | 
			          <a href='?p=katdel&idk=$rkat[idkat]'>Delete</a></td>";
		echo "</tr>";
		$no++;
	}
	echo "</table>";
?>
</fieldset>
</div>