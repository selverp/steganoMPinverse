<?php
/*
* Clase que contiene operaciones de una matriz
* Fecha de Creación: 30/sept/2005
* Diego Carrera - Kleber Baño
* Guayaquil - Ecuador
*
*/
ini_set(max_execution_time, "700");
ini_set("memory_limit","10000000M");
ini_set('max_input_time',"850000");
//ini_set("memory_limit","10000000M");
//ini_set('max_input_time',"850000");
/*
function multMat($matrica1,$matrica2)
{
	$m1 = count($matrica1);
	$n1 = count ($matrica1[0]);
	$m2 = count($matrica2);
	$n2 = count ($matrica2[0]);	
	$pom1=0;
	$pom2=0;
	$proizvod=0;
	$brojac=0;
	for($i=1;$i<=$m1;$i++)
	{
		$pom1=ithRow($i,$matrica1);
		for($j=1;$j<=$n2;$j++)
		{
			$proizvod=0;
			$pom2=ithCol($j,$matrica2);
			for($k=0;$k<$n1;$k++)
			{
				$proizvod = $proizvod+$pom1[$k]*$pom2[$k];
				$p=$proizvod;
			}
			$proizvodM[$brojac]=$p;
			$brojac++;
		}
	}
	return $proizvodM;
}
*/
//i-ta kolona
	function ithCol($column, $ArrayDataMatriz1){
		$filas1 = count($ArrayDataMatriz1);
		$columnas1 = count ($ArrayDataMatriz1[0]);
		for($i=0; $i<$filas1; $i++) {   
			for($j=0; $j<$columnas1; $j++){
				if($j+1==$column)
				$ArrayCol[$i][0]= $ArrayDataMatriz1[$i][$j];
			}
		}
		return $ArrayCol;
	}	
/*	
//i-ta kolona
	function ithRow($column, $ArrayDataMatriz1){
		$filas1 = count($ArrayDataMatriz1);
		$columnas1 = count ($ArrayDataMatriz1[0]);
		for($i=0; $i<$filas1; $i++) {   
			for($j=0; $j<$columnas1; $j++){
				if($j+1==$column)
				$ArrayCol[$i][0]= $ArrayDataMatriz1[$i][$j];
			}
		}
		return $ArrayCol;
	}
*/		
//frst-i kolona
	function frstiCol($columns, $ArrayDataMatriz1){
		$filas1 = count($ArrayDataMatriz1);
		$columnas1 = count ($ArrayDataMatriz1[0]);
		for($i=0; $i<$filas1; $i++) {   
			for($j=0; $j<$columnas1; $j++){
				if($j+1<=$columns)
				$ArrayCol[$i][$j]= $ArrayDataMatriz1[$i][$j];
			}
		}
		return $ArrayCol;
	}	

//mat Num
	function matNum($ArrayDataMatriz1){
		$filas1 = count($ArrayDataMatriz1);
		$columnas1 = count ($ArrayDataMatriz1[0]);
		if($filas1==1 & $columnas1==1)
		return $ArrayDataMatriz1[0][0];
	}	
	
//is Zero
	function isZero($ArrayDataMatriz1){
		$isZero=0;
		$filas1 = count($ArrayDataMatriz1);
		$columnas1 = count ($ArrayDataMatriz1[0]);
		for($i=0; $i<$filas1; $i++) {   
			for($j=0; $j<$columnas1; $j++){
				if(round($ArrayDataMatriz1[$i][$j],3)!=0)
				$isZero++;
			}
		}
		return $isZero;
	}	

	function appRow($ArrayDataMatriz1, $ArrayDataMatriz2){
		$isZero=0;
		$filas1 = count($ArrayDataMatriz1);
		$columnas2 = count ($ArrayDataMatriz2[0]);
		for($i=0; $i<$columnas2; $i++){
			$ArrayDataMatriz1[$filas1][$i]=$ArrayDataMatriz2[0][$i];
		}
		return $ArrayDataMatriz1;
	}	

	
	function mskalar($ArrayDataMatriz,$k){
		$skalar=$ArrayDataMatriz[$k-1][$k-1];	
		return $skalar;
	}
	
	function mMinus($ArrayDataMatriz,$k){
		for($i=0;$i<$k-1;$i++){
			for($j=0;$j<$k-1;$j++){
				$mMatrica[$i][$j]=$ArrayDataMatriz[$i][$j];
			}
		}
		return $mMatrica;
	}
	
	// m_kolona
	function mColumn($ArrayDataMatriz,$k){
		for($i=0;$i<$k-1;$i++){
			$kolona[$i][0]=$ArrayDataMatriz[$i][$k-1];
		}
		return $kolona;
	}
	
	function microtime_float(){
    	list($usec, $sec) = explode(" ", microtime());
   		 return ((float)$usec + (float)$sec);
	}

	function finaly($ArrayDataMatriz1,$ArrayDataMatriz2){
		$filas = count($ArrayDataMatriz1);
		$columnas = count ($ArrayDataMatriz1[0]);
		$ArrayDataMatrizOut=$ArrayDataMatriz1;
		for($i=0;$i<$filas;$i++){
			$ArrayDataMatrizOut[$i][$columnas]=$ArrayDataMatriz2[$i][0];
		}
		return $ArrayDataMatrizOut;
	}
	
	function RestaMatrices($ArrayDataMatriz1, $ArrayDataMatriz2){
		$filas1 = count($ArrayDataMatriz1);
		$columnas1 = count ($ArrayDataMatriz1[0]);	
		for($i=0; $i<$filas1; $i++) {   

			for($j=0; $j<$columnas1; $j++){
				$ArrayResta[$i][$j]= $ArrayDataMatriz1[$i][$j]-$ArrayDataMatriz2[$i][$j];
			}
		}
		return $ArrayResta;
		
	}
	
	function ScalarMatriz($ArrayDataMatriz, $valor) {
		$filas = count($ArrayDataMatriz);
		$columnas = count ($ArrayDataMatriz[0]);
		$matriz = array();
		for($i = 0; $i < $filas; $i++) {
			for($j = 0; $j < $columnas; $j++) {
				$matriz[$i][$j] = $ArrayDataMatriz[$i][$j] * $valor;
			}
		}
		return $matriz;
	}
	
	function SumaMatrices($ArrayDataMatriz1, $ArrayDataMatriz2){
		$filas1 = count($ArrayDataMatriz1);
		$columnas1 = count ($ArrayDataMatriz1[0]);
		for($i=0; $i<$filas1; $i++) {   
			for($j=0; $j<$columnas1; $j++){
				$ArrayResta[$i][$j]= $ArrayDataMatriz1[$i][$j]+$ArrayDataMatriz2[$i][$j];
			}
		}
		return $ArrayResta;
		
	}	
	
	function MultiplicacionMatrices($ArrayDataMatriz1, $ArrayDataMatriz2) {
		$filas1 = count($ArrayDataMatriz1);
		$columnas1 = count ($ArrayDataMatriz1[0]);
		$columnas2 = count ($ArrayDataMatriz2[0]);	
		$filas2 = count($ArrayDataMatriz2);

		for($i=0; $i<$filas1; $i++){
			for($j=0; $j<$columnas2; $j++){
				$ArrayMultipli[$i][$j]=0; $sum=0;
				for($M=0;$M<$columnas1;$M++){
					$ArrayMultipli[$i][$j]  = $ArrayMultipli[$i][$j] + $ArrayDataMatriz1[$i][$M]*$ArrayDataMatriz2[$M][$j];
				}
			}
		}
		return $ArrayMultipli;
	}
		
	function Transpuesta($ArrayDataMatriz) {
		$filas = count($ArrayDataMatriz);
		$columnas = count ($ArrayDataMatriz[0]);
		$ArrayTranspuesta = array();
		for($i = 0; $i < $filas; $i++) {
			for($j = 0; $j < $columnas; $j++) {
				$ArrayTranspuesta[$j][$i] = $ArrayDataMatriz[$i][$j];
			}
		}
		return $ArrayTranspuesta;
		
	}

	function Grevile($ArrayDataMatriz){
		$filas = count($ArrayDataMatriz);
		$columnas = count ($ArrayDataMatriz[0]);
		// step 1
		$AA=ithCol(1, $ArrayDataMatriz);
		if(isZero($AA)==0) 
		$AR=Transpuesta($AA);
		else{
			$TA=Transpuesta($AA);
			$AR=MultiplicacionMatrices($TA, $AA);
			$pom=matNum($AR);
			$AR=ScalarMatriz($TA, 1/$pom);
		}
		// step 2
		for($i=2;$i<=$columnas;$i++){
		// step 2.1
			$OO=ithCol($i,$ArrayDataMatriz);
			$DD=MultiplicacionMatrices($AR,$OO);
		// step 2.2
			$FC=frstiCol($i-1, $ArrayDataMatriz);
			$MM=MultiplicacionMatrices($FC,$DD);
			$CC=RestaMatrices($OO,$MM);	
		// step 2.3
			if(isZero($CC)==0){
				$TDD=Transpuesta($DD);
				$P=MultiplicacionMatrices($TDD,$DD);
				$pom=1+matNum($P);
				$TM=Transpuesta($AR);
				$MM=MultiplicacionMatrices($TM,$DD);
				$BB=ScalarMatriz($MM, 1/$pom);
			}
			else{
				$TTM=Transpuesta($CC);
				$P=MultiplicacionMatrices($TTM,$CC);
				$pom=matNum($P);
				$BB=ScalarMatriz($CC, 1/$pom);
			}
		// step 2
			$EE=Transpuesta($BB);
			$QW=MultiplicacionMatrices($DD,$EE);
			$AR=RestaMatrices($AR,$QW);
			$TBB=Transpuesta($BB);
			$AR=appRow($AR,$TBB);
		}
		return $AR;
	}

	function InversaMatriz($ArrayDataMatriz) {
		$filas = count($ArrayDataMatriz);
		$columnas = count ($ArrayDataMatriz[0]);
		//echo "determiando inversa<br>";
		$matriz = array();
		for($i = 0; $i < $filas; $i++) {
			for($j = 0; $j < $columnas; $j++) {
				if (fmod($i + $j, 2) == 0) {
					$matriz[$i][$j] = Determinante(SubMatriz($ArrayDataMatriz, $i, $j));
				} else {
					$matriz[$i][$j] = -Determinante(SubMatriz($ArrayDataMatriz, $i, $j));
				}
			}
		}
		return Transpuesta(DivisionMatriz($matriz,Determinante($ArrayDataMatriz)));
	}
	
	function resenje($d,$z){
		$d=$d*$z;
		return $d;
	}

	function determinanta($ArrayDataMatriz1,$j,$z){
		$filas = count($ArrayDataMatriz1);
		$columnas = count ($ArrayDataMatriz1[0]);
		if(($ArrayDataMatriz1[0][$j])==0){
			if($j>$filas){
				$d=0;
				return resenje($d,$z);
			}	
			else{
				$j++;
				return determinanta($ArrayDataMatriz1,$j,$z);// poziv rekurzivne funkcije
			}
		}
		else{
			if($j!=0){
				for($s=0;$s<$filas;$s++){
					$y=$ArrayDataMatriz1[$s][0];
					$ArrayDataMatriz1[$s][0]=$ArrayDataMatriz1[$s][$j];
					$ArrayDataMatriz1[$s][$j]=$y;
				}
				$z=-$z;
			}
			for($s=1;$s<$filas;$s++){
				if($ArrayDataMatriz1[0][$s]!=0){
					for($m=1;$m<$filas;$m++){
						$x=-$ArrayDataMatriz1[0][$s]/$ArrayDataMatriz1[0][0];
						$ArrayDataMatriz1[$m][$s]=$x*$ArrayDataMatriz1[$m][0]+$ArrayDataMatriz1[$m][$s];
					}
					$ArrayDataMatriz1[0][$s]=0;
				}
			}
			$z=$z*$ArrayDataMatriz1[0][0];
			$filas=$filas-1;
			for($i=0;$i<$filas;$i++){
				for($j=0;$j<$filas;$j++){
					$ArrayDataMatriz2[$i][$j]=$ArrayDataMatriz1[$i+1][$j+1];
				}
			}
			if($filas==2){
				$d=$ArrayDataMatriz2[0][0]*$ArrayDataMatriz2[1][1]-$ArrayDataMatriz2[0][1]*$ArrayDataMatriz2[1][0];
				return resenje($d,$z);
			}
			else{
				$j=0;
				return determinanta($ArrayDataMatriz2,$j,$z);
			}
		}
	}

	function WeightedInverse($ArrayDataMatrizM,$ArrayDataMatrizA,$ArrayDataMatrizN){
		$filas = count($ArrayDataMatrizA);
		$columnas = count ($ArrayDataMatrizA[0]);
		// step 1
		$aa=ithCol(1, $ArrayDataMatrizA);
		if(isZero($aa)==0) 
			$ar=Transpuesta($aa);
		else{
			$ta=Transpuesta($aa);
			$alb=MultiplicacionMatrices($ta,$ArrayDataMatrizM);
			$ali=MultiplicacionMatrices($alb,$aa);
			//$pom=matNum($ali);
			$inv=Inverse($ali);
			$ar=MultiplicacionMatrices($inv,$alb);
		}
		// step 2
		for($i=2;$i<=$columnas;$i++){
		// step 2.1
			$ii=ithCol($i,$ArrayDataMatrizA);
			$di=MultiplicacionMatrices($ar,$ii);
		// step 2.2
			$fc=frstiCol($i-1,$ArrayDataMatrizA);//
			$mm=MultiplicacionMatrices($fc,$di);
			$ci=RestaMatrices($ii,$mm);	
			$nim1=mMinus($ArrayDataMatrizN,$i);// ovde je bilo $i-1
			$nim1g=Inverse($nim1);// bilo Grevile umesto Inverse
			$li=mColumn($ArrayDataMatrizN,$i);//
		// step 2.3
			if(isZero($ci)==0){
				$nii=mskalar($ArrayDataMatrizN,$i);
				$dit=Transpuesta($di);
				$dtn=MultiplicacionMatrices($dit,$nim1);
				$dtnd=MultiplicacionMatrices($dtn,$di);
				$dtnd=matNum($dtnd);
				$ditl=MultiplicacionMatrices($dit,$li);
				$lit=Transpuesta($li);
				$litdi=MultiplicacionMatrices($lit,$di);
				$ditdi=SumaMatrices($ditl,$litdi);
				$ditdi=matNum($ditdi);
				$nim1li=MultiplicacionMatrices($nim1g,$li);
				$litnli=MultiplicacionMatrices($lit,$nim1li);
				$litnli=matNum($litnli);
				$lktar=MultiplicacionMatrices($lit,$ar);
				$arnklk=MultiplicacionMatrices($fc,$nim1li);			
				$novo=MultiplicacionMatrices($lktar,$arnklk);
				$novo=matNum($novo);			
				$si=$nii+$dtnd-$ditdi-$litnli+$novo;
				$dtnar=MultiplicacionMatrices($dtn,$ar);
				$dilit=RestaMatrices($dtnar,$lktar);
				$bit=ScalarMatriz($dilit,1/$si);
			}
			else{
				$cit=Transpuesta($ci);
				$citm=MultiplicacionMatrices($cit,$ArrayDataMatrizM);
				$pom=MultiplicacionMatrices($citm,$ci);
				$pom=matNum($pom);
				$bit=ScalarMatriz($citm,1/$pom);
			}
		// step 2
			$nim1li=MultiplicacionMatrices($nim1g,$li);
			$arai=MultiplicacionMatrices($ar,$fc);
			$arnim1=MultiplicacionMatrices($arai,$nim1li);
			$pi=RestaMatrices($nim1li,$arnim1);
			$k1=MultiplicacionMatrices($di,$bit);
			$ark1=RestaMatrices($ar,$k1);
			$pib=MultiplicacionMatrices($pi,$bit);//
			$ar=RestaMatrices($ark1,$pib);
			$ar=appRow($ar,$bit);
		}
		return $ar;
	}

	function Inverse($ArrayDataMatriz){
		$filas = count($ArrayDataMatriz);
		$columnas = count ($ArrayDataMatriz[0]);
		// step 1
		$nii=mskalar($ArrayDataMatriz,1);
		$N=1/$nii;
		$N=array(array($N));
		// step 2
		for($i=2;$i<=$columnas;$i++){
		// step 2.1				
			$s=mskalar($ArrayDataMatriz,$i);
			$nii=array(array($s));
			$li=mColumn($ArrayDataMatriz,$i);
			$lit=Transpuesta($li);
			$giip=MultiplicacionMatrices($lit, $N);
			$gii1=MultiplicacionMatrices($giip,$li);
			$gii=RestaMatrices($nii,$gii1);
			
			$gii2=matNum($gii);
			$gii=1/$gii2;
		// step 2.2
			$fip=MultiplicacionMatrices($N,$li);
			$fi1=ScalarMatriz($fip, $gii);
			$fi=ScalarMatriz($fi1,-1);
		// step 2.3
			$fit=Transpuesta($fi);
			$E1=MultiplicacionMatrices($fi,$fit);
			$E2=ScalarMatriz($E1,1/$gii);
			$E=SumaMatrices($N,$E2);
			$ArrayDataMatriz1=appRow($E,$fit);
			$giin=array(array($gii));
			$ArrayDataMatriz2=appRow($fi,$giin);
			$N=finaly($ArrayDataMatriz1,$ArrayDataMatriz2);
		}		
		return $N;
	}
	
	function createXML($m,$n,$idA,$result){
		$s='<?xml version="1.0" encoding="utf-8"?>' . "\n<matrix>" . "\n";
		$z=1;
		for($i=0;$i<$m;$i++){
			$k=1;
			$s = $s . "    <row>\n";
			for($j=0;$j<$n;$j++){
				//$zaok= round($result[$i][$j],5);
				$zaok= $result[$i][$j];
				$s = $s . "        <column>" . "$zaok";
				$s = $s . "</column>\n";
			}
			$s = $s . "    </row>\n";
			//echo "<br>";
			}
			$s = $s . "</matrix>";
			//echo "<br>";
			$fajl = $idA . ".xml";
			$myFile = "xml/$fajl";
			$fh = fopen($myFile, 'w') or die("can't open file");
			fwrite($fh, $s);
			fclose($fh);
	}
?>