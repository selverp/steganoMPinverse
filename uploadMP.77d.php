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
if($userfile){
	if($zielkeA!='on'){
		$archive_dir = "./fajlovi";
		upload_file();
		$r="./fajlovi/" . $userfile_name;
		$fsadrzaj=file($r);
		$n=fopen($r, "r");
		$t=count($fsadrzaj);
		$p=n($fsadrzaj);
		if ($action == 'upload'){
			$niz2=kreiraj($fsadrzaj);
			$dim=dimenzija($fsadrzaj);
			$id_matrice=postoji($dim,$niz2);
			if($id_matrice==false){
				unos_matrice($niz2,$dim);
				$idA=maximum();
				header("Location:vezaMP.147d.php?t=$t&p=$p&time_start=$time_start&idA=$idA");// da izracuna i unese AMN u bazu
			}
			else{
				$idA=$id_matrice;
				header("Location:vezaMP.247d.php?t=$t&p=$p&time_start=$time_start&idA=$idA");// ako matrica postoji skace na prikaz
			}			
		}
	}
	else
	{
		$archive_dir = "./fajlovi";
		if ($action == 'upload') upload_file();	
		$r = "./fajlovi/" . $userfile_name;
		$fsadrzaj=file($r);
		$n=fopen($r, "r");
		$t=count($fsadrzaj);
		$p=n($fsadrzaj);
		if ($action == 'upload'){
			$niz2=kreiraj($fsadrzaj);
			$dim=dimenzija($fsadrzaj);
			$test=ime_test($userfile_name);
			$id_test_matrica=pretraga_test($fsadrzaj,$userfile_name);
			if(!$id_test_matrica){
				unos_test_matrice($niz2,$dim,$test);
				$idA=maximum();
				header("Location:vezaMP.147d.php?t=$t&p=$p&time_start=$time_start&idA=$idA");// da izracuna i unese AMN u bazu
			}
			else{
				$idA=$id_test_matrica;
				header("Location:vezaMP.247d.php?t=$t&p=$p&time_start=$time_start&idA=$idA");
			}			
		}
	}
}

//echo $p;

?>

