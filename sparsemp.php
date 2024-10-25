<?php
include "common.inc";	
ini_set(max_execution_time, "500");
// moze i set_time_limit (500)
include "LMInverseWeighted.1.php";
include "sparseproba.2.php";
$db_link = db_connect();
$m1=$t;
$n1=$pr;
$m2=$t2;
$n2=$p2;
$sparse=1;
//$z=0;
//treba napravit sparse matricu iz baze
$kljucA = $rezaA;
for($i=1;$i<=3;$i++)
{
	$query4 = "select * from MATRICES_IN where KLJUC='$kljucA' and ROW='$i'";
	$result4 = mysql_query($query4);
	$row4 = mysql_fetch_array($result4);
	$podeljen[$i-1]=explode(",",$row4[1]);
}
$granica=sizeof($podeljen[0]);
$sparse1=array();
for($i=0;$i<$granica;$i++)
{
	$sparse1[$i][0]=$podeljen[0][$i];
	$sparse1[$i][1]=$podeljen[1][$i];
	$sparse1[$i][2]=$podeljen[2][$i];
}


$kljucB = $rezaB;
for($i=1;$i<=3;$i++)
{
	$query5 = "select * from MATRICES_IN where KLJUC='$kljucB' and ROW='$i'";
	$result5 = mysql_query($query5);
	$row5 = mysql_fetch_array($result5);
	$podeljen2[$i-1]=explode(",",$row5[1]);
	//echo $row5[1];
}

$granica2=sizeof($podeljen2[0]);
$sparse2=array();
for($i=0;$i<$granica2;$i++)
{
	$sparse2[$i][0]=$podeljen2[0][$i];
	$sparse2[$i][1]=$podeljen2[1][$i];
	$sparse2[$i][2]=$podeljen2[2][$i];
}

	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$inverses'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica A ^ -1 je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$inverses' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse5=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse5[$i][0]=$podeljen2[0][$i];
			$sparse5[$i][1]=$podeljen2[1][$i];
			$sparse5[$i][2]=$podeljen2[2][$i];
		}
		$sparse6=MatTransS($sparse5);
		$sparseout2=makearr($sparse6);
		
		//echo $sparseout2[19][39];
		for($i=0;$i<$n1;$i++)
		{
			for($j=0;$j<$m1;$j++)
			{
				$zaok= round($sparseout2[$j][$i],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$resenje = GrevileG($sparse1,$m1,$n1);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);

		$z=0;
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n1;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$inverses','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$inverses','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$inverses','3')";
		$result6 = mysql_query($query6, $db_link);

		echo "<br>";
		echo '<span class="style1">Matrica A ^ -1 je</span>';
		echo "<br>";
		echo "<br>";
		$sparse6=MatTransS($resenje);
		$sparseout=makearr($sparse6);

		//$sparseout=makearr($resenje);
		for($i=0;$i<$n1;$i++)
		{
			for($j=0;$j<$m1;$j++)
			{
				$zaok= round($sparseout[$j][$i],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
echo "<br>";
$time_end = microtime_float();
echo $time_start;
echo "<br>";
echo $time_end;
echo "<br>";
echo $time_end - $time_start;
?>