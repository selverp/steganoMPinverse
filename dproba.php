<?php

//******************************************************************************************************************
// kad javlja "Cannot add header information" treba uci u php konfiguracioni fajl i postaviti "output_buffering=on;"
// kad nece da prenese promenjivupreko dugmeta browse... postavimo register_globals = on
// postoji i nacin sa unosom <?php ob_start(); and <?php ob_flush(); na pocetku i kraju fajla
//******************************************************************************************************************
include "common.inc";	
include "funkcijeDvodim.php";
$time_start = microtime_float();
include "funkcijeStorage.php";
$db_link = db_connect();
//userfile

if($userfile_name)
{
	if($zielkeA!='on'){	
		$archive_dir = "./fajlovi";
		upload_file();
		$r="./fajlovi/" . $userfile_name;
		$fsadrzaj=file($r);
		$n=fopen($r, "r");
		if ($action == 'upload'){
			$niz2=kreiraj($fsadrzaj);// string 1,2,3,4,5,6,7
			$dim=dimenzija($fsadrzaj);// dimenzija 5x5
			$id_matrice=postoji($dim,$niz2);
			if($id_matrice==false){
				unos_matrice($niz2,$dim);
				$id_A=maximum();
			}
			else{
				$id_A=$id_matrice;
			}			
		}
	}
	else
	{
		$archive_dir = "./fajlovi";
		upload_file();	
		$r = "./fajlovi/" . $userfile_name;
		$fsadrzaj=file($r);
		$n=fopen($r, "r");
		if ($action == 'upload'){
			$niz2=kreiraj($fsadrzaj);
			$dim=dimenzija($fsadrzaj);
			$test=ime_test($userfile_name);
			$id_test_matrica=pretraga_test($fsadrzaj,$userfile_name);
			if(!$id_test_matrica){
				unos_test_matrice($niz2,$dim,$test);
				$id_A=maximum();
			}
			else{
				$id_A=$id_test_matrica;
			}			
		}
	}
}

if($userfile2_name)
{
	if($zielkeB!='on'){	
		$archive_dir = "./fajlovi";
		upload_file2();
		$r="./fajlovi/" . $userfile2_name;
		$fsadrzaj2=file($r);
		$n=fopen($r, "r");
		if ($action == 'upload'){
			$niz2=kreiraj($fsadrzaj2);
			$dim=dimenzija($fsadrzaj2);
			$id_matrice=postoji($dim,$niz2);
			if($id_matrice==false){
				unos_matrice($niz2,$dim);
				$id_B=maximum();
			}
			else{
				$id_B=$id_matrice;
			}				
		}
	}
	else
	{
		$archive_dir = "./fajlovi";
		upload_file2();	
		$r = "./fajlovi/" . $userfile2_name;
		$fsadrzaj2=file($r);
		$n=fopen($r, "r");
		if ($action == 'upload'){
			$niz2=kreiraj($fsadrzaj2);
			$dim=dimenzija($fsadrzaj2);
			$test=ime_test($userfile2_name);
			$id_test_matrica=pretraga_test($fsadrzaj2,$userfile2_name);
			if(!$id_test_matrica){
				unos_test_matrice($niz2,$dim,$test);
				$id_B=maximum();
			}
			else{
				$id_B=$id_test_matrica;
			}			

		}
	}
}
$m=m($fsadrzaj);
$n=n($fsadrzaj);
$m2=m($fsadrzaj2);
$n2=n($fsadrzaj2);
$nacin = "browse";
header("Location:agree.php?m1=$m&n1=$n&m2=$m2&n2=$n2&time_start=$time_start&id_A=$id_A&id_B=$id_B&arithmetic=$arithmetic&skalarr=$skalarr&skalars=$skalars&skalarp=$skalarp&skalarq=$skalarq&equations=$equations&powersa=$powersa&powersb=$powersb&products=$products&transpose=$transpose&determinants=$determinants&inverses=$inverses&nacin=$nacin");
//echo $id_A;
//echo "<br>";
//echo $id_B;
//echo "<br>";
?>