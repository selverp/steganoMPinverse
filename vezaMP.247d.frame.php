<?php
include "common.inc";
include "funkcijeDvodim.php"; 
include "funkcijeStorage.php";
//include "qwe1.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="autoHeight.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style15 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #0000FF;
	font-weight: bold;
	font-size: 14px;
}
.style2 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style8 {font-size: 12px}
.style3 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #006600;
}
.style33 {font-size: 28px}
.style34 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 20px;
	color: #9900CC;
}
.style35 {font-size: 36px}

-->
</style>
</head>

<body>
<table width="205" align="left">
  <tr>
    <td width="197"><div align="right"><a href="index3.php"><img src="images/logoi2.gif" alt="home page" width="185" height="177" border="0" /></a></div></td>
  </tr>
  <tr>
    <td><table width="190" border="0" align="right">
      <tr>
        <td width="204" class="style15">Chose dense, sparse or Test matrices<br />
            <br /></td>
      </tr>
      <tr>
        <td class="style15">&nbsp;</td>
      </tr>
      <tr>
        <td class="style2"><ul>
            <li><span class="style8"><a href="dense.php">operations of &quot;dense&quot; matrices</a></span> </li>
          <li><span class="style8"><a href="sparse.php">operations of sparce matrices</a> </span> </li>
          <li><span class="style8"><a href="dense.php">operations of test matrices</a><br />
            </span> </li>
          <li><span class="style8"><a href="densemp.php">MP Inverse</a></span> </li>
          <li><span class="style8"><a href="densempel.php">MP Inverse by element</a></span> </li>
          <li><span class="style8"><a href="densew.php">Weighted Inverse</a> </span> </li>
          <li><span class="style8"><a href="densew.php">LM Inverse</a></span> </li>
          <li><span class="style8"><a href="denseel.php">dense element by element</a></span> </li>
          <li><a href="sparseel.php" class="style8">sparse element by element</a> </li>
          <li><a href="sparsemp1.php" class="style8">sparse MP Inverse</a> </li>
          <li><span class="style8"><a href="fajlovi/">upload file</a></span> </li>
          <li><a href="testmatrix.php" class="style8">view of uploaded txt file</a> </li>
          <li><a href="primer.php" class="style8">examples</a> </li>
        </ul></td>
      </tr>
    </table></td>
  </tr>
</table>
<h1 align="center" class="style3"><span class="style35"><span class="style33">The Matrix Library</span><br />
</span></h1>
<h3 align="center" class="style34">Matrix algebra: matrix product, determinants, <br />
  inverses, pawers of matrices, arithmetic, MP and <br />
  Weighted inverse</h3>
<p>

<iframe name="selver" scrolling="auto" class="autoHeight" width="1024" height="500" src="<?php echo "./qwe1.php?t=$t&p=$p&time_start=$time_start&idA=$idA";?>" ></iframe>


</iframe>
  
</p>
<p>&nbsp; </p>
</body>
</html>
