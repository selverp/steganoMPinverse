<?php 
include "common.inc";	
include "funkcijeDvodim.php";
//******************************************************************************************************************
// kad javlja "Cannot add header information" treba uci u php konfiguracioni fajl i postaviti "output_buffering=on;"
//******************************************************************************************************************
include "funkcijeStorage.php";
$time_start = microtime_float();
$db_link = db_connect();
//userfile
if($textmp==1){
	$m1=dim_m($textarea);
	$n1=dim_n($textarea);
	$matrixa=textarea($textarea);
}
if($zielkeA!='on'){
	$niz2=implode(",",$matrixa);
	$dim= $m1 . "x" . $n1;
	$id_matrice=postoji($dim,$niz2);
	if($id_matrice==false){
		unos_matrice($niz2,$dim);
		$idA=maximum();
		header("Location:vezaMP.147d.php?t=$m1&p=$n1&time_start=$time_start&idA=$idA");// da izracuna i unese AMN u bazu
	}
	else{
		$idA=$id_matrice;
		header("Location:vezaMP.247d.php?t=$m1&p=$n1&time_start=$time_start&idA=$idA");// ako matrica postoji skace na prikaz
	}			
}
else
{
	$niz2=implode(",",$matrixa);
	$dim= $m1 . "x" . $n1;
	$test="$zielkeA";
	$id_test_matrica=pretraga_test_el($test);
	if(!$id_test_matrica){
		unos_test_matrice($niz2,$dim,$test);
		$idA=maximum();
		header("Location:vezaMP.147d.php?t=$m1&p=$n1&time_start=$time_start&idA=$idA");// da izracuna i unese AMN u bazu
	}
	else{
		$idA=$id_test_matrica;
		header("Location:vezaMP.247d.php?t=$m1&p=$n1&time_start=$time_start&idA=$idA");
	}		
}

?>

