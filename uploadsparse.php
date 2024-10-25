<?php
include "common.inc";	
include "LMInverseWeighted.1.php";
include "sparseproba.2.php";

$time_start = microtime_float();
$db_link = db_connect();
//userfile
if($userfile!=none)
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
	$sparse=1;
	if ($action == 'upload')
	{
		$query1 = "SELECT max(BY_ROW) FROM MATRICES_IN where DIMENSION = '$dimenzija' and SPARSE = '$sparse'";// broj unetih matrica dimenzija $dimenzija koje su sparse
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
		$niz3=explode(",",$niz2);
		for($a=0,$z=0;$a<$t;$a++)
		{
			for($b=0;$b<$p;$b++,$z++)
			{
				$niz4[$a][$b]=$niz3[$z];
			}
		}
		$niz5=sparse($niz4,$t,$p);
		$prvi[0]=Column($niz5,0);
		$prvi[1]=Column($niz5,1);
		$prvi[2]=Column($niz5,2);
		//echo $prvi;
		for($j=1;$j<$poredu;$j++)
		{	
			// utvrdjivanje postojanja matrice				
			$query4 = "select * from MATRICES_IN where DIMENSION = '$dimenzija' and SPARSE ='$sparse' and BY_ROW = '$j'";
			$result4 = mysql_query($query4, $db_link);
			$rr=mysql_num_rows($result4);
			$zbir=0;
			for($i=1;$i<=$rr;$i++)
			{
				$row4=mysql_fetch_array($result4);
				if($row4[1]==$prvi[$i-1])
				{
					$zbir++;
				}
			}
			if($zbir==3)
			break;
		}
		if($zbir==3)
		{
			$rezaA=$row4[3]; 
			//echo "matrica postoji"; 
			//header("Location:vezaMP.247.php?t=$t&p=$p&time_start=$time_start&reza=$reza");// ako matrica postoji skace na prikaz
		}	

		else // ako matrice nisu poznate unosimo matricu
		{		
			$query3 = "SELECT max(KLJUC) FROM MATRICES_IN";// broj poslednje matrice da bi nova bila uneta na to mesto + 1
			$result3 = mysql_query($query3, $db_link);
			$row3=mysql_fetch_array($result3);
			$kljuc = $row3[0]+1;		
			$rezaA=$kljuc;
			$query2 = "insert into MATRICES_IN(ELEMENTS_IN,DIMENSION,KLJUC,BY_ROW,SPARSE,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$poredu','$sparse','1')";
			$result2 = mysql_query($query2, $db_link);
			$query3 = "insert into MATRICES_IN(ELEMENTS_IN,DIMENSION,KLJUC,BY_ROW,SPARSE,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$poredu','$sparse','2')";
			$result3 = mysql_query($query3, $db_link);
			$query4 = "insert into MATRICES_IN(ELEMENTS_IN,DIMENSION,KLJUC,BY_ROW,SPARSE,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$poredu','$sparse','3')";
			$result4 = mysql_query($query4, $db_link);
			//header("Location:vezaMP.147.php?t=$t&p=$p&time_start=$time_start&reza=$reza&jedinicna=$jedinicna");// da izracuna i unese AMN u bazu
		}

	}
}

//Unos matrice B
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
		die("Can't delete the file $userfile_name.");
	}	

	upload_file2();
	$r="./fajlovi/" . $userfile2_name;
	$fsadrzaj2=file($r);
	$n=fopen($r, "r");
	$brojac=0;
	$t2=count($fsadrzaj2);// dimenzija m
	$k= filesize($r);
	$podeljen2[0]=explode(" ",$fsadrzaj2[0]);
	$p2=count($podeljen2[0]);// dimenzija n
	$dimenzija = $t2 . "x" . $p2;
	$niz="";
	if ($action == 'upload')
	{
		$query1 = "SELECT max(BY_ROW) FROM MATRICES_IN where DIMENSION = '$dimenzija' and SPARSE = '$sparse'";// broj unetih matrica dimenzija $dimenzija koje su sparse
		$result1 = mysql_query($query1, $db_link);
		$row1=mysql_fetch_array($result1);
		$poredu = $row1[0]+1;
		for($i=0;$i<$t2;$i++)
		{
			$fsadrzaj2[$i]=rtrim($fsadrzaj2[$i]).",";
			$niz = $niz . $fsadrzaj2[$i];
		}
		$niz1=str_replace(" ",",",$niz);
		$niz2=substr($niz1,0,strlen($niz1)-1);// string predstavljen nizom svih elemenata odvojenih zarezom
		$niz3=explode(",",$niz2);
		for($a=0,$z=0;$a<$t2;$a++)
		{
			for($b=0;$b<$p2;$b++,$z++)
			{
				$niz4[$a][$b]=$niz3[$z];
			}
		}
		$niz5=sparse($niz4,$t2,$p2);
		$prvi[0]=Column($niz5,0);
		$prvi[1]=Column($niz5,1);
		$prvi[2]=Column($niz5,2);
		//echo $drugi;
		for($j=1;$j<$poredu;$j++)
		{	
			// utvrdjivanje postojanja matrice				
			$query4 = "select * from MATRICES_IN where DIMENSION = '$dimenzija' and SPARSE ='$sparse' and BY_ROW = '$j'";
			$result4 = mysql_query($query4, $db_link);
			$rr=mysql_num_rows($result4);
			$zbir=0;
			for($i=1;$i<=$rr;$i++)
			{
				$row4=mysql_fetch_array($result4);
				if($row4[1]==$prvi[$i-1])
				{
					$zbir++;
				}
			}
			if($zbir==3)
			break;
		}
		if($zbir==3)
		{
			$rezaB=$row4[3]; 
			//echo "matrica postoji"; 
			//header("Location:vezaMP.247.php?t=$t&p=$p&time_start=$time_start&reza=$reza");// ako matrica postoji skace na prikaz
		}	

		else // ako matrice nisu poznate unosimo matricu
		{		
			$query3 = "SELECT max(KLJUC) FROM MATRICES_IN";// broj poslednje matrice da bi nova bila uneta na to mesto + 1
			$result3 = mysql_query($query3, $db_link);
			$row3=mysql_fetch_array($result3);
			$kljuc = $row3[0]+1;		
			$rezaB=$kljuc;
			$query2 = "insert into MATRICES_IN(ELEMENTS_IN,DIMENSION,KLJUC,BY_ROW,SPARSE,ROW) values('$prvi[0]', '$dimenzija', '$rezaB', '$poredu','$sparse','1')";
			$result2 = mysql_query($query2, $db_link);
			$query3 = "insert into MATRICES_IN(ELEMENTS_IN,DIMENSION,KLJUC,BY_ROW,SPARSE,ROW) values('$prvi[1]', '$dimenzija', '$rezaB', '$poredu','$sparse','2')";
			$result3 = mysql_query($query3, $db_link);
			$query4 = "insert into MATRICES_IN(ELEMENTS_IN,DIMENSION,KLJUC,BY_ROW,SPARSE,ROW) values('$prvi[2]', '$dimenzija', '$rezaB', '$poredu','$sparse','3')";
			$result4 = mysql_query($query4, $db_link);
			//header("Location:vezaMP.147.php?t=$t&p=$p&time_start=$time_start&reza=$reza&jedinicna=$jedinicna");// da izracuna i unese AMN u bazu
		}
	}
}
header("Location:sparseop.php?t=$t&pr=$p&t2=$t2&p2=$p2&time_start=$time_start&rezaA=$rezaA&rezaB=$rezaB&arithmetic=$arithmetic&rr=$skalarr&s=$skalars&p=$skalarp&q=$skalarq&equations=$equations&powersa=$powersa&powersb=$powersb&products=$products&transpose=$transpose&determinants=$determinants&inverses=$inverses");
//echo $userfile2_name;
?>

