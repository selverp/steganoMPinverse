<?php
include "common.inc";	
include "funkcijeDvodim.php";
?>
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
.style5 {
	font-size: 16px;
	font-weight: bold;
}
.style8 {font-size: 12px}
.style10 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #9900CC;
}
.style15 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #0000FF;
	font-weight: bold;
	font-size: 14px;
}
.style33 {font-size: 28px}
.style34 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 20px;
	color: #9900CC;
}
.style35 {font-size: 36px}
-->
</style>

</HEAD>
<body bgcolor="#FFFFFF" TEXT="#171717" VLINK="#EA6A13" ALINK="#EA6A13" LINK="#C73100">
<table width="89%" align="center">
  <tr>
    <td width="20%"><h1 align="right" class="style3"><a href="index3.php"><img src="images/logoi2.gif" alt="home page" width="185" height="177" border="0"></a></h1>    </td>
    <td width="80%"><h1 align="center" class="style3"><span class="style35"><span class="style33">The Matrix Library</span><br />
    </span></h1>
      <h3 align="center" class="style34">Matrix algebra: matrix product, determinants, <br />
        inverses, pawers of matrices, arithmetic, MP and <br />
    Weighted inverse</h3></td>
  </tr>
</table>
<table width="89%" align="center">
  <tr>
    <th scope="row"><?php
ini_set(max_execution_time, "900");
// moze i set_time_limit (700)
$db_link = db_connect();

$m=$t;
$n=$p;
$inverz='W';
$z=0;
$query = "select * from MATRICES_OUT where KLJUCA='$rezaA' and KLJUCB='$rezaB' and KLJUCC='$rezaC' and INVERSE ='$inverz'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
if($row[1]==NULL)	
{
header("Location:vezaweighted.147.php?t=$t&p=$p&time_start=$time_start&rezaA=$rezaA&rezaB=$rezaB&rezaC=$rezaC&jedinicnaA=$jedinicnaA&jedinicnaM=$jedinicnaM&jedinicnaN=$jedinicnaN");
}
else
{	
	$novam=$p;
	$novan=$t;
	$podeljen=explode(",",$row["ELEMENTS"]);
	$matricaW=$podeljen;
	for($i=0;$i<$novam*$novan;$i=$i+$novan)
	{
		for($j=$i;$j<$i+$novan;$j++)
		{
			$zaok = round($matricaW[$j],3);
			echo "<input name=a[] type=text size=\"4\" maxlength=\"5\" value=\"$zaok\"  readonly=\"readonly\"> ";
		}
		echo "<br>";
	}

	echo "<br>";
	$time_end = microtime_float();
	echo $time_end - $time_start;
}
?>
      <table width="190" border="0" align="left">
        
        <tr>
          <td class="style15">&nbsp;</td>
        </tr>
        <tr>
          <td class="style2"><ul>
              <LI><span class="style8"><a href="dense.php">operations of &quot;dense&quot; matrices</a></span>
              <LI><span class="style8"><A HREF="sparse.php">operations of sparce matrices</A> </span>
              <LI><span class="style8"><a href="dense.php">operations of test matrices</a><BR>
                </span>
              <LI><span class="style8"><A HREF="densemp.php">MP Inverse</A></span>
              <LI><span class="style8"><a href="densempel.php">MP Inverse by element</a></span>
              <LI><span class="style8"><A HREF="densew.php">Weighted Inverse</A> </span>
              <LI><span class="style8"><A HREF="densew.php">LM Inverse</A></span>
              <LI><span class="style8"><a href="denseel.php">dense element by element</a></span>
              <LI><a href="sparseel.php" class="style8">sparse element by element</a>
              <LI><a href="sparsemp1.php" class="style8">sparse MP Inverse</a>
              <LI><span class="style8"><a href="fajlovi/">upload file</a></span>
              <LI><a href="testmatrix.php" class="style8">view of uploaded txt file</a>
              <LI><a href="examples3.php" class="style8">test examples</a><a href="primer.php" class="style8"></a><a href="primer.php" class="style8"></a>
          </UL></td>
        </tr>
      </table>
    <div align="left"></div></th>
  </tr>
</table>
<p class="style3 style5">&nbsp;</p>
<div align="left"></div>
<h1 align="left" class="style3">&nbsp;</h1>
<p>&nbsp;</p>
</BODY>
</HTML>
