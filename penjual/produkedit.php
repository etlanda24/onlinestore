<div id="kat">
<fieldset>
  <h3>PRODUK</h3>
  <?php
  	include "koneksi.php";
	$sqlpr = mysql_query("select * from produk where idproduk='$_GET[idp]'");
	$rpr = mysql_fetch_array($sqlpr);
	
	$sqlk = mysql_query("select * from kategoriutama where idkat='$rpr[idkat]'");
	$rk = mysql_fetch_array($sqlk);
	
	$sqlkat = mysql_query("select * from kategoritambahan where idkategori='$rpr[idkategori]'");
	$rkat = mysql_fetch_array($sqlkat);
	
	$sqlb = mysql_query("select * from brand where idbrand='$rpr[idbrand]'");
	$rb = mysql_fetch_array($sqlb);
	echo "<input name='namakat' type='text' value='$rk[namakat]' disabled>";
	echo "<input name='namakategori' type='text' value='$rkat[namakategori]' disabled>";
	echo "<input name='namabrand' type='text' value='$rb[namabrand]' disabled>";
  ?>
<form name="form1" method="post" action="<?php echo "?p=produkeditaksi"; ?>" enctype="multipart/form-data">
  <input name="idproduk" type="hidden" value="<?php echo "$rpr[idproduk]"; ?>" /> 
  <br>Nama Produk <input name="namaproduk" type="text" id="namaproduk" placeholder="Nama Produk" value="<?php echo "$rpr[namaproduk]"; ?>" /> 
  <p>Harga Produk <input name="hargaproduk" type="text" id="hargaproduk" placeholder="Harga Produk" value="<?php echo "$rpr[hargaproduk]"; ?>"> 
  <p>Stok Produk <input name="stok" type="text" id="stok" placeholder="Stok Produk" value="<?php echo "$rpr[stok]"; ?>">  
  <p>Spesifikasi Produk <textarea name="spesifikasi" placeholder="Spesifikasi Produk" rows="5"><?php echo "$rpr[spesifikasi]"; ?></textarea>
  <p>Detail Produk <textarea name="detailproduk" placeholder="Detail Produk" rows="5"><?php echo "$rpr[detailproduk]"; ?></textarea>
  <p>Diskon (%) <input name="diskon" type="text" id="diskon" placeholder="Diskon (%)" value="<?php echo "$rpr[diskon]"; ?>">  
  <p>Isi Dalam Kotak <textarea name="isikotak" placeholder="Isi dalam Kotak" rows="5"><?php echo "$rpr[isikotak]"; ?></textarea>
  <input type="submit" name="Submit" value="SIMPAN DATA PRODUK">
</form>
</fieldset>
</div>
