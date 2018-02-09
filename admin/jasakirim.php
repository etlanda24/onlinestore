<div id="view">
<fieldset>
<?php
	include "koneksi.php";
	$sqljas = mysql_query("select * from jasakirim order by namajasa asc");
	echo "<br><a href='?p=jasakirimadd'>Tambah Jasa Kirim</a><p>";
	echo "<table border='0'>";
	echo "<tr>";
		echo "<th>No.</th>";
		echo "<th>Logo</th>";
		echo "<th>Nama Jasa</th>";
		echo "<th>Detail Jasa</th>";
		echo "<th>Tarif</th>";
		echo "<th>Aksi</th>";
	echo "</tr>";
	$no = 1;
	while($rjas = mysql_fetch_array($sqljas)){
		$trf = number_format($rjas["tarif"]);
		echo "<tr>";
			echo "<td>$no</td>";
			echo "<td><img src='../logojasa/$rjas[logojasa]' width='120px'></td>";
			echo "<td>$rjas[namajasa]</td>";
			echo "<td align='justify'>$rjas[detailjasa]</td>";
			echo "<td align='right'>IDR $trf</td>";
			echo "<td><a href='?p=jasakirimedit&idj=$rjas[idjasa]'>Edit</a> | 
			          <a href='?p=jasakirimdel&idj=$rjas[idjasa]'>Delete</a></td>";
		echo "</tr>";
		$no++;
	}
	echo "</table>";
?>
</fieldset>
</div>