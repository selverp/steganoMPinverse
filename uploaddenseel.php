<?php 

//******************************************************************************************************************
// kad javlja "Cannot add header information" treba uci u php konfiguracioni fajl i postaviti "output_buffering=on;"
// kad nece da prenese promenjivupreko dugmeta browse... postavimo register_globals = on
//******************************************************************************************************************

include "common.inc";	
include "funkcijeDvodim.php";
$time_start = microtime_float();
$db_link = db_connect();
//userfile
$t=$m1;
$p=$n1;
$t2=$m2;
$p2=$n2;
if($m1!=null and $n1!=null)
{
	if($zielkeA!='on')
	{

		$dimenzija = $t . "x" . $p;
		$query1 = "SELECT max(BY_ROW) FROM MATRICES_IN where DIMENSION = '$dimenzija'";// broj unetih matrica dimenzija $dimenzija
		$result1 = mysql_query($query1, $db_link);
		$row1=mysql_fetch_array($result1);
		$poredu = $row1[0]+1;
		$niz2=implode(",",$matrixa);
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
			for($i=0;$i<=$p*$t;$i++)
			{
				$jedinicna=$jedinicna + $podeljen[$i];
			}
			$jedinicnaA=$jedinicna;
			$query2 = "insert into MATRICES_IN(ELEMENTS_IN,DIMENSION,KLJUC,BY_ROW) values('$niz2', '$dimenzija', '$rezaA', '$poredu')";
			$result2 = mysql_query($query2, $db_link);
			//header("Location:vezaMP.147.php?t=$t&p=$p&time_start=$time_start&reza=$reza&jedinicna=$jedinicna");// da izracuna i unese AMN u bazu
		}
	}
	else
	{
		$dimenzija = $t . "x" . $p;
		$query7 = "SELECT * FROM MATRICES_IN where FAMOUS = '$zielkeA'";// broj unetih matrica dimenzija $dimenzija
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
			$niz2=implode(",",$matrixa);
			$dimenzija = $t . "x" . $p;
			$query2 = "insert into MATRICES_IN(ELEMENTS_IN,DIMENSION,KLJUC,BY_ROW,FAMOUS) values('$niz2', '$dimenzija', '$rezaA', '$poredu','$zielkeA')";
			$result2 = mysql_query($query2, $db_link);
			//header("Location:vezaMP.147.php?t=$t&p=$p&time_start=$time_start&reza=$reza");// da izracuna i unese AMN u bazu
		}
		else //prenesi kljuc
		{
			$rezaA=$row7[3];
			//header("Location:vezaMP.247.php?t=$t&p=$p&time_start=$time_start&reza=$reza");
		}
	}
}
//Unos matrice B
if($m2!=null and $n2!=null)
{
	if($zielkeB!='on')
	{
		$dimenzija = $t2 . "x" . $p2;
		$query1 = "SELECT max(BY_ROW) FROM MATRICES_IN where DIMENSION = '$dimenzija'";// broj unetih matrica dimenzija $dimenzija
		$result1 = mysql_query($query1, $db_link);
		$row1=mysql_fetch_array($result1);
		$poredu = $row1[0]+1;
		$niz2=implode(",",$matrixb);
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
			//header("Location:vezaMP.247.php?t=$t&p=$p&time_start=$time_start&reza=$reza");// ako matrica postoji skace na prikaz
		}	
		else // ako matrice nisu poznate unosimo matricu
		{		
			$query3 = "SELECT max(KLJUC) FROM MATRICES_IN";// broj poslednje matrice da bi nova bila uneta na to mesto + 1
			$result3 = mysql_query($query3, $db_link);
			$row3=mysql_fetch_array($result3);
			$kljuc = $row3[0]+1;		
			$rezaB=$kljuc;
			$jedinicnab=0;
			$podeljenb=explode(",",$niz2);
			for($i=0;$i<=$p2*$t2;$i++)
			{
				$jedinicnab=$jedinicnab + $podeljenb[$i];
			}
			$jedinicnaB=$jedinicnab;
			$query2 = "insert into MATRICES_IN(ELEMENTS_IN,DIMENSION,KLJUC,BY_ROW) values('$niz2', '$dimenzija', '$rezaB', '$poredu')";
			$result2 = mysql_query($query2, $db_link);
			//header("Location:vezaMP.147.php?t=$t&p=$p&time_start=$time_start&reza=$reza&jedinicna=$jedinicna");// da izracuna i unese AMN u bazu
		}
	}
	else
	{
		$dimenzija = $t2 . "x" . $p2;
		$query7 = "SELECT * FROM MATRICES_IN where FAMOUS = '$zielkeB'";// broj unetih matrica dimenzija $dimenzija
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
			$rezaB=$kljuc;
			$niz2=implode(",",$matrixb);
			$dimenzija = $t2 . "x" . $p2;
			$query2 = "insert into MATRICES_IN(ELEMENTS_IN,DIMENSION,KLJUC,BY_ROW,FAMOUS) values('$niz2', '$dimenzija', '$rezaB', '$poredu','$zielkeB')";
			$result2 = mysql_query($query2, $db_link);
			//header("Location:vezaMP.147.php?t=$t&p=$p&time_start=$time_start&reza=$reza");// da izracuna i unese AMN u bazu
		}
		else //prenesi kljuc
		{
			$rezaB=$row7[3];
			//header("Location:vezaMP.247.php?t=$t&p=$p&time_start=$time_start&reza=$reza");
		}
	}
}

header("Location:denseop.php?t=$t&pr=$p&t2=$t2&p2=$p2&time_start=$time_start&rezaA=$rezaA&rezaB=$rezaB&jedinicnaA=$jedinicnaA&jedinicnaB=$jedinicnaB&arithmetic=$arithmetic&r=$skalarr&s=$skalars&p=$skalarp&q=$skalarq&equations=$equations&powersa=$powersa&powersb=$powersb&products=$products&transpose=$transpose&determinants=$determinants&inverses=$inverses");
//echo $userfile2_name;
/*
echo "$rezaA";
echo "<br>";
echo "$famous";
echo "$rezaB";*/

?>

