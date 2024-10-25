<?php 
include "common.inc";	
include "funkcijeDvodim.php";
ini_set(max_execution_time, "900");
$time_start = microtime_float();
$db_link = db_connect();
//userfile
if($userfile!=none)
{
if($zielkeA!='on')
{
	$archive_dir = "./fajlovi";
	function upload_file() 
	{
		global $userfile, $userfile_name, $userfile_size, $userfile_type, $archive_dir, $WINDIR;
		if (isset($WINDIR)) $userfile = str_replace("\\\\", "\\", $userfile);
		$filename = basename($userfile_name);
		if ($userfile_size <= 0) die("$filename je prazan.");
		if (!@copy($userfile, "$archive_dir/$filename"))
		die("Can't copy $userfile_name to $filename.");
		if (!isset($WINDIR) && !@unlink($userfile))
		die("Can't delete the file $userfile_name.");
	}	

	upload_file();
	$r="./fajlovi/" . $userfile_name;
	$fsadrzaj=file($r);
	$n=fopen($r, "r");
	$brojac=0;
	$ta=count($fsadrzaj);// dimenzija m
	$k= filesize($r);
	$podeljen[0]=explode(" ",$fsadrzaj[0]);
	$pa=count($podeljen[0]);// dimenzija n
	$dimenzija = $ta . "x" . $pa;
	$niz="";
	if ($action == 'upload')
	{
		$query1 = "SELECT max(BY_ROW) FROM MATRICES_IN where DIMENSION = '$dimenzija'";// broj unetih matrica dimenzija $dimenzija
		$result1 = mysql_query($query1, $db_link);
		$row1=mysql_fetch_array($result1);
		$poredu = $row1[0]+1;
		for($i=0;$i<$ta;$i++)
		{
			$fsadrzaj[$i]=rtrim($fsadrzaj[$i]).",";
			$niz = $niz . $fsadrzaj[$i];
		}
		$niz1=str_replace(" ",",",$niz);
		$niz2=substr($niz1,0,strlen($niz1)-1);// string predstavljen nizom svih elemenata odvojenih zarezom
		for($j=1;$j<=$poredu;$j++)
		{	
			$zbir=0;
			// utvrdjivanje postojanja matrice				
			$query4 = "select * from MATRICES_IN where DIMENSION = '$dimenzija' and BY_ROW = '$j'";
			$result4 = mysql_query($query4, $db_link);
			$row4 = mysql_fetch_array($result4);
			if($row4[1] == $niz2)// ako je prvi red matrice isti ispituje drugi i td. do poslednjeg
			{	 
				$zbir++;
				  
				break;			
			}
		}
		if($zbir==1)
		{
			$rezaA=$row4[3];
			$postojiA=1;
			//header("Location:vezaMP.247.php?t=$t&p=$p&time_start=$time_start&reza=$reza");// ako matrica postoji skace na prikaz
		}	
		else // ako matrice nisu poznate unosimo matricu
		{		
			$query3 = "SELECT max(KLJUC) FROM MATRICES_IN";// broj poslednje matrice da bi nova bila uneta na to mesto + 1
			$result3 = mysql_query($query3, $db_link);
			$row3=mysql_fetch_array($result3);
			$kljuc = $row3[0]+1;		
			$rezaA=$kljuc;
			$jedinicna=0;
			$podeljen=explode(",",$niz2);
			for($i=0;$i<=$pa*$ta;$i++)
			{
				$jedinicna=$jedinicna + $podeljen[$i];
			}
			$jedinicnaA=$jedinicna;
			$query2 = "insert into MATRICES_IN(ELEMENTS_IN,DIMENSION,KLJUC,BY_ROW) values('$niz2', '$dimenzija', '$rezaA', '$poredu')";
			$result2 = mysql_query($query2, $db_link);
			//header("Location:vezaMP.147.php?t=$t&p=$p&time_start=$time_start&reza=$reza&jedinicna=$jedinicna");// da izracuna i unese AMN u bazu
		}
	}
}
else
{
	$archive_dir = "./fajlovi";
	function upload_file() 
	{
		global $userfile, $userfile_name, $userfile_size, $userfile_type, $archive_dir, $WINDIR;
		if (isset($WINDIR)) $userfile = str_replace("\\\\", "\\", $userfile);
		$filename= basename($userfile_name);
		if ($userfile_size <= 0) die("$filename je prazan.");
		if (!@copy($userfile, "$archive_dir/$filename"))
		die("Can't copy $userfile5_name to $filename.");
		if (!isset($WINDIR) && !@unlink($userfile))
		die("Can't delete the file $userfile_name.");
	}	

	if ($action == 'upload') upload_file();	
	$r = "./fajlovi/" . $userfile_name;
	$fsadrzaj=file($r);
	$n=fopen($r, "r");
	$brojac=0;
	$ta=count($fsadrzaj);// dimenzija m
	$k= filesize($r);
	$podeljen[0]=explode(" ",$fsadrzaj[0]);
	$pa=count($podeljen[0]);// dimenzija n
	$dimenzija = $ta . "x" . $pa;
	$famous1=explode(".",$userfile_name);
	$famous=$famous1[0];//izvlacenje imena bez ekstenzije
	$query7 = "SELECT * FROM MATRICES_IN where FAMOUS = '$famous'";// broj unetih matrica dimenzija $dimenzija
	$result7 = mysql_query($query7, $db_link);
	$row7=mysql_fetch_array($result7);
	if($row7[0]==NULL) //nema matrice unesi je
	{
		$query3 = "SELECT max(KLJUC) FROM MATRICES_IN";// broj poslednje matrice da bi nova bila uneta na to mesto + 1

		$result3 = mysql_query($query3, $db_link);
		$row3=mysql_fetch_array($result3);
		$kljuc = $row3[0]+1;
		$query1 = "SELECT max(BY_ROW) FROM MATRICES_IN where DIMENSION = '$dimenzija'";// broj unetih matrica dimenzija $dimenzija
		$result1 = mysql_query($query1, $db_link);
		$row1=mysql_fetch_array($result1);
		$poredu = $row1[0]+1;
		$rezaA=$kljuc;
		for($i=0;$i<$ta;$i++)
		{
			$fsadrzaj[$i]=rtrim($fsadrzaj[$i]).",";
			$niz = $niz . $fsadrzaj[$i];
		}
		$niz1=str_replace(" ",",",$niz);
		$niz2=substr($niz1,0,strlen($niz1)-1);// string predstavljen nizom svih elemenata odvojenih zarezom
		$dimenzija = $ta . "x" . $pa;
		$query2 = "insert into MATRICES_IN(ELEMENTS_IN,DIMENSION,KLJUC,BY_ROW,FAMOUS) values('$niz2', '$dimenzija', '$rezaA', '$poredu','$famous')";
		$result2 = mysql_query($query2, $db_link);
		//header("Location:vezaMP.147.php?t=$t&p=$p&time_start=$time_start&reza=$reza");// da izracuna i unese AMN u bazu
	}
	else //prenesi kljuc
	{
		$rezaA=$row7[3];
		$postojiA=1;
		//header("Location:vezaMP.247.php?t=$t&p=$p&time_start=$time_start&reza=$reza");
	}

}
}

//userfile2 , matrica L(M u bazi)
if($userfile2!=none)
{
	$archive_dir = "./fajlovi";
	function upload_file2() 
	{
		global $userfile2, $userfile2_name, $userfile2_size, $userfile2_type, $archive_dir, $WINDIR;
		if (isset($WINDIR)) $userfile2 = str_replace("\\\\", "\\", $userfile2);
		$filename2 = basename($userfile2_name);
		if ($userfile2_size <= 0) die("$filename2 je prazan.");
		if (!@copy($userfile2, "$archive_dir/$filename2"))
		die("Can't copy $userfile2_name to $filename2.");
		if (!isset($WINDIR) && !@unlink($userfile2))
		die("Can't delete the file $userfile2_name.");
	}	

	upload_file2();
	$r="./fajlovi/" . $userfile2_name;
	$fsadrzaj2=file($r);
	$n=fopen($r, "r");
	$brojac=0;
	$t=count($fsadrzaj2);// dimenzija m
	$k= filesize($r);
	$podeljen2[0]=explode(" ",$fsadrzaj2[0]);
	$p=count($podeljen2[0]);// dimenzija n
	$dimenzija = $t . "x" . $p;
	$niz="";
	if ($action == 'upload')
	{
		$query1 = "SELECT max(BY_ROW) FROM MATRICES_IN where DIMENSION = '$dimenzija'";// broj unetih matrica dimenzija $dimenzija
		$result1 = mysql_query($query1, $db_link);
		$row1=mysql_fetch_array($result1);
		$poredu = $row1[0]+1;
		for($i=0;$i<$t;$i++)
		{
			$fsadrzaj2[$i]=rtrim($fsadrzaj2[$i]).",";
			$niz = $niz . $fsadrzaj2[$i];
		}
		$niz1=str_replace(" ",",",$niz);
		$niz2=substr($niz1,0,strlen($niz1)-1);// string predstavljen nizom svih elemenata odvojenih zarezom
		for($j=1;$j<=$poredu;$j++)
		{	
			$zbir=0;
			// utvrdjivanje postojanja matrice				
			$query4 = "select * from MATRICES_IN where DIMENSION = '$dimenzija' and BY_ROW = '$j'";
			$result4 = mysql_query($query4, $db_link);
			$row4 = mysql_fetch_array($result4);
			if($row4[1] == $niz2)// ako je prvi red matrice isti ispituje drugi i td. do poslednjeg
			{	 
				$zbir++;
				  
				break;			
			}
		}
		if($zbir==1)
		{
			$rezaB=$row4[3];
			$postojiB=1;
			//header("Location:vezaMP.247.php?t=$t&p=$p&time_start=$time_start&reza=$reza");// ako matrica postoji skace na prikaz
		}	
		else // ako matrice nisu poznate unosimo matricu
		{		
			$query3 = "SELECT max(KLJUC) FROM MATRICES_IN";// broj poslednje matrice da bi nova bila uneta na to mesto + 1
			$result3 = mysql_query($query3, $db_link);
			$row3=mysql_fetch_array($result3);
			$kljuc = $row3[0]+1;		
			$rezaB=$kljuc;
			$jedinicna=0;
			$podeljen=explode(",",$niz2);
			for($i=0;$i<=$p*$t;$i++)
			{
				$jedinicna=$jedinicna + $podeljen[$i];
			}
			$jedinicnaM=$jedinicna;
			$query2 = "insert into MATRICES_IN(ELEMENTS_IN,DIMENSION,KLJUC,BY_ROW) values('$niz2', '$dimenzija', '$rezaB', '$poredu')";
			$result2 = mysql_query($query2, $db_link);
			//header("Location:vezaMP.147.php?t=$t&p=$p&time_start=$time_start&reza=$reza&jedinicna=$jedinicna");// da izracuna i unese AMN u bazu
		}
	}
}
//userfile_name2, matrica M(N u bazi)
//echo "$rezaM";
//userfile3
if($userfile3!=none)
{
	$archive_dir = "./fajlovi";
	function upload_file3() 
	{
		global $userfile3, $userfile3_name, $userfile3_size, $userfile3_type, $archive_dir, $WINDIR;
		if (isset($WINDIR)) $userfile3 = str_replace("\\\\", "\\", $userfile3);
		$filename3 = basename($userfile3_name);
		if ($userfile3_size <= 0) die("$filename3 je prazan.");
		if (!@copy($userfile3, "$archive_dir/$filename3"))
		die("Can't copy $userfile3_name to $filename3.");
		if (!isset($WINDIR) && !@unlink($userfile3))
		die("Can't delete the file $userfile3_name.");
	}	

	upload_file3();
	$r="./fajlovi/" . $userfile3_name;
	$fsadrzaj3=file($r);
	$n=fopen($r, "r");
	$brojac=0;
	$t=count($fsadrzaj3);// dimenzija m
	$k= filesize($r);
	$podeljen3[0]=explode(" ",$fsadrzaj3[0]);
	$p=count($podeljen3[0]);// dimenzija n
	$dimenzija = $t . "x" . $p;
	$niz="";
	if ($action == 'upload')
	{
		$query1 = "SELECT max(BY_ROW) FROM MATRICES_IN where DIMENSION = '$dimenzija'";// broj unetih matrica dimenzija $dimenzija
		$result1 = mysql_query($query1, $db_link);
		$row1=mysql_fetch_array($result1);
		$poredu = $row1[0]+1;
		for($i=0;$i<$t;$i++)
		{
			$fsadrzaj3[$i]=rtrim($fsadrzaj3[$i]).",";
			$niz = $niz . $fsadrzaj3[$i];
		}
		$niz1=str_replace(" ",",",$niz);
		$niz2=substr($niz1,0,strlen($niz1)-1);// string predstavljen nizom svih elemenata odvojenih zarezom
		for($j=1;$j<=$poredu;$j++)
		{	
			$zbir=0;
			// utvrdjivanje postojanja matrice				
			$query4 = "select * from MATRICES_IN where DIMENSION = '$dimenzija' and BY_ROW = '$j'";
			$result4 = mysql_query($query4, $db_link);
			$row4 = mysql_fetch_array($result4);
			if($row4[1] == $niz2)// ako je prvi red matrice isti ispituje drugi i td. do poslednjeg
			{	 
				$zbir++;
				  
				break;			
			}
		}
		if($zbir==1)
		{
			$rezaC=$row4[3];
			$postojiC=1;
			//header("Location:vezaMP.247.php?t=$t&p=$p&time_start=$time_start&reza=$reza");// ako matrica postoji skace na prikaz
		}	
		else // ako matrice nisu poznate unosimo matricu
		{		
			$query3 = "SELECT max(KLJUC) FROM MATRICES_IN";// broj poslednje matrice da bi nova bila uneta na to mesto + 1
			$result3 = mysql_query($query3, $db_link);
			$row3=mysql_fetch_array($result3);
			$kljuc = $row3[0]+1;		
			$rezaC=$kljuc;
			$jedinicna=0;
			$podeljen=explode(",",$niz2);
			for($i=0;$i<=$p*$t;$i++)
			{
				$jedinicna=$jedinicna + $podeljen[$i];
			}
			$jedinicnaN=$jedinicna;
			$query2 = "insert into MATRICES_IN(ELEMENTS_IN,DIMENSION,KLJUC,BY_ROW) values('$niz2', '$dimenzija', '$rezaC', '$poredu')";
			$result2 = mysql_query($query2, $db_link);
			//header("Location:vezaMP.147.php?t=$t&p=$p&time_start=$time_start&reza=$reza&jedinicna=$jedinicna");// da izracuna i unese AMN u bazu
		}
	}
}


/*
echo "$userfile_name";
echo "<br>";
echo "$jedinicnaA";
echo "<br>";
echo "$rezaA";
echo "<br>";
echo "$postojiA";
echo "<br>";
echo "$userfile2_name";
echo "<br>";
echo "$jedinicnaM";
echo "<br>";
echo "$rezaM";
echo "<br>";
echo "$postojiM";
echo "<br>";
echo "$userfile3_name";
echo "<br>";
echo "$jedinicnaN";
echo "<br>";
echo "$rezaN";
echo "<br>";
echo "$postojiN";
echo "<br>";
echo "$userfile5_name";
echo "<br>";
echo "$jedinicnaA";
echo "<br>";
echo "$rezaA";
echo "<br>";
echo "$postojiA";
echo "<br>";
*/
if($postojiA==1 and $postojiB==1 and $postojiC==1)
{
	header("Location:vezaweighted.2477.php?t=$ta&p=$pa&time_start=$time_start&rezaA=$rezaA&rezaB=$rezaB&rezaC=$rezaC&jedinicnaA=$jedinicnaA&jedinicnaM=$jedinicnaM&jedinicnaN=$jedinicnaN");
	//prikaz vec unete matrice AMN
	/*	echo "postoje sve";
		echo "<br>"; 
		echo "$zielkeA";*/	
}
else

	header("Location:vezaweighted.147.php?t=$ta&p=$pa&time_start=$time_start&rezaA=$rezaA&rezaB=$rezaB&rezaC=$rezaC&jedinicnaA=$jedinicnaA&jedinicnaM=$jedinicnaM&jedinicnaN=$jedinicnaN");
	//izracunavanje i unos matrice AMN, pa posle sa vezaweighted.1.php,kas izracunamo i unesemo AMN, skacemo na prikaz vezaweighted.2.php
	
/*{
echo "$userfile_name";
echo "<br>";
echo "$jedinicnaA";
echo "<br>";
echo "$rezaA";
echo "<br>";
echo "$postojiA";
echo "<br>";
echo "$userfile2_name";
echo "<br>";
echo "$jedinicnaM";
echo "<br>";
echo "$rezaB";
echo "<br>";
echo "$postojiB";
echo "<br>";
echo "$userfile3_name";
echo "<br>";
echo "$jedinicnaC";
echo "<br>";
echo "$rezaC";
echo "<br>";
echo "$postojiC";
echo "<br>";
echo "$userfile5_name";
echo "<br>";
echo "$jedinicnaA";
echo "<br>";
echo "$rezaA";
echo "<br>";
echo "$postojiA";
echo "<br>";
}*/
?>

