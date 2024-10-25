<!DOCTYPE HTML PUBLIC "//W3CC//DTD HTML 4.0 Final//EN">
<HTML>
<HEAD><TITLE>MATRIX operation</TITLE>
<META NAME="KEYWORDS" CONTENT="
calculus, algebra, mathematics, trigonometry, trig, math, maths,
tutoring, AP, tutors, homework, tutorial,
derivatives, indefinite, definite, integral, integrals, functions, differentials, polynomials,
calculators,
differentiation, differentiating, differentiate, differentiates, derive,
integration, integrating, integrate, integrates,
antiderivative, antiderivatives, antidifferentiate, antidifferentiating, antidifferentiation,
substitution, substitutions, reduction, formula, formulas,
multiplication, division, multiply, divide,

exercise, exercises,
product, rule, quotient, chain, chain rule.
parts, power, powers, product, products, multiples, angle, angles,
rational, rationals, partial, fraction, fractions
">

<META NAME="DESCRIPTION" CONTENT="Check your calculus homework! Enter your function to get your calculus derivative or integral with each step explained, automatically and fast.">
<META NAME="robots" CONTENT="index,follow">
<link rel="stylesheet" type="text/css" href="calc101.css">
<style type="text/css">
<!--
.style2 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style3 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #006600;
}
.style6 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.style8 {font-size: 12px}
.style15 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #0000FF;
	font-weight: bold;
	font-size: 14px;
}
.style17 {font-size: 12px; font-weight: bold; }
.style18 {
	color: #999999;
	font-size: 14px;
}
.style19 {color: #999999}
.style20 {font-family: Arial, Helvetica, sans-serif}
.style21 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #FF0000; }
.style22 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #9900CC; }
.style25 {font-size: 14px; font-family: Arial, Helvetica, sans-serif;}
.style26 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #006600;
	font-weight: bold;
}
.style30 {font-size: 28px}
.style31 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 20px;
	color: #9900CC;
}
.style32 {font-size: 13px}
-->
</style>
</HEAD>
<body bgcolor="#FFFFFF" TEXT="#171717" VLINK="#EA6A13" ALINK="#EA6A13" LINK="#C73100">
<table width="<?php if($t*7<100)
$procenat = 100;
else
$procenat = $t*8;
echo $procenat . "%"; 
?>" align="center">
  <tr>
    <td><form action="uploaddense.php" method="post" enctype="multipart/form-data" name="form1">
      <table width="100%" align="center">
        <tr>
          <td width="22%" align="left" valign="top"><table width="50" align="right">
            <tr>
              <td><div align="right"><a href="index3.php"><img src="images/logoi2.gif" alt="home page" width="185" height="177" border="0"></a></div></td>
            </tr>
            <tr>
              <td><table border="0" align="right">
                
                <tr>
                  <td width="212" class="style15">&nbsp;</td>
                </tr>
                <tr>
                  <td class="style2"><ul>
                      <LI>
                        <div align="left"><span class="style8"><a href="dense.php">operations of &quot;dense&quot; matrices</a></span></div>
                      <LI>
                        <div align="left"><span class="style8"><A HREF="sparse.php">operations of sparce matrices</A> </span> </div>
                      <LI>
                        <div align="left"><span class="style8"><a href="dense.php">operations of test matrices</a><BR>
                        </span> </div>
                      <LI>
                        <div align="left"><span class="style8"><A HREF="densemp.php">MP Inverse</A></span> </div>
                      <LI>
                        <div align="left"><span class="style8"><a href="densempel.php">MP Inverse by element</a></span> </div>
                      <LI>
                        <div align="left"><span class="style8"><A HREF="densew.php">Weighted Inverse</A> </span> </div>
                      <LI>
                        <div align="left"><span class="style8"><A HREF="densew.php">LM Inverse</A></span> </div>
                      <LI>
                        <div align="left"><span class="style8"><a href="denseel.php">dense element by element</a></span> </div>
                      <LI>
                        <div align="left"><a href="sparseel.php" class="style8">sparse element by element</a> </div>
                      <LI>
                        <div align="left"><a href="sparsemp1.php" class="style8">sparse MP Inverse</a> </div>
                      <LI>
                        <div align="left"><span class="style8"><a href="fajlovi/">upload file</a></span> </div>
                      <LI>
                        <div align="left"><a href="testmatrix.php" class="style8">view of uploaded txt file</a> </div>
                      <LI>
                        <div align="left"><a href="testmatrix.php" class="style8">examples</a> <a href="examples3.php" class="style8"></a> </div>
                      <li>
                        <div align="left"><a href="examples3.php" class="style8">test examples</a></div>
                      </li>
                      <li>
                        <div align="left"><a href="examplesmp.php" class="style8">test examples MP</a></div>
                      </li>
                      <li>
                        <div align="left"><a href="examplesw.php" class="style8">test examples Weighted Inverse</a></div>
                      </li>
                      </UL></td>
                </tr>
              </table></td>
            </tr>
          </table></td>
          <td width="100%" align="left" valign="top"><table width=100% border=0 align="left">
            <tr>
              <td width=1% height="635" rowspan="3" align=left valign=top><p>&nbsp;</p>
                <p>&nbsp;</p>
                <p><img src="images/fadeup.gif" width="1" height="92"></p>
                <p><img src="images/fadedn_bluethin.gif" width="1" height="200"></p>
                <p>&nbsp;</p>
                <p>&nbsp;</p></td>
              <td width=99% align=left valign=top><h1 align="left" class="style3"><span class="style30"><br>
                The Matrix Library</span><span class="style26"><br>
              </span></h1>
                <h3 align="left" class="style31">Matrix algebra: matrix product, determinants, <br>
                  inverses, pawers of matrices, arithmetic, MP and <br>
                  Weighted invers</h3>                
                </td>
            </tr>
            <tr>
              <td height="11" align=left valign=top><img src="images/linel.gif" width="200" height="1"></td>
            </tr>
            <tr>
              <td height="367" align=left valign=top class="style26"><table width="100%" align="left">
                <tr>
                  <td valign="top"><div align="left">
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
//echo $sparse2[0][2];
//echo $granica2;
//echo "<br>";
//echo $arithmetic;				
//echo $sparse2[8][2];

if($equations == "A.a=B")
{
	$resenjeA = Grevile($matrixa,$m1,$n1);
	$resenje = multMat($resenjeA, $n1, $m1, $matrixb, $m2, $n2);
	$z=0;
	echo "<br>";
	echo '<span class="style1">Matrica a je</span>';
	echo "<br>";
	echo "<br>";
	for($i=0;$i<$m1;$i++)
	{
		for($j=0;$j<$n2;$j++,$z++)
		{
			$zaok= round($resenje[$z],3);
			echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  readonly=\"readonly\"> ";
			echo "&nbsp;&nbsp;&nbsp;";
		}
		echo "<br>";
	}
}
elseif($equations=="B.x=A")
{
	$resenjeB = Grevile($matrixb,$m2,$n2);
	$resenje = multMat($resenjeB, $n2, $m2, $matrixa, $m1, $n1);
	$z=0;
	echo "<br>";
	echo '<span class="style1">Matrica x je</span>';
	echo "<br>";
	echo "<br>";
	for($i=0;$i<$n2;$i++)
	{
		for($j=0;$j<$n1;$j++,$z++)
		{
			$zaok= round($resenje[$z],3);
			echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  readonly=\"readonly\"> ";
			echo "&nbsp;&nbsp;&nbsp;";
		}
		echo "<br>";
	}
}

// aritmetika
if($arithmetic=="sum")
{
	
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$arithmetic'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica A + B je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$arithmetic' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}

		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$resenje3 = addSparse($sparse1,$sparse2);
		$prvi[0]=Column($resenje3,0);
		$prvi[1]=Column($resenje3,1);
		$prvi[2]=Column($resenje3,2);

		$z=0;
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n1;
		$niz1=implode(",",$resenje3);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$rezaB', '$arithmetic','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$rezaB', '$arithmetic','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$rezaB', '$arithmetic','3')";
		$result6 = mysql_query($query6, $db_link);

		echo "<br>";
		echo '<span class="style1">Matrica A + B je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje3);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
	
}
elseif($arithmetic=="A-B")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$arithmetic'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica A - B je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$arithmetic' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$resenje2 = subSparse($sparse1,$sparse2);
		$prvi[0]=Column($resenje2,0);
		$prvi[1]=Column($resenje2,1);
		$prvi[2]=Column($resenje2,2);
		$z=0;
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n1;
		$niz1=implode(",",$resenje2);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$rezaB', '$arithmetic','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$rezaB', '$arithmetic','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$rezaB', '$arithmetic','3')";
		$result6 = mysql_query($query6, $db_link);

		echo "<br>";
		echo '<span class="style1">Matrica A - B je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}
elseif($arithmetic=="B-A")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$arithmetic'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica B - A je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$arithmetic' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$resenje = subSparse($sparse2,$sparse1);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);

		$z=0;
		//napravi string od niza
		$dimenzija = $m2 . "x" . $n2;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$rezaB', '$arithmetic','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$rezaB', '$arithmetic','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$rezaB', '$arithmetic','3')";
		$result6 = mysql_query($query6, $db_link);

		echo "<br>";
		echo '<span class="style1">Matrica B - A je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}
elseif($arithmetic=="rA")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and R= '$rr' and OPERATION='$arithmetic'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica r A je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$arithmetic' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}	
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$resenje = MultSkS($sparse1,$rr);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n1;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,R,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$arithmetic','$rr','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,R,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$arithmetic','$rr','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,R,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$arithmetic','$rr','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica r A je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}
elseif($arithmetic=="sB")
{
	$query3 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and S= '$s' and OPERATION='$arithmetic'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica s B je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$arithmetic' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}	
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$resenje = MultSkS($sparse2,$s);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n1;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,S,ROW) values('$prvi[0]', '$dimenzija', '$rezaB', '$arithmetic','$s','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,S,ROW) values('$prvi[1]', '$dimenzija', '$rezaB', '$arithmetic','$s','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,S,ROW) values('$prvi[2]', '$dimenzija', '$rezaB', '$arithmetic','$s','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica s B je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}
elseif($arithmetic=="rAsumsB")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and R='$rr' and S='$s' and OPERATION='$arithmetic'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica rA + sB je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$arithmetic' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}
	else
	{
		$matrixra=MultSkS($sparse1,$rr);
		$matrixsb=MultSkS($sparse2,$s);
		$resenje = addSparse($matrixra,$matrixsb);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n1;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,R,S,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$rezaB', '$arithmetic','$rr','$s','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,R,S,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$rezaB', '$arithmetic','$rr','$s','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,R,S,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$rezaB', '$arithmetic','$rr','$s','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica r A + s B je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}

// stepenovanje A
if($powersa=="A^4.A")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersa'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica A^4 . A je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersa' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}	
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$resenje=$sparse1;
		for($i=1;$i<5;$i++)
		{
			$resenje = multSparse($resenje,$sparse1);
		}
		
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n1;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$powersa','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$powersa','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$powersa','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica A^4 . A je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}

}
elseif($powersa=="A^3.A")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersa'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica A^3 . A je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersa' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}	
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$resenje=$sparse1;
		for($i=1;$i<4;$i++)
		{
			$resenje = multSparse($resenje,$sparse1);
		}
		
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n1;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$powersa','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$powersa','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$powersa','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica A^3 . A je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}
elseif($powersa=="A^2.A")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersa'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica A^2 . A je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersa' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}	
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$resenje=$sparse1;
		for($i=1;$i<3;$i++)
		{
			$resenje = multSparse($resenje,$sparse1);
		}
		
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n1;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$powersa','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$powersa','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$powersa','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica A^2 . A je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}
elseif($powersa=="A.A")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersa'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica A . A je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersa' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}	
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$resenje = multSparse($sparse1,$sparse1);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n1;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$powersa','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$powersa','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$powersa','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica A . A je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}
elseif($powersa=="I.A")
{
	//$jed=;
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersa'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica I . A je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersa' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}	
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$niz3=jedinicnaMat($m1);
		for($a=0,$z=0;$a<$m1;$a++)
		{
			for($b=0;$b<$n1;$b++,$z++)
			{
				$niz4[$a][$b]=$niz3[$z];
			}
		}
		$sparse2=sparse($niz4,$m1,$n1);

		$resenje = multSparse($sparse1,$sparse2);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n1;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$powersa','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$powersa','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$powersa','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica I . A je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}
elseif($powersa=="A^-1.A")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersa'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica A^-1 . A je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersa' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		//$sparse6=MatTransS($sparse2);
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
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
		$resenje = multSparse($resenje,$sparse1);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n1;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$powersa','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$powersa','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$powersa','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica A^-1 . A je</span>';
		echo "<br>";
		echo "<br>";
		$sparse6=MatTransS($resenje);
		$sparseout=makearr($sparse6);

		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],5);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}
elseif($powersa=="A^p.A^q")
{
}
elseif($powersa=="A.A^-1")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersa'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica A^-1 . A je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersa' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparse6=MatTransS($sparse2);
		$sparseout=makearr($sparse6);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
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
		$resenje = multSparse($sparse1,$resenje);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n1;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$powersa','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$powersa','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$powersa','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica A^-1 . A je</span>';
		echo "<br>";
		echo "<br>";
		$sparse6=MatTransS($resenje);
		$sparseout=makearr($sparse6);

		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],5);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}

}
elseif($powersa=="A^-1.A^-1")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersa'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica A^-1 . A^-1 je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersa' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparse6=MatTransS($sparse2);
		$sparseout=makearr($sparse6);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}	
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$resenje1 = GrevileG($sparse1,$m1,$n1);
		$resenje = multSparse($resenje1,$resenje1);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n1;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$powersa','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$powersa','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$powersa','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica A^-1 . A je</span>';
		echo "<br>";
		echo "<br>";
		//$sparse6=MatTransS($resenje);
		$sparseout=makearr($resenje);

		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],5);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}
elseif($powersa=="A^-2.A^-1")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersa'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica A^-2.A^-1 je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersa' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		//$sparse6=MatTransS($sparse2);
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
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

		for($i=1;$i<3;$i++)
		{
			$resenje = multSparse($resenje,GrevileG($sparse1,$m1,$n1));
		}

		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n1;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$powersa','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$powersa','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$powersa','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica A^-2.A^-1 je</span>';
		echo "<br>";
		echo "<br>";
		//$sparse6=MatTransS($resenje);
		$sparseout=makearr($resenje);

		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],5);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}
elseif($powersa=="A^-3.A^-1")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersa'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica A^-3.A^-1 je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersa' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		//$sparse6=MatTransS($sparse2);
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
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

		for($i=1;$i<4;$i++)
		{
			$resenje = multSparse($resenje,GrevileG($sparse1,$m1,$n1));
		}

		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n1;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$powersa','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$powersa','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$powersa','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica A^-3.A^-1 je</span>';
		echo "<br>";
		echo "<br>";
		//$sparse6=MatTransS($resenje);
		$sparseout=makearr($resenje);

		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],5);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}
elseif($powersa=="A^-4.A^-1")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersa'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica A^-4.A^-1 je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersa' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		//$sparse6=MatTransS($sparse2);
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
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

		for($i=1;$i<5;$i++)
		{
			$resenje = multSparse($resenje,GrevileG($sparse1,$m1,$n1));
		}

		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n1;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$powersa','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$powersa','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$powersa','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica A^-4.A^-1 je</span>';
		echo "<br>";
		echo "<br>";
		//$sparse6=MatTransS($resenje);
		$sparseout=makearr($resenje);

		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n1;$j++)
			{
				$zaok= round($sparseout[$i][$j],5);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}

// stepenovanje B
if($powersb=="B^4.B")
{
	$query3 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$powersb'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica B^4 . B je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$powersb' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}	
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$resenje=$sparse2;
		for($i=1;$i<5;$i++)
		{
			$resenje = multSparse($resenje,$sparse2);
		}
		
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m2 . "x" . $n2;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaB', '$powersb','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaB', '$powersb','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaB', '$powersb','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica B^4 . B je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}
elseif($powersb=="B^3.B")
{
	$query3 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$powersb'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica B^4 . B je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$powersb' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}	
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$resenje=$sparse2;
		for($i=1;$i<4;$i++)
		{
			$resenje = multSparse($resenje,$sparse2);
		}
		
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m2 . "x" . $n2;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaB', '$powersb','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaB', '$powersb','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaB', '$powersb','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica B^4 . B je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}

elseif($powersb=="B^2.B")
{
	$query3 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$powersb'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica B^4 . B je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$powersb' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}	
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$resenje=$sparse2;
		for($i=1;$i<3;$i++)
		{
			$resenje = multSparse($resenje,$sparse2);
		}
		
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m2 . "x" . $n2;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaB', '$powersb','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaB', '$powersb','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaB', '$powersb','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica B^4 . B je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}
elseif($powersb=="B.B")
{
	$query3 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$powersb'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica B^4 . B je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$powersb' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}	
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";

		$resenje = multSparse($sparse2,$sparse2);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m2 . "x" . $n2;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaB', '$powersb','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaB', '$powersb','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaB', '$powersb','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica B^4 . B je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}
elseif($powersb=="I.B")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersB'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica I . B je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$powersb' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}	
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$niz3=jedinicnaMat($m2);
		for($a=0,$z=0;$a<$m2;$a++)
		{
			for($b=0;$b<$n2;$b++,$z++)
			{
				$niz4[$a][$b]=$niz3[$z];
			}
		}
		$sparse3=sparse($niz4,$m2,$n2);

		$resenje = multSparse($sparse3,$sparse2);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m2 . "x" . $n2;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaB', '$powersb','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaB', '$powersb','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaB', '$powersb','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica I . B je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}
elseif($powersb=="B^-1.B")
{
	$query3 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$powersb'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica B^-1 . B je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$powersb' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}	
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$resenje4 = GrevileG($sparse2,$m2,$n2);
		$resenje = multSparse($resenje4,$sparse2);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m2 . "x" . $n2;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaB', '$powersb','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaB', '$powersb','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaB', '$powersb','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica B^-1 . B je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}
elseif($powersb=="B^p.B^q")
{}
elseif($powersb=="B.B^-1")
{
	$query3 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$powersb'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica B . B^-1 je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$powersb' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}	
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$resenje4 = GrevileG($sparse2,$m2,$n2);
		$resenje = multSparse($resenje4,$sparse2);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m2 . "x" . $n2;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaB', '$powersb','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaB', '$powersb','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaB', '$powersb','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica B . B^-1 je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
} 
elseif($powersb=="I.B^-1")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$powersB'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica I . B je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$powersb' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}	
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$niz3=jedinicnaMat($m2);
		for($a=0,$z=0;$a<$m2;$a++)
		{
			for($b=0;$b<$n2;$b++,$z++)
			{
				$niz4[$a][$b]=$niz3[$z];
			}
		}
		$sparse3=sparse($niz4,$m2,$n2);
		$resenje4 = GrevileG($sparse2,$m2,$n2);
		$resenje = multSparse($sparse3,$resenje4);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m2 . "x" . $n2;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaB', '$powersb','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaB', '$powersb','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaB', '$powersb','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica I . B je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}
elseif($powersb=="B^-1.B^-1")
{
	$query3 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$powersb'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica B . B^-1 je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$powersb' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}	
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$resenje4 = GrevileG($sparse2,$m2,$n2);
		$resenje = multSparse($resenje4,$resenje4);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m2 . "x" . $n2;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaB', '$powersb','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaB', '$powersb','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaB', '$powersb','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica B . B^-1 je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}
elseif($powersb=="B^-2.B^-1")
{
	$query3 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$powersb'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica B^-2 . B^-1 je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$powersb' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}	
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$resenje = GrevileG($sparse2,$m2,$n2);
		for($i=1;$i<3;$i++)
		{
			$resenje = multSparse($resenje,GrevileG($sparse2,$m2,$n2));
		}
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m2 . "x" . $n2;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaB', '$powersb','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaB', '$powersb','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaB', '$powersb','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica B^-2 . B^-1 je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}
elseif($powersb=="B^-3.B^-1")
{
	$query3 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$powersb'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica B^-2 . B^-1 je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$powersb' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}	
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$resenje = GrevileG($sparse2,$m2,$n2);
		for($i=1;$i<4;$i++)
		{
			$resenje = multSparse($resenje,GrevileG($sparse2,$m2,$n2));
		}
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m2 . "x" . $n2;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaB', '$powersb','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaB', '$powersb','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaB', '$powersb','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica B^-2 . B^-1 je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}
elseif($powersb=="B^-4.B^-1")
{
	$query3 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$powersb'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica B^-4 . B^-1 je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$powersb' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}	
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$resenje = GrevileG($sparse2,$m2,$n2);
		for($i=1;$i<5;$i++)
		{
			$resenje = multSparse($resenje,GrevileG($sparse2,$m2,$n2));
		}
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m2 . "x" . $n2;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaB', '$powersb','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaB', '$powersb','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaB', '$powersb','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica B^-4 . B^-1 je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		for($i=0;$i<$m2;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}


// mnozenje
if($products=="A.B")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$products'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica A . B je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$products' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}
	else
	{
		$resenje = multSparse($sparse1,$sparse2);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n2;
		$niz1=implode(",",$resenje);
		
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$rezaB', '$products','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$rezaB', '$products','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$rezaB', '$products','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica A . B je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		$s='<?xml version="1.0" encoding="utf-8"?>' . "\n<matrix>" . "\n";
		$z=1;
		$s = $s . "</matrix>";
		for($i=0;$i<$m1;$i++)
		{
			$k=1;
			$s = $s . "    <row>\n";
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				$s = $s . "        <column>" . "$zaok";
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
				$s = $s . "<\column>\n";
			}
			$s = $s . "    </row>\n";
			echo "<br>";
		}
		
		echo "<br>";
		$time_end = microtime_float();
		echo $time_end - $time_start;
		echo "<br>";
		$myFile = "testFile.xml";
		$fh = fopen($myFile, 'w') or die("can't open file");
		//$stringData = "Bobby Bopper\n";
		fwrite($fh, $s);
		///$stringData = "Tracy Tanner\n";
		//fwrite($fh, $stringData);
		fclose($fh);
		
		//echo $s;
	}
}
elseif($products=="B.A")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$products'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica B . A je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$products' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}
	else
	{
		$resenje = multSparse($sparse2,$sparse1);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n2;
		$niz1=implode(",",$resenje);
		
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$rezaB', '$products','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$rezaB', '$products','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$rezaB', '$products','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica B . A je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		$s='<?xml version="1.0" encoding="utf-8"?>' . "\n<matrix>" . "\n";
		$z=1;
		$s = $s . "</matrix>";
		for($i=0;$i<$m1;$i++)
		{
			$k=1;
			$s = $s . "    <row>\n";
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				$s = $s . "        <column>" . "$zaok";
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
				$s = $s . "<\column>\n";
			}
			$s = $s . "    </row>\n";
			echo "<br>";
		}
		
		echo "<br>";
		$time_end = microtime_float();
		echo $time_end - $time_start;
		echo "<br>";
		$myFile = "testFile.xml";
		$fh = fopen($myFile, 'w') or die("can't open file");
		//$stringData = "Bobby Bopper\n";
		fwrite($fh, $s);
		///$stringData = "Tracy Tanner\n";
		//fwrite($fh, $stringData);
		fclose($fh);
		
		//echo $s;
	}
}
elseif($products=="B^-1.A^-1")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$products'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica B^-1 . A^-1 je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$products' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}
	else
	{
		$resenje1 = GrevileG($sparse1,$m1,$n1);
		$resenje2 = GrevileG($sparse2,$m2,$n2);
		$resenje = multSparse($resenje2,$resenje1);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n2;
		$niz1=implode(",",$resenje);
		
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$rezaB', '$products','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$rezaB', '$products','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$rezaB', '$products','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica B^-1.A^-1 je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		$s='<?xml version="1.0" encoding="utf-8"?>' . "\n<matrix>" . "\n";
		$z=1;
		$s = $s . "</matrix>";
		for($i=0;$i<$m1;$i++)
		{
			$k=1;
			$s = $s . "    <row>\n";
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				$s = $s . "        <column>" . "$zaok";
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
				$s = $s . "<\column>\n";
			}
			$s = $s . "    </row>\n";
			echo "<br>";
		}
		
		echo "<br>";
		$time_end = microtime_float();
		echo $time_end - $time_start;
		echo "<br>";
		$myFile = "testFile.xml";
		$fh = fopen($myFile, 'w') or die("can't open file");
		//$stringData = "Bobby Bopper\n";
		fwrite($fh, $s);
		///$stringData = "Tracy Tanner\n";
		//fwrite($fh, $stringData);
		fclose($fh);
		
		//echo $s;
	}
}
elseif($products=="A^-1.B^-1")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$products'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica A^-1.B^-1 je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$products' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}
	else
	{
		$resenje1 = GrevileG($sparse1,$m1,$n1);
		$resenje2 = GrevileG($sparse2,$m2,$n2);
		$resenje = multSparse($resenje1,$resenje2);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n2;
		$niz1=implode(",",$resenje);
		
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$rezaB', '$products','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$rezaB', '$products','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$rezaB', '$products','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica A^-1.B^-1 je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		$s='<?xml version="1.0" encoding="utf-8"?>' . "\n<matrix>" . "\n";
		$z=1;
		$s = $s . "</matrix>";
		for($i=0;$i<$m1;$i++)
		{
			$k=1;
			$s = $s . "    <row>\n";
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				$s = $s . "        <column>" . "$zaok";
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
				$s = $s . "<\column>\n";
			}
			$s = $s . "    </row>\n";
			echo "<br>";
		}
		
		echo "<br>";
		$time_end = microtime_float();
		echo $time_end - $time_start;
		echo "<br>";
		$myFile = "testFile.xml";
		$fh = fopen($myFile, 'w') or die("can't open file");
		//$stringData = "Bobby Bopper\n";
		fwrite($fh, $s);
		///$stringData = "Tracy Tanner\n";
		//fwrite($fh, $stringData);
		fclose($fh);
		
		//echo $s;
	}
}
elseif($products=="A^-1.B")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$products'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica A^-1.B je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$products' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}
	else
	{
		$resenje1 = GrevileG($sparse1,$m1,$n1);
		//$resenje2 = GrevileG($sparse2,$m2,$n2);
		$resenje = multSparse($resenje1,$sparse2);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n2;
		$niz1=implode(",",$resenje);
		
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$rezaB', '$products','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$rezaB', '$products','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$rezaB', '$products','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica A^-1.B je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		$s='<?xml version="1.0" encoding="utf-8"?>' . "\n<matrix>" . "\n";
		$z=1;
		$s = $s . "</matrix>";
		for($i=0;$i<$m1;$i++)
		{
			$k=1;
			$s = $s . "    <row>\n";
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				$s = $s . "        <column>" . "$zaok";
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
				$s = $s . "<\column>\n";
			}
			$s = $s . "    </row>\n";
			echo "<br>";
		}
		
		echo "<br>";
		$time_end = microtime_float();
		echo $time_end - $time_start;
		echo "<br>";
		$myFile = "testFile.xml";
		$fh = fopen($myFile, 'w') or die("can't open file");
		//$stringData = "Bobby Bopper\n";
		fwrite($fh, $s);
		///$stringData = "Tracy Tanner\n";
		//fwrite($fh, $stringData);
		fclose($fh);
		
		//echo $s;
	}
}
elseif($products=="A.B^-1")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$products'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica A.B^-1 je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$products' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}
	else
	{
		//$resenje1 = GrevileG($sparse1,$m1,$n1);
		$resenje2 = GrevileG($sparse2,$m2,$n2);
		$resenje = multSparse($sparse1,$resenje2);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n2;
		$niz1=implode(",",$resenje);
		
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$rezaB', '$products','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$rezaB', '$products','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$rezaB', '$products','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica A.B^-1 je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		$s='<?xml version="1.0" encoding="utf-8"?>' . "\n<matrix>" . "\n";
		$z=1;
		$s = $s . "</matrix>";
		for($i=0;$i<$m1;$i++)
		{
			$k=1;
			$s = $s . "    <row>\n";
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				$s = $s . "        <column>" . "$zaok";
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
				$s = $s . "<\column>\n";
			}
			$s = $s . "    </row>\n";
			echo "<br>";
		}
		
		echo "<br>";
		$time_end = microtime_float();
		echo $time_end - $time_start;
		echo "<br>";
		$myFile = "testFile.xml";
		$fh = fopen($myFile, 'w') or die("can't open file");
		//$stringData = "Bobby Bopper\n";
		fwrite($fh, $s);
		///$stringData = "Tracy Tanner\n";
		//fwrite($fh, $stringData);
		fclose($fh);
		
		//echo $s;
	}
}
elseif($products=="B.A^-1")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$products'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica B.A^-1 je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$products' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}
	else
	{
		$resenje1 = GrevileG($sparse1,$m1,$n1);
		//$resenje2 = GrevileG($sparse2,$m2,$n2);
		$resenje = multSparse($sparse2,$resenje1);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n2;
		$niz1=implode(",",$resenje);
		
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$rezaB', '$products','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$rezaB', '$products','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$rezaB', '$products','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica B.A^-1 je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		$s='<?xml version="1.0" encoding="utf-8"?>' . "\n<matrix>" . "\n";
		$z=1;
		$s = $s . "</matrix>";
		for($i=0;$i<$m1;$i++)
		{
			$k=1;
			$s = $s . "    <row>\n";
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				$s = $s . "        <column>" . "$zaok";
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
				$s = $s . "<\column>\n";
			}
			$s = $s . "    </row>\n";
			echo "<br>";
		}
		
		echo "<br>";
		$time_end = microtime_float();
		echo $time_end - $time_start;
		echo "<br>";
		$myFile = "testFile.xml";
		$fh = fopen($myFile, 'w') or die("can't open file");
		//$stringData = "Bobby Bopper\n";
		fwrite($fh, $s);
		///$stringData = "Tracy Tanner\n";
		//fwrite($fh, $stringData);
		fclose($fh);
		
		//echo $s;
	}
}
elseif($products=="B^-1.A")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$products'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica B^-1.A je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$products' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}
	else
	{
		//$resenje1 = GrevileG($sparse1,$m1,$n1);
		$resenje2 = GrevileG($sparse2,$m2,$n2);
		$resenje = multSparse($resenje2,$sparse1);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n2;
		$niz1=implode(",",$resenje);
		
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$rezaB', '$products','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$rezaB', '$products','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$rezaB', '$products','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica B^-1.A je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		$s='<?xml version="1.0" encoding="utf-8"?>' . "\n<matrix>" . "\n";
		$z=1;
		$s = $s . "</matrix>";
		for($i=0;$i<$m1;$i++)
		{
			$k=1;
			$s = $s . "    <row>\n";
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				$s = $s . "        <column>" . "$zaok";
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
				$s = $s . "<\column>\n";
			}
			$s = $s . "    </row>\n";
			echo "<br>";
		}
		
		echo "<br>";
		$time_end = microtime_float();
		echo $time_end - $time_start;
		echo "<br>";
		$myFile = "testFile.xml";
		$fh = fopen($myFile, 'w') or die("can't open file");
		//$stringData = "Bobby Bopper\n";
		fwrite($fh, $s);
		///$stringData = "Tracy Tanner\n";
		//fwrite($fh, $stringData);
		fclose($fh);
		
		//echo $s;
	}
}
elseif($products=="A^p.B^q")
{}
elseif($products=="B^q.A^p")
{}

// transponovnje
if($transpose=="A^T")
{
	echo "<br>";
	echo '<span class="style1">Matrica A^T je</span>';
	echo "<br>";
	echo "<br>";
	$resenje=transMat($matrixa, $m1, $n1);
	$z=0;
	for($i=0;$i<$n1;$i++)
	{
		for($j=0;$j<$m1;$j++,$z++)
		{
			$zaok=round($resenje[$z],3);
			echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  readonly=\"readonly\"> ";
			echo "&nbsp;&nbsp;&nbsp;";
		}
		echo "<br>";
	}
}
elseif($transpose=="B^T")
{
	$z=0;
	echo "<br>";
	echo '<span class="style1">Matrica B^T je</span>';
	echo "<br>";
	echo "<br>";
	$resenje=transMat($matrixb, $m2, $n2);
	for($i=0;$i<$n2;$i++)
	{
		for($j=0;$j<$m2;$j++,$z++)
		{
			$zaok=round($resenje[$z],3);
			echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  readonly=\"readonly\"> ";
			echo "&nbsp;&nbsp;&nbsp;";
		}
		echo "<br>";
	}
}
elseif($transpose=="(A.B)^T")
{
	echo "<br>";
	echo '<span class="style1">Matrica (A . B)^T je</span>';
	echo "<br>";
	echo "<br>";
	$matrix=multMat($matrixa, $m1, $n1, $matrixb, $m2, $n2);
	$resenje=transMat($matrix, $m1, $n1);
	$z=0;
	for($i=0;$i<$n1;$i++)
	{
		for($j=0;$j<$m1;$j++,$z++)
		{
			$zaok=round($resenje[$z],3);
			echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  readonly=\"readonly\"> ";
			echo "&nbsp;&nbsp;&nbsp;";
		}
		echo "<br>";
	}
}
elseif($transpose=="(B.A)^T")
{
	echo "<br>";
	echo '<span class="style1">Matrica (B . A)^T je</span>';
	echo "<br>";
	echo "<br>";
	$matrix=multMat($matrixb, $m2, $n2, $matrixa, $m1, $n1);
	$resenje=transMat($matrix, $m1, $n1);
	$z=0;
	for($i=0;$i<$n1;$i++)
	{
		for($j=0;$j<$m1;$j++,$z++)
		{
			$zaok=round($resenje[$z],3);
			echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  readonly=\"readonly\"> ";
			echo "&nbsp;&nbsp;&nbsp;";
		}
		echo "<br>";
	}
}
elseif($transpose=="B^T.A^T")
{
	echo "<br>";
	echo '<span class="style1">Matrica B^T . A^T je</span>';
	echo "<br>";
	echo "<br>";
	$resenjeA=transMat($matrixa, $m1, $n1);
	$resenjeB=transMat($matrixb, $m2, $n2);
	$matrix=multMat($resenjeB, $n2, $m2, $resenjeA, $n1, $m1);
	$z=0;
	for($i=0;$i<$n1;$i++)
	{
		for($j=0;$j<$m1;$j++,$z++)
		{
			$zaok=round($matrix[$z],3);
			echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  readonly=\"readonly\"> ";
			echo "&nbsp;&nbsp;&nbsp;";
		}
		echo "<br>";
	}
}
elseif($transpose=="A^T.B^T")
{
	echo "<br>";
	echo '<span class="style1">Matrica A^T . B^T je</span>';
	echo "<br>";
	echo "<br>";
	$resenjeA=transMat($matrixa, $m1, $n1);
	$resenjeB=transMat($matrixb, $m2, $n2);
	$matrix=multMat($resenjeB, $n2, $m2, $resenjeA, $n1, $m1);
	$z=0;
	for($i=0;$i<$n1;$i++)
	{
		for($j=0;$j<$m1;$j++,$z++)
		{
			$zaok=round($matrix[$z],3);
			echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  readonly=\"readonly\"> ";
			echo "&nbsp;&nbsp;&nbsp;";
		}
		echo "<br>";
	}
}

// inverze
if($inverses=="A^-1")
{
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
}
elseif($inverses=="B^-1")
{
	$query3 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$inverses'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica B ^ -1 je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$inverses' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		$sparse6=MatTransS($sparse2);
		$sparseout=makearr($sparse6);

		for($i=0;$i<$n2;$i++)
		{
			for($j=0;$j<$m2;$j++)
			{
				$zaok= round($sparseout[$j][$i],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$resenje = GrevileG($sparse2,$m2,$n2);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);

		$z=0;
		//napravi string od niza
		$dimenzija = $n2 . "x" . $m2;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaB', '$inverses','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaB', '$inverses','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaB', '$inverses','3')";
		$result6 = mysql_query($query6, $db_link);

		echo "<br>";
		echo '<span class="style1">Matrica B ^ -1 je</span>';
		echo "<br>";
		echo "<br>";
		$sparse6=MatTransS($resenje);
		$sparseout=makearr($sparse6);

		for($i=0;$i<$n2;$i++)
		{
			for($j=0;$j<$m2;$j++)
			{
				$zaok= round($sparseout[$j][$i],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}
elseif($inverses=="(B.A)^-1")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$inverses'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica (B.A)^-1 je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$inverses' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}
	else
	{
		$resenje = multSparse($sparse2,$sparse1);
		$resenje= GrevileG($resenje,$m1,$n1);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n2;
		$niz1=implode(",",$resenje);
		
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$rezaB', '$inverses','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$rezaB', '$inverses','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$rezaB', '$inverses','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica (B.A)^-1 je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		$s='<?xml version="1.0" encoding="utf-8"?>' . "\n<matrix>" . "\n";
		$z=1;
		$s = $s . "</matrix>";
		for($i=0;$i<$m1;$i++)
		{
			$k=1;
			$s = $s . "    <row>\n";
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				$s = $s . "        <column>" . "$zaok";
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
				$s = $s . "<\column>\n";
			}
			$s = $s . "    </row>\n";
			echo "<br>";
		}
		
		echo "<br>";
		$time_end = microtime_float();
		echo $time_end - $time_start;
		echo "<br>";
		$myFile = "testFile.xml";
		$fh = fopen($myFile, 'w') or die("can't open file");
		//$stringData = "Bobby Bopper\n";
		fwrite($fh, $s);
		///$stringData = "Tracy Tanner\n";
		//fwrite($fh, $stringData);
		fclose($fh);
		
		//echo $s;
	}
}
elseif($inverse=="(A.B)^-1")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$inverses'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica (A.B)^-1 je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and KLJUCB='$kljucB' and OPERATION='$inverses' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		
		$sparseout=makearr($sparse2);
		for($i=0;$i<$m1;$i++)
		{
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}
	}
	else
	{
		$resenje = multSparse($sparse1,$sparse2);
		$resenje= GrevileG($resenje,$m1,$n1);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);
		//napravi string od niza
		$dimenzija = $m1 . "x" . $n2;
		$niz1=implode(",",$resenje);
		
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaA', '$rezaB', '$inverses','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaA', '$rezaB', '$inverses','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaA', '$rezaB', '$inverses','3')";
		$result6 = mysql_query($query6, $db_link);
		echo "<br>";
		echo '<span class="style1">Matrica (A.B)^-1 je</span>';
		echo "<br>";
		echo "<br>";
		$sparseout=makearr($resenje);
		$s='<?xml version="1.0" encoding="utf-8"?>' . "\n<matrix>" . "\n";
		$z=1;
		$s = $s . "</matrix>";
		for($i=0;$i<$m1;$i++)
		{
			$k=1;
			$s = $s . "    <row>\n";
			for($j=0;$j<$n2;$j++)
			{
				$zaok= round($sparseout[$i][$j],3);
				$s = $s . "        <column>" . "$zaok";
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
				$s = $s . "<\column>\n";
			}
			$s = $s . "    </row>\n";
			echo "<br>";
		}
		
		echo "<br>";
		$time_end = microtime_float();
		echo $time_end - $time_start;
		echo "<br>";
		$myFile = "testFile.xml";
		$fh = fopen($myFile, 'w') or die("can't open file");
		//$stringData = "Bobby Bopper\n";
		fwrite($fh, $s);
		///$stringData = "Tracy Tanner\n";
		//fwrite($fh, $stringData);
		fclose($fh);
		
		//echo $s;
	}

}
elseif($inverses=="A^T^-1")
{
	echo "<br>";
	echo '<span class="style1">Matrica A^T^-1 je</span>';
	echo "<br>";
	echo "<br>";
	$resenjeT=transMat($matrixa, $m1, $n1);
	$resenje=Grevile($resenjeT,$n1,$m1);
	$z=0;
	for($i=0;$i<$n1;$i++)
	{
		for($j=0;$j<$m1;$j++,$z++)
		{
			$zaok=round($resenje[$z],3);
			echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  readonly=\"readonly\"> ";
			echo "&nbsp;&nbsp;&nbsp;";
		}
		echo "<br>";
	}
}
elseif($inverses=="B^T^-1")
{
	echo "<br>";
	echo '<span class="style1">Matrica B^T^-1 je</span>';
	echo "<br>";
	echo "<br>";
	$resenjeT=transMat($matrixb, $m2, $n2);
	$resenje=Grevile($resenjeT,$n2,$m2);
	$z=0;
	for($i=0;$i<$n2;$i++)
	{
		for($j=0;$j<$m2;$j++,$z++)
		{
			$zaok=round($resenje[$z],3);
			echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  readonly=\"readonly\"> ";
			echo "&nbsp;&nbsp;&nbsp;";
		}
		echo "<br>";
	}
}
elseif($inverses=="(A^-1)^-1")
{
	$query3 = "select * from MATRICES_OUT where KLJUCA='$kljucA' and OPERATION='$inverses'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica (A^-1)^-1je</span>';
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
		//$sparse6=MatTransS($sparse5);
		$sparseout2=makearr($sparse5);
		
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
		$resenje = GrevileG($resenje,$m1,$n1);
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
		echo '<span class="style1">Matrica (A^-1)^-1 je</span>';
		echo "<br>";
		echo "<br>";
		//$sparse6=MatTransS($resenje);
		$sparseout=makearr($resenje);

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
}
elseif($inverses=="(B^-1)^-1")
{
	$query3 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$inverses'";
	$result3 = mysql_query($query3);
	$row3 = mysql_fetch_array($result3);
	if($row3[1]!=NULL)
	{
	//ima resenje prikazi ga iz baze
		echo "<br>";
		echo '<span class="style1">Matrica (B^-1)^-1 je</span>';
		echo "<br>";
		echo "<br>";
		for($i=1;$i<=3;$i++)
		{
			$query4 = "select * from MATRICES_OUT where KLJUCB='$kljucB' and OPERATION='$inverses' and ROW='$i'";
			$result4 = mysql_query($query4);
			$row4 = mysql_fetch_array($result4);
			$podeljen2[$i-1]=explode(",",$row4[1]);
		}
		$granica2=sizeof($podeljen2[0]);
		$sparse2=array();
		for($i=0;$i<$granica2;$i++)
		{
			$sparse2[$i][0]=$podeljen2[0][$i];
			$sparse2[$i][1]=$podeljen2[1][$i];
			$sparse2[$i][2]=$podeljen2[2][$i];
		}
		//$sparse6=MatTransS($sparse2);
		$sparseout=makearr($sparse2);

		for($i=0;$i<$n2;$i++)
		{
			for($j=0;$j<$m2;$j++)
			{
				$zaok= round($sparseout[$j][$i],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
	else
	{
	//echo "nema resenje izracunaj, unesi u bazu i prikazi";
		$resenje = GrevileG($sparse2,$m2,$n2);
		$resenje = GrevileG($resenje,$m2,$n2);
		$prvi[0]=Column($resenje,0);
		$prvi[1]=Column($resenje,1);
		$prvi[2]=Column($resenje,2);

		$z=0;
		//napravi string od niza
		$dimenzija = $n2 . "x" . $m2;
		$niz1=implode(",",$resenje);
		$query4 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[0]', '$dimenzija', '$rezaB', '$inverses','1')";
		$result4 = mysql_query($query4, $db_link);
		$query5 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[1]', '$dimenzija', '$rezaB', '$inverses','2')";
		$result5 = mysql_query($query5, $db_link);
		$query6 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCB,OPERATION,ROW) values('$prvi[2]', '$dimenzija', '$rezaB', '$inverses','3')";
		$result6 = mysql_query($query6, $db_link);

		echo "<br>";
		echo '<span class="style1">Matrica (B^-1)^-1 je</span>';
		echo "<br>";
		echo "<br>";
		//$sparse6=MatTransS($resenje);
		$sparseout=makearr($resenje);

		for($i=0;$i<$n2;$i++)
		{
			for($j=0;$j<$m2;$j++)
			{
				$zaok= round($sparseout[$j][$i],3);
				echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
				echo "&nbsp;&nbsp;&nbsp;";
			}
			echo "<br>";
		}

	}
}

/*elseif($inverses==" A^p^-1 ")
elseif($inverses==" B^q^-1 ")
elseif($inverses==" (A^p . B^q)^-1 ")
*/
// grevil
if($grevile=="gA")
{
	echo "<br>";
	echo '<span class="style1">Matrica Grevile A je</span>';
	echo "<br>";
	echo "<br>";
	if($userfile_name!=NULL)
	{
		$m1=$t;
		$n1=$z;
	}
	$resenje=Grevile($matrixa, $m1, $n1);
	$z=0;
	for($i=0;$i<$n1;$i++)
	{
		for($j=0;$j<$m1;$j++,$z++)
		{
			$zaok=round($resenje[$z],3);
			echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  readonly=\"readonly\"> ";
			echo "&nbsp;&nbsp;&nbsp;";
		}
		echo "<br>";
	}
}
elseif($grevile=="gB")
{
	echo "<br>";
	echo '<span class="style1">Matrica Grevile B je</span>';
	echo "<br>";
	echo "<br>";
	if($userfile2_name!=NULL)
	{
		$m2=$t2;
		$n2=$p2;
	}
	$z=0;
	$resenje=Grevile($matrixb, $m2, $n2);
	for($i=0;$i<$n2;$i++)
	{
		for($j=0;$j<$m2;$j++,$z++)
		{
			$za=round($resenje[$z],3);
			echo "<input name=clanovi[] type=text size=\"4\" maxlength=\"5\" value=\"$za\"  readonly=\"readonly\"> ";
			echo "&nbsp;&nbsp;&nbsp;";
		}
		echo "<br>";
	}
}
/*
//determinante
if($determinants=="det[A]")
elseif($determinants=="det[A^-1]")
elseif($determinants=="det[A^p]")
elseif($determinants=="det[B]")
elseif($determinants=="det[B^-1]")
elseif($determinants=="det[B^q]")
elseif($determinants=="det[A.B]")
elseif($determinants=="det[B.A]")
elseif($determinants=="det[A^p.B^q]")
elseif($determinants=="det[B^q.A^p]")
elseif($determinants=="det[A^T]")
elseif($determinants=="det[B^T]")
elseif($determinants=="det[A^-1.B.A]")
elseif($determinants=="det[A^-1.B^q.A]")
*/
echo "<br>";
$time_end = microtime_float();
echo $time_start;
echo "<br>";
echo $time_end;
echo "<br>";
echo $time_end - $time_start;
?>
                  </div>                    </td>
                </tr>
              </table>
                <p align="left"><br>
                  <br>
                  <br>
                    <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                      <br>
                </p>
                  <div align="left">
                    <table width=100% border=0 align="center">
                    <tr>
                      <td height="38" align=left valign=top><table width="100" align="center">
                        <tr>
                          <td width="4%" class="style22"><div align="right" class="style25">r&nbsp;=&nbsp;</div></td>
                              <td width="10%"><div align="left" class="style20">
                                <input name="r" type="text" class="style22" id="r" size="5"/>
                                </div></td>
                              <td width="4%" class="style22"><div align="right" class="style25">s&nbsp;=&nbsp;</div></td>
                              <td width="10%"><div align="left" class="style20">
                                <input name="s" type="text" class="style22" id="s" size="5"/>
                                </div></td>
                              <td width="4%" class="style22"><div align="right" class="style25">p&nbsp;=&nbsp;</div></td>
                              <td width="10%"><div align="left" class="style20">
                                <input name="p" type="text" class="style22" id="p" size="5" />
                                </div></td>
                              <td width="4%" class="style22"><div align="right" class="style25">q&nbsp;=&nbsp;</div></td>
                              <td width="10%"><div align="left" class="style20">
                                <input name="q" type="text" class="style22" id="q" size="5" />
                                </div></td>
                              <td width="44%" colspan="2" class="style22">&nbsp;</td>
                            </tr>
                        <tr>
                          <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td colspan="2" class="style22">&nbsp;</td>
                            </tr>
                        <tr>
                          <td colspan="10"><table width="100">
                            <tr>
                              <td height="31"><div align="left">
                                  <select name="arithmetic" class="style21" id="arithmetic">
                                    <option selected>arithmetic</option>
                                    <option value="sum">A + B</option>
                                    <option value="A-B">A - B</option>
                                    <option value="B-A">B - A</option>
                                    <option value="noop"> </option>
                                    <option value="rA"> r A </option>
                                    <option value="sB"> s B </option>
                                    <option value="rAsumsB"> r A + s B </option>
                                  </select>
                              </div></td>
                              <td><div align="left">
                                  <select name="powersa" class="style21" id="powersa">
                                    <option selected="selected">powers of A</option>
                                    <option value="A^4.A"> A^4 . A </option>
                                    <option value="A^3.A"> A^3 . A </option>
                                    <option value="A^2.A"> A^2 . A </option>
                                    <option value="A.A"> A . A </option>
                                    <option value="I.A"> I . A </option>
                                    <option value="A^-1.A"> A^-1 . A </option>
                                    <option value="noop"> </option>
                                    <option value="A^p.A^q"> A^p . A^q </option>
                                    <option value="noop"> </option>
                                    <option value="A.A^-1"> A . A^-1 </option>
                                    <option value="I.A^-1"> I . A^-1 </option>
                                    <option value="A^-1.A^-1"> A^-1 . A^-1 </option>
                                    <option value="A^-2.A^-1"> A^-2 . A^-1 </option>
                                    <option value="A^-3.A^-1"> A^-3 . A^-1 </option>
                                    <option value="A^-4.A^-1"> A^-4 . A^-1 </option>
                                  </select>
                              </div></td>
                              <td><div align="left">
                                  <div align="left">
                                    <select name="powersb" class="style21" id="powersb">
                                      <option selected="selected">powers of B</option>
                                      <option value="B^4.B"> B^4 . B </option>
                                      <option value="B^3.B"> B^3 . B </option>
                                      <option value="B^2.B"> B^2 . B </option>
                                      <option value="B.B"> B . B </option>
                                      <option value="I.B"> I . B </option>
                                      <option value="B^-1.B"> B^-1 . B </option>
                                      <option value="noop"> </option>
                                      <option value="B^p.B^q"> B^p . B^q </option>
                                      <option value="noop"> </option>
                                      <option value="B.B^-1"> B . B^-1 </option>
                                      <option value="I.B^-1"> I . B^-1 </option>
                                      <option value="B^-1.B^-1"> B^-1 . B^-1 </option>
                                      <option value="B^-2.B^-1"> B^-2 . B^-1 </option>
                                      <option value="B^-3.B^-1"> B^-3 . B^-1 </option>
                                      <option value="B^-4.B^-1"> B^-4 . B^-1 </option>
                                    </select>
                                  </div>
                              </div></td>
                              <td><div align="left">
                                  <select name="products" class="style21" id="products">
                                    <option selected="selected">matrix products</option>
                                    <option value="A.B">A . B</option>
                                    <option value="B.A">B . A</option>
                                    <option value="noop"> </option>
                                    <option value="B^-1.A^-1"> B^-1 . A^-1 </option>
                                    <option value="A^-1.B^-1"> A^-1 . B^-1 </option>
                                    <option value="noop"> </option>
                                    <option value="A^-1.B"> A^-1 . B </option>
                                    <option value="A.B^-1"> A . B^-1 </option>
                                    <option value="noop"> </option>
                                    <option value="B.A^-1"> B . A^-1 </option>
                                    <option value="B^-1.A"> B^-1 . A </option>
                                    <option value="noop"> </option>
                                    <option value="A^p.B^q"> A^p . B^q </option>
                                    <option value="B^q.A^p"> B^q . A^p </option>
                                  </select>
                              </div></td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="5"><div align="left"></div></td>
                                  </tr>
                            <tr>
                              <td><div align="left">
                                <select name="transpose" class="style21" id="transpose">
                                  <option selected="selected">transpose</option>
                                  <option value=" A^T "> A^T </option>
                                  <option value=" B^T "> B^T </option>
                                  <option value="noop"> </option>
                                  <option value=" (A . B)^T "> (A . B)^T </option>
                                  <option value=" (B . A)^T "> (B . A)^T </option>
                                  <option value="noop"> </option>
                                  <option value=" B^T . A^T "> B^T . A^T </option>
                                  <option value=" A^T . B^T "> A^T . B^T </option>
                                  </select>
                                </div></td>
                                    <td><div align="left">
                                      <select name="determinants" class="style21" id="determinants">
                                        <option selected="selected">determinants</option>
                                        <option value=" det[A] "> det[A] </option>
                                        <option value=" det[A^-1] "> det[A^-1] </option>
                                        <option value=" det[A^p] "> det[A^p] </option>
                                        <option value="noop"> </option>
                                        <option value=" det[B] "> det[B] </option>
                                        <option value=" det[B^-1] "> det[B^-1] </option>
                                        <option value=" det[B^q] "> det[B^q] </option>
                                        <option value="noop"> </option>
                                        <option value=" det[A . B] "> det[A . B] </option>
                                        <option value=" det[B . A] "> det[B . A] </option>
                                        <option value="noop"> </option>
                                        <option value=" det[A^p . B^q] "> det[A^p . B^q] </option>
                                        <option value=" det[B^q . A^p] "> det[B^q . A^p] </option>
                                        <option value="noop"> </option>
                                        <option value=" det[A^T] "> det[A^T] </option>
                                        <option value=" det[B^T] "> det[B^T] </option>
                                        <option value="noop"> </option>
                                        <option value=" det[A^-1 . B . A] "> det[A^-1 . B . A] </option>
                                        <option value=" det[A^-1 . B^q . A] "> det[A^-1 . B^q . A] </option>
                                        </select>
                                      </div></td>
                                    <td><div align="left">
                                      <select name="inverses" class="style21" id="inverses">
                                        <option selected="selected">inverses</option>
                                        <option value=" A^-1 "> A^-1 </option>
                                        <option value=" B^-1 "> B^-1 </option>
                                        <option value="noop"> </option>
                                        <option value=" (A . B)^-1 "> (A . B)^-1 </option>
                                        <option value=" (B . A)^-1 "> (B . A)^-1 </option>
                                        <option value="noop"> </option>
                                        <option value=" A^T^-1 "> (A^T)^-1 </option>
                                        <option value=" B^T^-1 "> (B^T)^-1 </option>
                                        <option value="noop"> </option>
                                        <option value=" (A^-1)^-1 "> (A^-1)^-1 </option>
                                        <option value=" (B^-1)^-1 "> (B^-1)^-1 </option>
                                        <option value="noop"> </option>
                                        <option value=" A^p^-1 "> (A^p)^-1 </option>
                                        <option value=" B^q^-1 "> (B^q)^-1 </option>
                                        <option value="noop"> </option>
                                        <option value=" (A^p . B^q)^-1 "> (A^p . B^q)^-1 </option>
                                        </select>
                                      </div></td>
                                    <td><div align="left"></div></td>
                                    <td><div align="left"></div></td>
                                  </tr>
                            <tr>
                              <td colspan="5"><div align="left"></div></td>
                                  </tr>
                            <tr>
                              <td colspan="5"><div align="left"></div></td>
                                  </tr>
                            </table></td>
                            </tr>
                        </table></td>
                      </tr>
                  </table>
                    <table width=581 border=0 align="center">
                      <tr>
                        <td align=left valign=top><div align="center">
                            <p><span class="style2">&nbsp;&nbsp;<span class="style17"><span class="style6">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span></span><span class="style6"><A HREF="#">FAQs</A>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp; <A HREF="#">legal</A>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp; <A HREF="kontakt/mailform.php">email us</A>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp; <A HREF="sparse.php">sparse</A>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> <span class="style6"><A HREF="dense.php">dense</A>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>&nbsp;<BR>
                                  <br>
                                  <span class="style18"><span class="style32"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright &reg; 2009 Selver H. Pepic  Inc. All rights reserved&nbsp;</span>&nbsp;</span><span class="style19">&nbsp;&nbsp;&nbsp;</span></span></p>
                        </div></td>
                      </tr>
                    </table>
                    <p>&nbsp;</p>
                  </div></td>
            </tr>
          </table></td>
        </tr>
      </table>
      </form>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
</BODY>
</HTML>
