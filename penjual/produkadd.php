<div id="kat">
<fieldset>
  <h3>KATEGORI</h3>
  <?php
  	include "koneksi.php";
	$sqlk = mysql_query("select * from kategoriutama order by namakat asc");
	echo "<form action='$_SERVER[PHP_SELF]' method='get'>";
	echo "<input name='p' type='hidden' value='produkadd'>";
	echo "<select name='idkat' onchange='this.form.submit()'>";
	echo "<option value='0'>Kategori Utama</option>";
	while($rk=mysql_fetch_array($sqlk)){
		if($rk["idkat"]==$_GET["idkat"]){
			$sel = "selected";
		}else{
			$sel = "";
		}
		echo "<option value='$rk[idkat]' $sel>$rk[namakat]</option>";
	}
	echo "</select>";
	echo "</form>";
	
	$sqlkat = mysql_query("select * from kategoritambahan where idkat='$_GET[idkat]' order by namakategori asc");
	echo "<form action='$_SERVER[PHP_SELF]' method='get'>";
	echo "<input name='p' type='hidden' value='produkadd'>";
	echo "<input name='idkat' type='hidden' value='$_GET[idkat]'>";
	echo "<select name='idkategori' onchange='this.form.submit()'>";
	echo "<option value='0'>Kategori Tambahan</option>";
	while($rkat=mysql_fetch_array($sqlkat)){
		if($rkat["idkategori"]==$_GET["idkategori"]){
			$sel = "selected";
		}else{
			$sel = "";
		}
		echo "<option value='$rkat[idkategori]' $sel>$rkat[namakategori]</option>";
	}
	echo "</select>";
	echo "</form>";

  ?>
<form name="form1" method="post" action="<?php echo "?p=produkaddaksi"; ?>" enctype="multipart/form-data">
  <h3>PRODUK</h3>
  <input name="idkat" type="hidden" value="<?php echo "$_GET[idkat]"; ?>" />
  <input name="idkategori" type="hidden" value="<?php echo "$_GET[idkategori]"; ?>"/>
  <?php
  	$sqlb = mysql_query("select * from brand where idkat='$_GET[idkat]' order by namabrand asc");
	echo "<select name='idbrand'>";
	echo "<option value='0'>Brand</option>";
	while($rb = mysql_fetch_array($sqlb)){
		echo "<option value='$rb[idbrand]'>$rb[namabrand]</option>";
	}
	echo "</select>";
  ?>
  <input name="namaproduk" type="text" id="namaproduk" placeholder="Nama Produk"> 
  <input name="hargaproduk" type="text" id="hargaproduk" placeholder="Harga Produk"> 
  <input name="stok" type="text" id="stok" placeholder="Stok Produk">  
  <textarea name="spesifikasi" placeholder="Spesifikasi Produk"></textarea>
  <textarea name="detailproduk" placeholder="Detail Produk"></textarea>
  <input name="diskon" type="text" id="diskon" placeholder="Diskon (%)">  
  <textarea name="isikotak" placeholder="Isi dalam Kotak"></textarea>
  <input name="foto1" type="file" />
  <input name="foto2" type="file" />
  <input name="foto3" type="file" />
  <input type="submit" name="Submit" value="SIMPAN DATA PRODUK">
</form>
</fieldset>
</div>
