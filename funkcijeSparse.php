<?php
// make sparse form
function sparse($ArrayDataMatriz1){
	$filas1 = count($ArrayDataMatriz1);
	$columnas1 = count ($ArrayDataMatriz1[0]);
	for($i=0, $z=0; $i<$filas1; $i++) {   
		for($j=0; $j<$columnas1; $j++){
			if($ArrayDataMatriz1[$i][$j]!=0){
				$ArrayDataSparse[$z][0]= $i;
				$ArrayDataSparse[$z][1]= $j;
				$ArrayDataSparse[$z][2]= $ArrayDataMatriz1[$i][$j];
				$z++;
			}
		}
	}
	return $ArrayDataSparse;
}

function MaxDim($ArrayDataSparse,$columnas){
	for($i=0;$i<sizeof($ArrayDataSparse);$i++){
		$ArrayDataMatriz2[$i]=$ArrayDataSparse[$i][$columnas-1];
	}
	if($ArrayDataSparse!=NULL)
	$maximum=max($ArrayDataMatriz2);
	else
	$maximum=0;
	return $maximum;
}

function ithCSparse($ArrayDataSparse,$k){
	$k=$k-1;
	for($i=1,$z=0;$i<=sizeof($ArrayDataSparse);$i++){
		if($ArrayDataSparse[$i-1][1]==$k){
			$ArrayDataSparseout[$z][0]=$ArrayDataSparse[$i-1][0];
			$ArrayDataSparseout[$z][1]=0;
			$ArrayDataSparseout[$z][2]=$ArrayDataSparse[$i-1][2];
			$z++;
		}
	}
	$s=isZeroN($ArrayDataSparseout);
	if($s!=0)
		$ArrayDataSparseout=array_values($ArrayDataSparseout);
	return $ArrayDataSparseout;
}

function ithColumnSparse($ArrayDataSparse,$k){
	$k=$k-1;
	for($i=1;$i<=sizeof($ArrayDataSparse);$i++){
		if($ArrayDataSparse[$i-1][1]==$k){
			$ArrayDataSparseout[$i-1][0]=$ArrayDataSparse[$i-1][0];
			$ArrayDataSparseout[$i-1][1]=$ArrayDataSparse[$i-1][1];
			$ArrayDataSparseout[$i-1][2]=$ArrayDataSparse[$i-1][2];
		}
	}
	$s=isZeroN($ArrayDataSparseout);
	if($s!=0){
		$ArrayDataSparseout=array_values($ArrayDataSparseout);
	}
	return $ArrayDataSparseout;
}

function frstiColumnSparse($ArrayDataSparse,$k){
	$k=$k-1;
	for($i=1,$z=0;$i<=sizeof($ArrayDataSparse);$i++){
		if($ArrayDataSparse[$i-1][1]<=$k){
			$ArrayDataSparseout[$z][0]=$ArrayDataSparse[$i-1][0];
			$ArrayDataSparseout[$z][1]=$ArrayDataSparse[$i-1][1];
			$ArrayDataSparseout[$z][2]=$ArrayDataSparse[$i-1][2];
			$z++;
		}
	}
	//$sparseout=array_values($sparseout);
	return $ArrayDataSparseout;
}

function isZeroN($sparse){	
	$granica=sizeof($sparse);
	$suma=0;
	for($i=0;$i<$granica;$i++){
		$suma=$suma+abs(round($sparse[$i][2],3));
	}
	return $suma;
}

function InPos($ArrayDataSparse,$k,$r){
	$find=TRUE;
	$i=0;
	while($find){
		if(($ArrayDataSparse[$i][0]==$k) and ($ArrayDataSparse[$i][1]==$r)){
			$result=$ArrayDataSparse[$i][2];
			$find=FALSE;
		}
		if($i==sizeof($ArrayDataSparse)){
			$find=FALSE;
		}
		$i++;
	}
	return $result;
}

function MultiplicacionMatrices($ArrayDataSparse1,$ArrayDataSparse2){
	if($ArrayDataSparse1==NULL){
		$m1=0; $n1=0;
	}
	else{
		$m1=MaxDim($ArrayDataSparse1,1); $n1=MaxDim($ArrayDataSparse1,2);
	}
	if($ArrayDataSparse2==NULL){
		$m2=0; $n2=0;
	}
	else{
		$m2=MaxDim($ArrayDataSparse2,1); $n2=MaxDim($ArrayDataSparse2,2);
	}
	$m=max($m1,$m2);
	$n=max($n1,$n2);
	$mn=max($m,$n);
	$z=0;
	for($i=1;$i<=$m+1; $i++){
		for($j=1; $j<=$n+1; $j++){
			$ArrayMultipli[$i-1][$j-1]=0; $sum=0;
			for($M=0;$M<=$n;$M++){
				$ArrayMultipli[$i-1][$j-1]=$ArrayMultipli[$i-1][$j-1]+InPos($ArrayDataSparse1,$i-1,$M)*InPos($ArrayDataSparse2,$M,$j-1);
			}
			if($ArrayMultipli[$i-1][$j-1]!=0){
				$ArrayMultipliSparse[$z][0]=$i-1;
				$ArrayMultipliSparse[$z][1]=$j-1;
				$ArrayMultipliSparse[$z][2]=$ArrayMultipli[$i-1][$j-1];
				$z++;
			}
		}
	}
	return $ArrayMultipliSparse;
}

function MultSkS($ArrayDataSparse,$k){
	for($i=0;$i<sizeof($ArrayDataSparse);$i++){
		$ArrayDataSparse2[$i][0]=$ArrayDataSparse[$i][0];
		$ArrayDataSparse2[$i][1]=$ArrayDataSparse[$i][1];
		$ArrayDataSparse2[$i][2]=$k*$ArrayDataSparse[$i][2];
	}
	return $ArrayDataSparse2;
}

function SubMatrices($ArrayDataSparse1,$ArrayDataSparse2){
	if($ArrayDataSparse1==NULL){
		$m1=0; $n1=0;
	}
	else{
		$m1=MaxDim($ArrayDataSparse1,1); $n1=MaxDim($ArrayDataSparse1,2);
	}
	if($ArrayDataSparse2==NULL){
		$m2=0; $n2=0;
	}
	else{
		$m2=MaxDim($ArrayDataSparse2,1); $n2=MaxDim($ArrayDataSparse2,2);
	}
	$m=max($m1,$m2);
	$n=max($n1,$n2);
	$mn=max($m,$n);
	$z=0;
	for($i=1;$i<=$m+1;$i++){
		for($j=1;$j<=$n+1;$j++){
			if(InPos($ArrayDataSparse1,$i-1,$j-1)-InPos($ArrayDataSparse2,$i-1,$j-1)!=0){
				$ArraySubSparse[$z][0]=$i-1;
				$ArraySubSparse[$z][1]=$j-1;
				$ArraySubSparse[$z][2]=InPos($ArrayDataSparse1,$i-1,$j-1)-InPos($ArrayDataSparse2,$i-1,$j-1);
				$z++;
			}
		}
	}
	return $ArraySubSparse;
}

function AddMatrices($ArrayDataSparse1,$ArrayDataSparse2){
	if($ArrayDataSparse1==NULL){
		$m1=0; $n1=0;
	}
	else{
		$m1=MaxDim($ArrayDataSparse1,1); $n1=MaxDim($ArrayDataSparse1,2);
	}
	if($ArrayDataSparse2==NULL){
		$m2=0; $n2=0;
	}
	else{
		$m2=MaxDim($ArrayDataSparse2,1); $n2=MaxDim($ArrayDataSparse2,2);
	}
	$m=max($m1,$m2);
	$n=max($n1,$n2);
	$mn=max($m,$n);
	$z=0;
	for($i=1;$i<=$m+1;$i++){
		for($j=1;$j<=$n+1;$j++){
			if(InPos($ArrayDataSparse1,$i-1,$j-1)+InPos($ArrayDataSparse2,$i-1,$j-1)!=0){
				$ArraySubSparse[$z][0]=$i-1;
				$ArraySubSparse[$z][1]=$j-1;
				$ArraySubSparse[$z][2]=InPos($ArrayDataSparse1,$i-1,$j-1)+InPos($ArrayDataSparse2,$i-1,$j-1);
				$z++;
			}
		}
	}
	return $ArraySubSparse;
}

function MatTransS($ArrayDataSparse)
{
	for($i=1;$i<=sizeof($ArrayDataSparse);$i++){
		$t=$ArrayDataSparse[$i-1][0];
		$ArrayDataSparse[$i-1][0]=$ArrayDataSparse[$i-1][1];
		$ArrayDataSparse[$i-1][1]=$t;
	}
	return $ArrayDataSparse;
}

function appRowS($ArrayDataSparse1,$n,$ArrayDataSparse2){
	$y=MaxDim($ArrayDataSparse1,1);
	$dim1=sizeof($ArrayDataSparse1);
	$dim2=sizeof($ArrayDataSparse2);
	$dim=$dim1+$dim2;
	for($i=$dim1,$j=0;$i<$dim;$i++,$j++){
		$ArrayDataSparse1[$i][0]=$n;
		$ArrayDataSparse1[$i][1]=$ArrayDataSparse2[$j][1];
		$ArrayDataSparse1[$i][2]=$ArrayDataSparse2[$j][2];
	}
	$novaMatrica=$ArrayDataSparse1;
	//$novaMatrica=array_values($novaMatrica);
	return $novaMatrica;
}
function ithColumnS($niz,$k)
{
	$z=0;
	$k=$k-1;
	for($i=1;$i<=sizeof($niz);$i++)
	{
		if($niz[$i-1][1]==$k)
		{
			$niz2[$niz[$i-1][0]]=$niz[$i-1][2];
		}
	}
	return $niz2;
}
// iti red sparse matrice (samo element aij)
function ithRowS($niz,$k)
{
	$k=$k-1;
	//$r=MaxDim($niz,1);
	for($i=1;$i<=sizeof($niz);$i++)
	{
		if($niz[$i-1][0]==$k)
		{
			$niz2[$niz[$i-1][1]]=$niz[$i-1][2];
		}
	}
	return $niz2;
}

function multSparse($sparse1,$sparse2){
	if($sparse1==NULL){
		$r1=0;
		$r4=0;
	}
	else{
		$r1=MaxDim($sparse1,1);
		$r4=MaxDim($sparse1,2);
	}
	if($sparse2==NULL){
		$r2=0;
		$r5=0;
	}
	else{
		$r2=MaxDim($sparse2,1);
		$r5=MaxDim($sparse2,2);
	}
	$r3=max($r1,$r2);
	$r6=max($r4,$r5);
	$r7=max($r3,$r6);
	$proizvod=0;
	$z=0;
	for($i=1;$i<=$r3+1;$i++){
		$pom1=ithRowS($sparse1,$i);
		for($j=1;$j<=$r6+1;$j++){
			$proizvod=0;
			$pom2=ithColumnS($sparse2,$j);
			for($k=0;$k<=$r7+1;$k++){
				$proizvod=$proizvod+$pom1[$k]*$pom2[$k];
				$p=$proizvod;
			}
			if($p!=0){
				//$proizvodM[$i-1][$j-1]=$p;
				$nizdva[$z][0]=$i-1;
				$nizdva[$z][1]=$j-1;
				$nizdva[$z][2]=$p;
				$z++;
			}
		}
	}
	return $nizdva;
}

function GrevileG($sparse){
	$m1=MaxDim($sparse,1); $n1=MaxDim($sparse,2);
	$m2=MaxDim($sparse,1); $n2=MaxDim($sparse,2);	
	$m=max($m1,$m2);
	$n=max($n1,$n2);
	$n=max($n,$m)+1;
// step 1
	$AA= ithColumnSparse($sparse,1);
	if(isZeroN($AA)==0) 
	$AR=MatTransS($AA);
	else{
		$TA=MatTransS($AA);
		$AR=multSparse($TA,$AA);
		$pom=$AR[0][2];
		$AR=MultSkS($TA,1/$pom);
	}
	for($i=2;$i<=$n;$i++){
// step 2.1
		$OO=ithCSparse($sparse,$i);
		$DD=multSparse($AR,$OO);

// step 2.2
		$FC=frstiColumnSparse($sparse,$i-1);
		$MM=multSparse($FC,$DD);
		if($MM!=NULL){
			$CC=SubMatrices($OO,$MM);
		}
		else
		$CC=$OO;
// step 2.3
		if(isZeroN($CC)==0){
			$TDD=MatTransS($DD);
			$P=multSparse($TDD,$DD);
			$pom=1+$P[0][2];
			$TM=MatTransS($AR);
			$x=multSparse($TM,$DD);
			$BB=MultSkS($x,1/$pom);
		}
		else{
			$r=MatTransS($CC);
			$P=multSparse($r,$CC);
			$pom=$P[0][2];
			$BB=MultSkS($CC,1/$pom);
		}
// step 2
		$EE=MatTransS($BB);
		$QW=multSparse($DD,$EE);
		if($QW!=null){
			$AR=SubMatrices($AR,$QW);
		}
		$TBB=MatTransS($BB);
	    $AR=appRowS($AR,$i-1,$TBB);
	}
	$Grevile=$AR;
	return $Grevile;
}

function makearr($sparse){
	for($i=0;$i<sizeof($sparse);$i++){
		$niz[$sparse[$i][0]][$sparse[$i][1]]=$sparse[$i][2];
	}
	//$niz=array_values($niz);
	return $niz;
}

/*
function GrevileG($sparse,$m,$n)
{

// step 1
	$AA= ithColumnSparse($sparse,1);
	if(isZeroN($AA)==0) 
	$AR=MatTransS($AA);
	else
	{
		$TA=MatTransS($AA);
		$AR=multSparse($TA,$AA);
		$pom=$AR[0][2];
		$AR=MultSkS($TA,1/$pom);
	}
	for($i=2;$i<=$n;$i++)
	{
// step 2.1
		$OO=ithCSparse($sparse,$i);
		$DD=multSparse($AR,$OO);

// step 2.2
		$FC=frstiColumnSparse($sparse,$i-1);
		$MM=multSparse($FC,$DD);
		if($MM!=NULL)
		{
			$CC=subSparse($OO,$MM);
		}
		else
		$CC=$OO;
		
// step 2.3
		if(isZeroN($CC)==0)
		{
			$TDD=MatTransS($DD);
			$P=multSparse($TDD,$DD);
			$pom=1+$P[0][2];
			$TM=MatTransS($AR);
			$x=multSparse($TM,$DD);
			$BB=MultSkS($x,1/$pom);
		}
		else
		{
			$r=MatTransS($CC);
			$P=multSparse($r,$CC);
			$pom=$P[0][2];
			$BB=MultSkS($CC,1/$pom);
		}
	
// step 2
		$EE=MatTransS($BB);
		$QW=multSparse($DD,$EE);
		if($QW!=null)
		{
			$AR=subSparse($AR,$QW);
		}
		$TBB=MatTransS($BB);
	    $AR=appRowS($AR,$i-1,$TBB);
	}
	$Grevile=$AR;
	return $Grevile;
}

*/
/*
$niz1=array(array(1,2,0,0),
		   array(2,1,0,0),
		   array(0,0,0,1));
$niz2=array(array(1,0,0,0),
		   array(0,0,1,0),
		   array(0,0,0,0));
$sparse1=sparse($niz1);
$sparse2=sparse($niz2);
//$p=ColumnN($sparse1,1);
//print_r($sparse1);
$nizSP1=array(array(1,2,3,0,0,0,0,0,0,0),
		     array(0,2,0,0,0,0,0,0,0,0),
		     array(1,0,0,4,0,0,0,0,0,0),
			 array(0,0,0,0,0,0,0,0,0,0),
			 array(0,4,0,0,0,8,0,0,0,0),
			 array(0,0,0,0,0,0,0,0,0,0),
			 array(0,0,13,0,0,0,0,0,0,0),
			 array(5,0,0,0,0,0,2,0,0,0),
			 array(0,0,0,0,0,0,0,0,0,0),
			 array(0,0,0,0,0,0,0,0,0,0));
$niz10=array(array(1,2,3,0,0,0,0,0,0,0),
			  array(0,2,0,0,0,0,0,0,0,0),
			  array(1,0,0,4,0,0,0,0,0,0),
			  array(0,0,0,0,0,0,0,0,0,0),
			  array(0,4,0,0,0,8,0,0,0,0),
			  array(0,0,0,0,0,0,0,0,0,0),
			  array(0,0,0,0,0,0,0,0,0,0),
			  array(0,0,0,0,0,0,0,0,0,0),
			  array(0,0,0,0,0,0,2,0,0,0),
			  array(0,0,0,0,0,0,0,9,9,9));
$niz10=array(array(1,2,0),
		   array(2,1,0),
		   array(0,0,1));
$s=MaxDim($sparse1,1);
$niz1=array(array(1,2,0),
		   array(2,1,0),
		   array(0,0,0),
		   array(0,0,1));
$niz2=array(array(1,0,0),
		   array(0,0,0),
		   array(0,0,0),
		   array(0,1,0));
$sparse1=sparse($niz1);
$sparse2=sparse($niz2);
$nizSP=array(array(1,2,3,0,0,0,0,0,0,0),
		     array(0,2,0,0,0,0,0,0,0,0),
		     array(1,0,0,4,0,0,0,0,0,0),
			 array(0,0,0,0,0,0,0,0,0,0),
			 array(0,4,0,0,0,8,0,0,0,0),
			 array(0,0,0,0,0,0,0,0,0,0),
			 array(0,0,0,0,0,0,0,0,0,0),
			 array(0,0,0,0,0,0,0,0,0,0),
			 array(0,0,0,0,0,0,2,0,0,0),
			 array(0,0,0,0,0,0,0,9,9,9));

$m=10;
$n=10;
$sparse15=sparse($nizSP);
$inverz=GrevileG($sparse15,$m,$n);
//print_r($inverz);
//$proizvod = multSparse($sparse1,$sparse2);
$proizvod2 = MultiplicacionMatrices($sparse1,$sparse2);
//$proizvod2 = MultiplicacionMatrices2($niz10,$niz10);
//print_r($proizvod);
echo "<br>";
echo "<br>";
//print_r($proizvod2);
$selver=InPos($sparse1,6,6);
//echo $selver;
echo "<br>";
echo "<br>";
//print_r(MultSkS($sparse1,2));
echo "<br>";
echo "<br>";
$n=3;
$oduzimanje= GrevileG($sparse1);
$r=ithColumnSparse($sparse1,1);
print_r($oduzimanje);
//echo $proizvod2;
//echo $s;
//echo max($sparse1[0]);
	*/
?>