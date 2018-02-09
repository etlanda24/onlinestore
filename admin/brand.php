<div id="view">
<fieldset>
<?php
	include "koneksi.php";
	$sqlbrn = mysql_query("select * from brand order by namabrand asc");
	echo "<br><a href='?p=brandadd'>Tambah Brand</a><p>";
	while($rbrn = mysql_fetch_array($sqlbrn)){
		echo "<div class='dh3' align='center'>";
		echo "<fieldset><img src='../logobrand/$rbrn[logobrand]' width='100%'><p>$rbrn[namabrand]<br><a href='?p=branddel&idb=$rbrn[idbrand]'>Delete</a></fieldset>";
		echo "</div>";
	}
?>
</fieldset>
</div>