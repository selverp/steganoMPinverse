<?php 
include "common.inc";	
include "funkcijeDvodim1.php";
include "funkcijeStorage.php";
ini_set(max_execution_time, "900");
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
		$ta=count($fsadrzaj);
		$pa=n($fsadrzaj);
		if ($action == 'upload'){
			$niz2=kreiraj($fsadrzaj);
			$dim=dimenzija($fsadrzaj);
			$id_matrice=postoji($dim,$niz2);
			if($id_matrice==false){
				unos_matrice($niz2,$dim);
				$idA=maximum();
			}
			else{
				$idA=$id_matrice;
				$postojiA=1;
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
			}
			else{
				$idA=$id_test_matrica;
				$postojiA=1;
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
				$idB=maximum();
			}
			else{
				$idB=$id_matrice;
				$postojiB=1;
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
				$idB=maximum();
			}
			else{
				$idB=$id_test_matrica;
				$postojiB=1;
			}			
		}
	}
}

if($userfile3_name)
{
	if($zielkeB!='on'){	
		$archive_dir = "./fajlovi";
		upload_file3();
		$r="./fajlovi/" . $userfile3_name;
		$fsadrzaj3=file($r);
		$n=fopen($r, "r");
		if ($action == 'upload'){
			$niz2=kreiraj($fsadrzaj3);
			$dim=dimenzija($fsadrzaj3);
			$id_matrice=postoji($dim,$niz2);
			if($id_matrice==false){
				unos_matrice($niz2,$dim);
				$idC=maximum();
			}
			else{
				$idC=$id_matrice;
				$postojiC=1;
			}				
		}
	}
	else
	{
		$archive_dir = "./fajlovi";
		upload_file3();	
		$r = "./fajlovi/" . $userfile3_name;
		$fsadrzaj3=file($r);
		$n=fopen($r, "r");
		if ($action == 'upload'){
			$niz2=kreiraj($fsadrzaj3);
			$dim=dimenzija($fsadrzaj3);
			$test=ime_test($userfile3_name);
			$id_test_matrica=pretraga_test($fsadrzaj3,$userfile3_name);
			if(!$id_test_matrica){
				unos_test_matrice($niz2,$dim,$test);
				$idC=maximum();
			}
			else{
				$idC=$id_test_matrica;
				$postojiC=1;
			}			

		}
	}
}
if($postojiA==1 and $postojiB==1 and $postojiC==1)

	header("Location:vezalm.24777.php?m=$ta&n=$pa&time_start=$time_start&idA=$idA&idB=$idB&idC=$idC");
	//prikaz vec unete matrice AMN
	/*	echo "postoje sve";
		echo "<br>"; 
		echo "$zielkeA";*/	

else
	header("Location:vezalm.1477.php?m=$ta&n=$pa&time_start=$time_start&idA=$idA&idB=$idB&idC=$idC");
	//izracunavanje i unos matrice AMN, pa posle sa vezaweighted.1.php,kas izracunamo i unesemo AMN, skacemo na prikaz 

//userfile2 , matrica L(M u bazi)
?>

