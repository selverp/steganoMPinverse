<?php
function createXML($m,$n, $result){
	$s='<?xml version="1.0" encoding="utf-8"?>' . "\n<matrix>" . "\n";
	$z=1;
	for($i=0;$i<$m;$i++){
		$k=1;
		$s = $s . "    <row>\n";
		for($j=0;$j<$n;$j++){
			$zaok= round($result[$i][$j],3);
			$s = $s . "        <column>" . "$zaok";
			$s = $s . "<\column>\n";
		}
		$s = $s . "    </row>\n";
		echo "<br>";
		}
		$s = $s . "</matrix>";
		echo "<br>";
		$myFile = "testFile.xml";
		$fh = fopen($myFile, 'w') or die("can't open file");
		fwrite($fh, $s);
		fclose($fh);
}
$result = array(array(1,2),
				array(1,2),
				array(1,2),
				array(1,2),
				array(1,2));
createXML(5,2, $result);
?>