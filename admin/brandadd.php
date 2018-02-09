<div id="kat">
<fieldset>
<form name="form1" method="post" action="<?php echo "?p=brandaddaksi"; ?>" enctype="multipart/form-data">
  <h3>BRAND</h3>
  <select name="idkat">
  <option value="">Kategori Utama</option>
  	<?php
		include "koneksi.php";
		$sqlkat = mysql_query("select * from kategoriutama order by namakat asc");
		while($rkat = mysql_fetch_array($sqlkat)){
		   echo "<option value='$rkat[idkat]'>$rkat[namakat]</option>";
		}
	?>
  </select>
  <input name="namabrand" type="text" id="namabrand" placeholder="Nama Brand">  
  <input name="logobrand" type="file" id="logobrand" placeholder="Gambar Logo">  
  <input type="submit" name="Submit" value="SIMPAN BRAND">
</form>
</fieldset>
</div>
