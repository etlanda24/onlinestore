<link rel="stylesheet" type="text/css" href="style.css" />
<div id="kat">
<fieldset>
<form name="form1" method="post" action="<?php echo "?p=kategoriaddaksi"; ?>" enctype="multipart/form-data">
  <h3>Katagori Tambahan</h3>
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
  <input type="text" name="namakategori" id="namakategori" placeholder="Nama Kategori Tambahan">
  <input type="submit" name="button" id="button" value="SIMPAN DATA KATEGORI TAMBAHAN">
</form>
</fieldset>
</div>
