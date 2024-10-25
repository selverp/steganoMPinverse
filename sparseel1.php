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
.style17 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #006600;
	font-weight: bold;
}
.style21 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #FF0000; }
.style26 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #006600;
	font-weight: bold;
}
.style19 {font-size: 12px; font-weight: bold; }
.style18 {	color: #999999;
	font-size: 14px;
}
.style19 {color: #999999}
.style6 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.style20 {font-family: Arial, Helvetica, sans-serif}
.style22 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #9900CC; }
.style25 {font-size: 14px; font-family: Arial, Helvetica, sans-serif;}
.style33 {font-size: 28px}
.style34 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 20px;
	color: #9900CC;
}
.style35 {font-size: 36px}
.style29 {font-size: 13px; }
-->
</style>
</HEAD>
<body bgcolor="#FFFFFF" TEXT="#171717" VLINK="#EA6A13" ALINK="#EA6A13" LINK="#C73100">
<form name="form1" method="post" action="
<? echo "uploadsparseel.php?m1=$m1&n1=$n1&m2=$m2&n2=$n2&r=$r&s=$s&p=$p&q=$q";?>">
  <table width="95%" align="center" >
    <tr bgcolor="#FFFFFF">
      <td width="20%" rowspan="3" align="left" valign="top"><p align="right"><a href="index3.php"><img src="images/logoi2.gif" alt="home page" width="185" height="177" border="0"></a></p>
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
        </table>
      <p>&nbsp;</p></td>
      <td width="1%" rowspan="3" valign="top"><p>&nbsp;</p>
          <p align="left">&nbsp;</p>
          <p align="left"><img src="images/fadeup.gif" width="1" height="92"></p>
      <p align="left"><img src="images/fadedn_bluethin.gif" width="1" height="200"></p></td>
      <td colspan="2" align=left valign=top><h1 align="left" class="style3"><span class="style35"><span class="style33"><br>
        The Matrix Library</span><br>
      </span></h1>
        <h3 align="left" class="style34">Matrix algebra: matrix product, determinants, <br>
      inverses, pawers of matrices, arithmetic, MP and <br>
      Weighted inverse </h3></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td colspan="2" valign="middle"><img src="images/linel.gif" width="200" height="1"></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td colspan="2" align="left" valign="top"><p class="style3 style5"><br>
        Chose operation</p>
         <p> <span class="style17"><? if($m1!=null and $n1!=null) echo "matrix A"; ?></span></p>
        <div align="left">
            <?php

	for($i = 0; $i<$m1; $i++)
	{
		for ($j=0; $j<$n1; $j++)
		{
			echo  "<input name=matrixa[] type=text size=\"3\" maxlength=\"5\"> ";
			echo "&nbsp;&nbsp;&nbsp;";
		}
		echo "<br>";
	
		}
?>
          </div>
        <p><span class="style17"><? if($m2!=null and $n2!=null) echo "matrix B"; ?></span></p>
        <div align="left">
            <?php

	for($i = 0; $i<$m2; $i++)
	{
		for ($j=0; $j<$n2; $j++)
		{
			echo  "<input name=matrixb[] type=text size=\"3\" maxlength=\"5\"> ";
			echo "&nbsp;&nbsp;&nbsp;";
		}
		echo "<br>";
	
		}
?>
          </div>
        <p>&nbsp;</p></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td colspan="4" align="center" valign="middle"><table width="300" align="center">
        <tr>
          <td width="4%" class="style22"><div align="right" class="style25">r&nbsp;=&nbsp;</div></td>
          <td width="10%"><div align="left" class="style20">
              <input name="skalarr" type="text" class="style22" id="skalarr" size="5" readonly/>
          </div></td>
          <td width="4%" class="style22"><div align="right" class="style25">s&nbsp;=&nbsp;</div></td>
          <td width="10%"><div align="left" class="style20">
              <input name="skalars" type="text" class="style22" id="skalars" size="5" readonly/>
          </div></td>
          <td width="4%" class="style22"><div align="right" class="style25">p&nbsp;=&nbsp;</div></td>
          <td width="10%"><div align="left" class="style20">
              <input name="skalarp" type="text" class="style22" id="skalarp" size="5"  readonly/>
          </div></td>
          <td width="4%" class="style22"><div align="right" class="style25">q&nbsp;=&nbsp;</div></td>
          <td width="10%"><div align="left" class="style20">
              <input name="skalarq" type="text" class="style22" id="skalarq" size="5" readonly />
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
          <td colspan="10"><table width="100%">
              <tr>
                <td height="31"><div align="left">
                    <select name="arithmetic" class="style21" id="arithmetic" disabled>
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
                    <select name="powersa" class="style21" id="powersa" disabled>
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
                      <select name="powersb" class="style21" id="powersb" disabled>
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
                    <select name="products" class="style21" id="products" disabled>
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
                    <select name="transpose" class="style21" id="transpose" disabled>
                      <option selected="selected">transpose</option>
                      <option value="A^T"> A^T </option>
                      <option value="B^T"> B^T </option>
                      <option value="noop"> </option>
                      <option value="(A.B)^T"> (A . B)^T </option>
                      <option value="(B.A)^T"> (B . A)^T </option>
                      <option value="noop"> </option>
                      <option value="B^T.A^T"> B^T . A^T </option>
                      <option value="A^T.B^T"> A^T . B^T </option>
                    </select>
                </div></td>
                <td><div align="left">
                    <select name="determinants" class="style21" id="determinants" disabled>
                      <option selected="selected">determinants</option>
                      <option value="det[A]"> det[A] </option>
                      <option value="det[A^-1]"> det[A^-1] </option>
                      <option value="det[A^p]"> det[A^p] </option>
                      <option value="noop"> </option>
                      <option value="det[B]"> det[B] </option>
                      <option value="det[B^-1]"> det[B^-1] </option>
                      <option value="det[B^q]"> det[B^q] </option>
                      <option value="noop"> </option>
                      <option value="det[A.B]"> det[A . B] </option>
                      <option value="det[B.A]"> det[B . A] </option>
                      <option value="noop"> </option>
                      <option value="det[A^p.B^q]"> det[A^p . B^q] </option>
                      <option value="det[B^q.A^p]"> det[B^q . A^p] </option>
                      <option value="noop"> </option>
                      <option value="det[A^T]"> det[A^T] </option>
                      <option value="det[B^T]"> det[B^T] </option>
                      <option value="noop"> </option>
                      <option value="det[A^-1.B.A]"> det[A^-1 . B . A] </option>
                      <option value="det[A^-1.B^q.A]"> det[A^-1 . B^q . A] </option>
                    </select>
                </div></td>
                <td><div align="left">
                    <select name="inverses" class="style21" id="inverses" disabled>
                      <option selected="selected">inverses</option>
                      <option value="A^-1"> A^-1 </option>
                      <option value="B^-1"> B^-1 </option>
                      <option value="noop"> </option>
                      <option value="(A.B)^-1"> (A . B)^-1 </option>
                      <option value="(B.A)^-1"> (B . A)^-1 </option>
                      <option value="noop"> </option>
                      <option value="A^T^-1"> (A^T)^-1 </option>
                      <option value="B^T^-1"> (B^T)^-1 </option>
                      <option value="noop"> </option>
                      <option value="(A^-1)^-1"> (A^-1)^-1 </option>
                      <option value="(B^-1)^-1"> (B^-1)^-1 </option>
                      <option value="noop"> </option>
                      <option value="A^p^-1"> (A^p)^-1 </option>
                      <option value="B^q^-1"> (B^q)^-1 </option>
                      <option value="noop"> </option>
                      <option value="(A^p.B^q)^-1"> (A^p . B^q)^-1 </option>
                    </select>
                </div></td>
                <td>&nbsp;</td>
                <td><div align="left"></div></td>
              </tr>
              <tr>
                <td colspan="5">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="3"><span class="style26">Chose an option from List/Menu and click Calculate!</span></td>
                <td><div align="right">
                    <input name="button" type="submit" class="style26" id="button" value="Calculate! ">
                </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="3">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
          </table></td>
        </tr>
      </table></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td colspan="4" align="center" valign="middle"><table width=581 border=0 align="center">
        <tr>
          <td align=left valign=top><div align="center">
              <p><span class="style2">&nbsp;&nbsp;<span class="style19"><span class="style6">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span></span><span class="style6"><A HREF="#">FAQs</A>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp; <A HREF="#">legal</A>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp; <A HREF="kontakt/mailform.php">email us</A>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp; <A HREF="sparse.php">sparse</A>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> <span class="style6"><A HREF="dense.php">dense</A>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>&nbsp;<BR>
                    <br>
                    <span class="style18"><span class="style29"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright &reg; 2009 Selver H. Pepic  Inc. All rights reserved&nbsp;</span>&nbsp;</span><span class="style19">&nbsp;&nbsp;&nbsp;</span></span></p>
          </div></td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</BODY>
</HTML>
