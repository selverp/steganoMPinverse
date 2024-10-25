<?php
ob_start();
?>
<?php
include "common.inc";	
include "funkcijeDvodim.php";
include "funkcijeStorage.php";
ini_set(max_execution_time, "900");
// moze i set_time_limit (700)
$db_link = db_connect();
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
.style17 {font-size: 12px; font-weight: bold; }
.style18 {	color: #999999;
	font-size: 14px;
}
.style19 {color: #999999}
.style29 {font-size: 13px; }
.style6 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
-->
</style>
</HEAD>
<body bgcolor="#FFFFFF" TEXT="#171717" VLINK="#EA6A13" ALINK="#EA6A13" LINK="#C73100">
<table width="<?php
if($t*7<100)
$procenat = 100;
else
$procenat = $t*8;
echo $procenat . "%";?>" align="center" >
  <tr bgcolor="#FFFFFF">
    <td width="22%" rowspan="3" align="right" valign="top"><p align="right"><a href="index3.php"><img src="images/logoi2.gif" alt="home page" width="185" height="177" border="0"></a></p>
      <table width="190" border="0" align="right">
        
        <tr>
          <td width="204" class="style15">&nbsp;</td>
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
              <div align="left"><span class="style8"><a href="fajlovi">upload file</a></span> </div>
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
          </UL>          </td>
        </tr>
      </table>
    <p>&nbsp;</p></td>
    <td width="1%" rowspan="3" valign="top"><p>&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left"><img src="images/fadeup.gif" width="1" height="92"></p>
    <p align="left"><img src="images/fadedn_bluethin.gif" width="1" height="200"></p></td>
    <td width=77% align=left valign=top><h1 align="left" class="style3"><span class="style35"><span class="style33"><br>
      The Matrix Library</span><br />
    </span></h1>
      <h3 align="left" class="style34">Matrix algebra: matrix product, determinants, <br />
        inverses, pawers of matrices, arithmetic, MP and <br />
    Weighted inverse</h3></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td valign="middle"><img src="images/linel.gif" width="200" height="1"></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td align="left" valign="top"><p class="style3 style5"><br>
      Weighted inverse</p>
      <p align="left">
<?php
//prikaz matrice A iz baze, u napravljene u obliku niza
$matrixad=makeDvodim($idA,$m,$n);

//prikaz matrice M iz baze, u napravljene u obliku niza
$matrixbd=makeDvodim($idB,$m,$m);

//prikaz matrice N iz baze, u napravljene u obliku niza
$matrixcd=makeDvodim($idC,$n,$n);
$time_start = microtime_float();
$Weighted=WeightedInverse($matrixbd,$matrixad,$matrixcd);
$inverse='W';
createXML($m,$n,$idA,$Weighted);
unos_weighted($Weighted,$n,$m,$idA,$idB,$idC,$inverse);
header("Location:vezaweighted.24777.php?m=$m&n=$n&time_start=$time_start&idA=$idA&idB=$idB&idC=$idC");
//print_r($Weighted);
//echo $n;
?>
      </p>    </td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td colspan="3" align="center" valign="middle"><table width=581 border=0 align="center">
      <tr>
        <td align=left valign=top><div align="center">
            <p><span class="style2">&nbsp;&nbsp;<span class="style17"><span class="style6">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span></span><span class="style6"><A HREF="#">FAQs</A>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp; <A HREF="#">legal</A>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp; <A HREF="kontakt/mailform.php">email us</A>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp; <A HREF="sparse.php">sparse</A>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> <span class="style6"><A HREF="dense.php">dense</A>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>&nbsp;<BR>
                  <br>
                  <span class="style18"><span class="style29"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright &reg; 2009 Selver H. Pepic  Inc. All rights reserved&nbsp;</span>&nbsp;</span><span class="style19">&nbsp;&nbsp;&nbsp;</span></span></p>
        </div></td>
      </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
</BODY>
</HTML>
<?php
ob_flush();
?>