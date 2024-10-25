<?php
include "common.inc";	
include "funkcijeDvodim1.php";
include "funkcijeStorage.php";
ini_set(max_execution_time, "900");
// moze i set_time_limit (700)
$db_link = db_connect();

//prikaz matrice A iz baze, u napravljene u obliku niza
$matrixad=makeDvodim($idA,$m,$n);

//prikaz matrice M iz baze, u napravljene u obliku niza
$matrixbd=makeDvodim($idB,$m,$m);

//prikaz matrice N iz baze, u napravljene u obliku niza
$matrixcd=makeDvodim($idC,$n,$n);
$Weighted=LMInverse($matrixbd,$matrixad,$matrixcd);
$inverse='LM';
unos_weighted($Weighted,$n,$m,$idA,$idB,$idC,$inverse);
header("Location:vezalm.24777.php?m=$m&n=$n&time_start=$time_start&idA=$idA&idB=$idB&idC=$idC");
//print_r($Weighted);
?>