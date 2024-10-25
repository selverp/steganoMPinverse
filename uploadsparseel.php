<?php 

//******************************************************************************************************************
// kad javlja "Cannot add header information" treba uci u php konfiguracioni fajl i postaviti "output_buffering=on;"
//******************************************************************************************************************

include "common.inc";	
include "LMInverseWeighted.1.php";
include "sparseproba.2.php";
$time_start = microtime_float();
$db_link = db_connect();
//userfile
$t=$m1;
$p=$n1;
$t2=$m2;
$p2=$n2;
if($matrixa[0]!=NULL)
{
$dimenzija = $m1 . "x" . $n1;
$sparse=1;
$query1 = "SELECT max(BY_ROW) FROM MATRICES_IN where DIMENSION = '$dimenzija' and SPARSE = '$sparse'";// broj unetih matrica dimenzija $dimenzija koje su sparse
$result1 = mysql_query($query1, $db_link);
$row1=mysql_fetch_array($result1);
$poredu = $row1[0]+1;
$niz3=implode(",",$matrixa);
for($a=0,$z=0;$a<$m1;$a++)
{
	for($b=0;$b<$n1;$b++,$z++)
	{
		$niz4[$a][$b]=$matrixa[$z];
	}
}
$niz5=sparse($niz4,$m1,$n1);
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

//Unos matrice B
if($matrixb[0]!=NULL)
{
$dimenzija = $m2 . "x" . $n2;
$niz="";

$query1 = "SELECT max(BY_ROW) FROM MATRICES_IN where DIMENSION = '$dimenzija' and SPARSE = '$sparse'";// broj unetih matrica dimenzija $dimenzija koje su sparse
$result1 = mysql_query($query1, $db_link);
$row1=mysql_fetch_array($result1);
$poredu = $row1[0]+1;
for($a=0,$z=0;$a<$m2;$a++)
{
	for($b=0;$b<$n2;$b++,$z++)
	{
		$niz4[$a][$b]=$matrixb[$z];
	}
}
$niz5=sparse($niz4,$m2,$n2);
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
header("Location:sparseop.php?t=$t&pr=$p&t2=$t2&p2=$p2&time_start=$time_start&rezaA=$rezaA&rezaB=$rezaB&arithmetic=$arithmetic&rr=$skalarr&s=$skalars&p=$skalarp&q=$skalarq&equations=$equations&powersa=$powersa&powersb=$powersb&products=$products&transpose=$transpose&determinants=$determinants&inverses=$inverses");
//echo $userfile2_name;


echo "$rezaA";
echo "<br>";

echo "$rezaB";
?>

