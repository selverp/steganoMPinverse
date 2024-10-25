<?php 
include "common.inc";	
include "funkcijeDvodim.php";
include "funkcijeStorage.php";
ini_set(max_execution_time, "900");
$time_start = microtime_float();
$db_link = db_connect();
//userfile
if($textw==1){
	$m1=dim_m($textarea);
	$n1=dim_n($textarea);
	$matrixa=textarea($textarea);
	$matrixb=textarea($textarea2);
	$matrixc=textarea($textarea3);
}
$niz2=implode(",",$matrixa);
$dim=$m1 . "x" . $n1;// dimenzija 5x5
$id_matrice=postoji($dim,$niz2);
if($id_matrice==false){
	unos_matrice($niz2,$dim);
	$idA=maximum();
}
else{
	$idA=$id_matrice;
	$postojiA=1;
}			

$niz3=implode(",",$matrixb);
$dimm=$m1 . "x" . $m1;// dimenzija 5x5
$id_matrice=postoji($dimm,$niz3);
if($id_matrice==false){
	unos_matrice($niz3,$dimm);
	$idB=maximum();
}
else{
	$idB=$id_matrice;
	$postojiB=1;
}		
		
$niz4=implode(",",$matrixc);
$dimn=$n1 . "x" . $n1;// dimenzija 5x5
$id_matrice=postoji($dimn,$niz4);
if($id_matrice==false){
	unos_matrice($niz4,$dimn);
	$idC=maximum();
}
else{
	$idC=$id_matrice;
	$postojiC=1;
}			

if($postojiA==1 and $postojiB==1 and $postojiC==1)

	header("Location:vezaweighted.24777.php?t=$m1&p=$n1&time_start=$time_start&rezaA=$idA&rezaB=$idB&rezaC=$idC");
	//prikaz vec unete matrice AMN
	/*	echo "postoje sve";
		echo "<br>"; 
		echo "$zielkeA";*/	//echo $m1;

else
	header("Location:vezaweighted.14777.php?t=$m1&p=$n1&time_start=$time_start&rezaA=$idA&rezaB=$idB&rezaC=$idC");
	//izracunavanje i unos matrice AMN, pa posle sa vezaweighted.1.php,kas izracunamo i unesemo AMN, skacemo na prikaz 

//userfile2 , matrica L(M u bazi)

?>

