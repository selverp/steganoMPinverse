<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div align="left">
 <?php
	
	for($i = 0; $i<$m1; $i++){
		for ($j=0; $j<$n1; $j++){
		$edim=rand(1,20);
			echo  "<input name=matrixa[] type=text size=\"3\" maxlength=\"5\" value=\" $edim\"> ";
			echo "&nbsp;&nbsp;&nbsp;";
		}
		echo "<br>";
	}
?>
</div>
</body>
</html>
