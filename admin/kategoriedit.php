<?php
	include "koneksi.php";
	$sqlka = mysql_query("select * from kategoritambahan where idkategori='$_GET[idka]'");
	$rka = mysql_fetch_array($sqlka);
	
	$sqlk = mysql_query("select * from kategoriutama where idkat='$rka[idkat]'");
	$rk = mysql_fetch_array($sqlk);
?>
<div id="kat">
<fieldset>
<form name="form1" method="post" action="<?php echo "?p=kategorieditaksi"; ?>" enctype="multipart/form-data">
  <h3>KATEGORI TAMBAHAN</h3>
  <input type="hidden" name="idkategori" value="<?php echo "$rka[idkategori]"; ?>" />
  <input name="namakat" type="text" id="namakat" placeholder="Nama Kategori" value="Kategori : <?php echo "$rk[namakat]"; ?>" disabled>
  <input name="namakategori" type="text" id="namakategori" placeholder="Nama Kategori" value="<?php echo "$rka[namakategori]"; ?>">  <input type="submit" name="Submit" value="SIMPAN KATEGORI">
</form>
</fieldset>
</div>
