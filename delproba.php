<?php

//******************************************************************************************************************
// kad javlja "Cannot add header information" treba uci u php konfiguracioni fajl i postaviti "output_buffering=on;"
// kad nece da prenese promenjivupreko dugmeta browse... postavimo register_globals = on
//******************************************************************************************************************
include "common.inc";	
include "funkcijeDvodim.php";
$time_start = microtime_float();
include "funkcijeStorage.php";
$db_link = db_connect();
//userfile
if($matrixa!=null){
if($zielkeA!='on'){	
	$niz2=implode(",",$matrixa);
	$dim=$m1 . "x" . $n1;// dimenzija 5x5
	$id_matrice=postoji($dim,$niz2);
	if($id_matrice==false){
		unos_matrice($niz2,$dim);
		$id_A=maximum();
	}
	else{
		$id_A=$id_matrice;
	}			
}
else
{
	$niz2=implode(",",$matrixa);
	$dim=$m1 . "x" . $n1;
	$test="zielkeA";
	$id_test_matrica=pretraga_test_el($test);
	if(!$id_test_matrica){
		unos_test_matrice($niz2,$dim,$test);
		$id_A=maximum();
	}
	else{
		$id_A=$id_test_matrica;
	}
}
}
if($matrixb!=null){
if($zielkeB!='on'){	
	$niz3=implode(",",$matrixb);
	$dim=$m2 . "x" . $n2;// dimenzija 5x5
	$id_matrice=postoji($dim,$niz3);
	if($id_matrice==false){
		unos_matrice($niz3,$dim);
		$id_B=maximum();
	}
	else{
		$id_B=$id_matrice;
	}				
}
else
{
	$niz3=implode(",",$matrixb);
	$dim=$m2 . "x" . $n2;
	$test2="zielkeB";
	$id_test_matrica=pretraga_test_el($test2);
	if(!$id_test_matrica){
		unos_test_matrice($niz3,$dim,$test);
		$id_B=maximum();
	}
	else{
		$id_B=$id_test_matrica;
	}			
}
}
//echo $hiddenm1;

header("Location:denseop2.php?m1=$m1&n1=$n1&m2=$m2&n2=$n2&time_start=$time_start&idA=$id_A&idB=$id_B&arithmetic=$arithmetic&skalarr=$skalarr&skalars=$skalars&skalarp=$skalarp&skalarq=$skalarq&equations=$equations&powersa=$powersa&powersb=$powersb&products=$products&transpose=$transpose&determinants=$determinants&inverses=$inverses&nacin=$nacin");
//print_r($id_B);
//echo "<br>";
//echo $id_B;
//echo "<br>";
//echo $niz2;
//echo "<br>";
//echo $niz3;
//echo "<br>";
?>