<?php
include "common.inc";	
include "funkcijeDvodim.php";
ini_set(max_execution_time, "900");
// moze i set_time_limit (700)
$db_link = db_connect();

$m=$t;
$n=$p;

//prikaz matrice A iz baze, u napravljene u obliku niza

$kljucA = $rezaA;
$query = "select * from MATRICES_IN where KLJUC='$kljucA'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
$podeljen=explode(",",$row["ELEMENTS_IN"]);
$matricaA=$podeljen;
$z=0;
for($i=0;$i<$m;$i++)
{
	for($j=0;$j<$n;$j++,$z++)
	{
		$matrixad[$i][$j]=$matricaA[$z];
	}
}

//prikaz matrice M iz baze, u napravljene u obliku niza

$kljucB = $rezaB;
$query = "select * from MATRICES_IN where KLJUC='$kljucB'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
$podeljen=explode(",",$row["ELEMENTS_IN"]);
$matricaB=$podeljen;
$z=0;
for($i=0;$i<$m;$i++)
{
	for($j=0;$j<$m;$j++,$z++)
	{
		$matrixbd[$i][$j]=$matricaB[$z];
	}
}

//prikaz matrice N iz baze, u napravljene u obliku niza

$kljucC = $rezaC;
$query = "select * from MATRICES_IN where KLJUC='$kljucC'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
$podeljen=explode(",",$row["ELEMENTS_IN"]);
$matricaC=$podeljen;
$z=0;
for($i=0;$i<$n;$i++)
{
	for($j=0;$j<$n;$j++,$z++)
	{
		$matrixcd[$i][$j]=$matricaC[$z];
	}
}

// unos AMN u bazu
/*
if($jedinicnaA == $t and $jedinicnaM==$t and $jedinicnaN==$t)
{
	$Weighted=Inverse($matricaA,$m,$n);
}
elseif($jedinicnaM==$t and $jedinicnaN==$p)
{
	$Weighted=Grevile($matricaA,$m,$n);
}
else
*/

$Weighted=WeightedInverse($matrixbd,$matrixad,$matrixcd);
//$qwe=weightedInverse($matricaB,$matricaA,$matricaC,$m,$n);
// prelazak na stranu za PRIKAZ
	$z=0;
	for($i=0;$i<$n;$i++)
	{
		for($j=0;$j<$m;$j++,$z++)
		{
			$resenje[$z]=$Weighted[$i][$j];
		}
	}

$string_zarez = implode($resenje,",");
$dimenzija = $n . "x" . $m;
$inverz='W';
$query2 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,KLJUCC,INVERSE) values('$string_zarez', '$dimenzija', '$kljucA','$kljucB','$kljucC','$inverz')";
$result2 = mysql_query($query2, $db_link);
header("Location:vezaweighted.2477.php?t=$t&p=$p&time_start=$time_start&rezaA=$rezaA&rezaB=$rezaB&rezaC=$rezaC");
//print_r($Weighted);
?>