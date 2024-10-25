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

	$m1=dim_m($textarea);
	$n1=dim_n($textarea);
	$matrixa=textarea($textarea);

	$m2=dim_m($textarea2);
	$n2=dim_n($textarea2);
	$matrixb=textarea($textarea2);


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


header("Location:denseop2.php?m1=$m1&n1=$n1&m2=$m2&n2=$n2&time_start=$time_start&idA=$id_A&idB=$id_B&arithmetic=$arithmetic&skalarr=$skalarr&skalars=$skalars&skalarp=$skalarp&skalarq=$skalarq&equations=$equations&powersa=$powersa&powersb=$powersb&products=$products&transpose=$transpose&determinants=$determinants&inverses=$inverses&nacin=$nacin&matrixa=$matrixa&matrixb=$matrixb");
//echo $id_A;
//echo "<br>";
//echo $id_B;
//echo "<br>";
//echo $niz2;
//echo "<br>";
//echo $niz3;
//echo "<br>";
//print_r($);

?>