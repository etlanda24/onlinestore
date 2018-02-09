<?php
	include "koneksi.php";
	$sqlkat = mysql_query("select * from kategoriutama where idkat='$_GET[idk]'");
	$rkat = mysql_fetch_array($sqlkat);
?>
<div id="kat">
<fieldset>
<form name="form1" method="post" action="<?php echo "?p=kateditaksi"; ?>" enctype="multipart/form-data">
  <h3>KATEGORI UTAMA</h3>
  <input type="hidden" name="idkat" value="<?php echo "$rkat[idkat]"; ?>" />
  <input name="namakat" type="text" id="namakat" placeholder="Nama Kategori" value="<?php echo "$rkat[namakat]"; ?>">
  <input type="submit" name="Submit" value="SIMPAN KATEGORI">
</form>
</fieldset>
</div>
