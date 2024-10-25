<?php 
include "common.inc";	
include "funkcijeDvodim.php";
//******************************************************************************************************************
// kad javlja "Cannot add header information" treba uci u php konfiguracioni fajl i postaviti "output_buffering=on;"
//******************************************************************************************************************

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
		$t=count($fsadrzaj);// dimenzija m
		$k= filesize($r);
		$podeljen[0]=explode(" ",$fsadrzaj[0]);
		$p=count($podeljen[0]);// dimenzija n
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
					$reza=$row4[3];  
					break;			
				}
			}
			if($zbir==1)
			{
				header("Location:vezaMP.247d.php?t=$t&p=$p&time_start=$time_start&reza=$reza");// ako matrica postoji skace na prikaz
			}	
			else // ako matrice nisu poznate unosimo matricu
			{		
				$query3 = "SELECT max(KLJUC) FROM MATRICES_IN";// broj poslednje matrice da bi nova bila uneta na to mesto + 1
				$result3 = mysql_query($query3, $db_link);
				$row3=mysql_fetch_array($result3);
				$kljuc = $row3[0]+1;		
				$reza=$kljuc;
				$jedinicna=0;
				$podeljen=explode(",",$niz2);
				for($i=0;$i<=$t*$p;$i++)
				{
					$jedinicna=$jedinicna + $podeljen[$i];
				}
			}
			$jedinicnaA=$jedinicna;
			$query2= "insert into MATRICES_IN(ELEMENTS_IN,DIMENSION,KLJUC,BY_ROW) values('$niz2', '$dimenzija', '$reza', '$poredu')";
			$result2 = mysql_query($query2, $db_link);
			header("Location:vezaMP.147d.php?t=$t&p=$p&time_start=$time_start&reza=$reza&jedinicna=$jedinicnaA");// da izracuna i unese AMN u bazu
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
			die("Can't copy $userfile_name to $filename.");
			if (!isset($WINDIR) && !@unlink($userfile))
			die("Can't delete the file $userfile_name.");
		}		
		if ($action == 'upload') upload_file();	
		$r = "./fajlovi/" . $userfile_name;
		$fsadrzaj=file($r);
		$n=fopen($r, "r");
		$brojac=0;
		$t=count($fsadrzaj);// dimenzija m
		$k= filesize($r);
		$podeljen[0]=explode(" ",$fsadrzaj[0]);
		$p=count($podeljen[0]);// dimenzija n
		$dimenzija = $t . "x" . $p;
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
			$reza=$kljuc;
			for($i=0;$i<$t;$i++)
			{
				$fsadrzaj[$i]=rtrim($fsadrzaj[$i]).",";
				$niz = $niz . $fsadrzaj[$i];
			}
			$niz1=str_replace(" ",",",$niz);
			$niz2=substr($niz1,0,strlen($niz1)-1);// string predstavljen nizom svih elemenata odvojenih zarezom
			$dimenzija = $t . "x" . $p;
			$query2 = "insert into MATRICES_IN(ELEMENTS_IN,DIMENSION,KLJUC,BY_ROW,FAMOUS) values('$niz1', '$dimenzija', '$reza', '$poredu','$famous')";
			$result2 = mysql_query($query2, $db_link);
			header("Location:vezaMP.147d.php?t=$t&p=$p&time_start=$time_start&reza=$reza");// da izracuna i unese AMN u bazu
		}
		else //prenesi kljuc
		{
			$reza=$row7[3];
			header("Location:vezaMP.247d.php?t=$t&p=$p&time_start=$time_start&reza=$reza");
		}	
	}
}



?>

