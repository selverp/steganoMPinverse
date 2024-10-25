<!DOCTYPE html>
<html>
<body>

<link rel="stylesheet" type="text/css" href="style.css">
<div>
	<form action="upload.php" method="post" enctype="multipart/form-data">
	  <label class="label" for="fname">Odaberite sliku</label>
	  <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
	  <label class="label" for="fname">Unesite skriveni tekst</label>
	  <input type="text" name = "tekst" id = "tekst">
	  <br><br>
	  <input type="submit" value="ENCRYPT" name="submit">
	</form>
</div>
</body>
</html>