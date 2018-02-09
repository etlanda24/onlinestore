<link rel="stylesheet" type="text/css" href="style.css" />
<div id="login">
<fieldset>
<form name="form1" method="post" action="loginaksi.php" enctype="multipart/form-data">
  <h3>PENJUAL</h3>
  <input name="emailpenjual" type="text" id="emailpenjual" placeholder="Email">
  <input name="passwordpenjual" type="password" id="passwordpenjual" placeholder="Password">
  <input type="submit" name="Submit" value="LOGIN">
  Belum Terdaftar? Silahkan <a href="<?php echo "?p=register"; ?>">Register</a>
</form>
</fieldset>
</div>
