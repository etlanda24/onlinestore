<?php
	include "koneksi.php";	
	$sqlj = mysql_query("select * from jasakirim where idjasa='$_GET[idj]'");
	$rj = mysql_fetch_array($sqlj);
?>
<div id="kat">
<fieldset>
<form name="form1" method="post" action="<?php echo "?p=jasakirimeditaksi"; ?>" enctype="multipart/form-data">
  <h3>JASA KIRIM</h3>
  <input type="hidden" name="idjasa" value="<?php echo "$rj[idjasa]"; ?>" />
  <div align="center"><img src="<?php echo "../logojasa/$rj[logojasa]"; ?>" width="50%"></div>
  <input name="namajasa" type="text" id="namajasa" placeholder="Nama Jasa Kirim" value="<?php echo "$rj[namajasa]"; ?>" disabled>
  <textarea name="detailjasa" rows="5"><?php echo "$rj[detailjasa]"; ?></textarea>
  <input name="tarif" type="text" id="tarif" placeholder="Tarif Jasa Kirim" value="<?php echo "$rj[tarif]"; ?>">  <input type="submit" name="Submit" value="SIMPAN JASA KIRIM">
</form>
</fieldset>
</div>
