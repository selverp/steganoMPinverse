<?php
/*
* Clase que contiene operaciones de una matriz
* Fecha de Creación: 30/sept/2005
* Diego Carrera - Kleber Baño
* Guayaquil - Ecuador
*
*/
ini_set(max_execution_time, "700");
class matrix {
	//global vars
	var $NumFila;	
	var $NumColumna;
	var $ArrayData=array();
	//advanced global vars	
	var $ArrayMedia;
	var $ArrayMatrizCov;
	var $String=array();

	/**
	 * Contructor de la clase matriz
	 *
	 * @param array $ArrayDataMatriz
	 * @return matrix
	 */
	function matrix($ArrayDataMatriz) {
		$this->set_data($ArrayDataMatriz);
		if (!$this->set_properties_matrix())
		 return false;
	return true;
	}


/******************************************/	
/*FUNCIONES DE BASICAS DE LA CLASE MATRIX */

	/**
	 * Setea los datos que se le da a la matriz al momento de iniciar el objeto
	 *
	 * @param array $ArrayDataMatriz
	 */
	 //NIZ JEDNODIMENZIONALAN ILI DVODIMENZIONALAN
	function set_data($ArrayDataMatriz){
		for ($i=0;$i<count($ArrayDataMatriz);$i++){
			$valor = $ArrayDataMatriz[$i];
			if (count($ArrayDataMatriz[$i])==1){
				$this->ArrayData[$i][0] = $ArrayDataMatriz[$i];	
			}
			else
			for ($j=0;$j<count($ArrayDataMatriz[$i]);$j++)
					$this->ArrayData[$i][$j] = $ArrayDataMatriz[$i][$j];	
		}
		
	}


	/**
	 * Setee las propiedades de la matriz como son las filas y columnas
	 *
	 * @return unknown
	 */
	function set_properties_matrix(){
		$this->NumFila = count($this->ArrayData );// BROJ REDOVA
		$this->NumColumna = count($this->ArrayData[0]);// BROJ KOLONA
		if ($this->ValidaNumColumnasObjMatriz($this->NumFila,$this->NumColumna)){
			return true;
		}
		$this->NumColumna=null;
		$this->NumFila=null;
		return false;
	}
	
	/**
	 * Setee el número de filas de la matriz
	 *
	 */
	function set_NumFilas(){
		$this->NumFila = count($this->ArrayData[0] );
	}
	
	/**
	 * Setee el número de columna de la matriz
	 *
	 */	
	function set_NumColumnas(){
		$this->NumColumna = count($this->ArrayData);
	}

	/**
	 * Obtiene el número de filas que tiene el objeto matriz
	 *
	 * @return integer
	 */
	function get_NumFilas()	{
		return $this->NumFila;
	}

	/**
	 * Obtiene el número de columnas que tiene el objeto matriz
	 *
	 * @return integer
	 */
	function get_NumColumnas()	{
		return $this->NumColumna;
	}
	
	/**
	 * Obtiene el arreglo de datos de la matriz media del objeto matriz
	 *
	 * @return Arraymatriz
	 */
	function getMediaMatrix(){
		$this->MediasMatriz();
		return $this->ArrayMedia;
	}	

	/**
	 * Obtiene el arreglo de datos de la matriz de covarianza
	 *
	 * @param Arraydata $ArrayData
	 * @return ArrayData
	 */
	function getCovarianzaMatrix($ArrayData){
		$this->ArrayMatrizCov=$this->CovarianzaMatriz($ArrayData);
		return $this->ArrayMatrizCov;
	}
	
	/**
	 * Obtiene el número de filas que tiene un Arreglo de una matriz
	 *
	 * @param ArrayData $ArrayDataMatriz
	 * @return integer
	 */
	function get_NumFilas_ArrayDataMatriz($ArrayDataMatriz){
		//echo "la supesta filas es ".count($ArrayDataMatriz);
		//print_r($ArrayDataMatriz);
		return count($ArrayDataMatriz);
	}
	
	/**
	 * Obtiene el número de columnas que tiene un arreglo de una matriz
	 *
	 * @param ArrayData $ArrayDataMatriz
	 * @return integer
	 */
	function get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz){
		//echo "la supesta columan es ".count($ArrayDataMatriz[0]);
		return count ($ArrayDataMatriz[0]);
	}



/******************************************/	
/*FUNCIONES DE VALIDACIONES DE MATRICES */

	/**
	 * Funcion que valida si dos matrices son iguales, es decir que tengan el mismo numero de N y M
	 *
	 * @param matrix $matrizA
	 * @param matrix $matrizB
	 * @return bool
	 */
	function ValidaMatricesDimenIguales($ObjMatrizA, $ObjMatrizB){
		//valida que las matrices sean v&aacute;lidas
		if ($ObjMatrizA->NumFila==$ObjMatrizB->NumFila and $ObjMatrizA->NumColumna==$ObjMatrizB->NumFila)
			return true;
		else
			return false;
	}
		

	/**
	 * Funcion que valida que la matriz sea de NxN
	 *
	 * @return bool
	 */
	function ValidaMatriz_N_x_N(){
		if ($this->NumFila == $this->NumColumna)
			 return true;
			 
	return false;
	}
	
	/**
	 * Valida que el numero de columna de una matriz.. se el mismo en todas sus filas
	 *
	 * @param integer $NumFilas
	 * @param integer $NumColumnas
	 * @return bool
	 */
	function ValidaNumColumnasObjMatriz($NumFilas,$NumColumnas){
		for ($i=0;$i<$NumFilas;$i++){
			$columna = count($this->ArrayData [$i]);
			if ($NumColumnas != $columna)
				return false;
		}
	return true;
	}
	
	/**
	 * Dado un arreglo de datos de una matriz, valida que el número de 
	 * columnas de una matriz.. se el mismo en todas sus filas
	 *
	 * @param ArrayData $ArrayDataMatriz
	 * @param integer $NumFilas
	 * @param integer $NumColumnas
	 * @return unknown
	 */
	function ValidaNumColumnasArrayDataMatriz($ArrayDataMatriz,$NumFilas,$NumColumnas){
		for ($i=0;$i<$NumFilas;$i++){
			$columna = count($ArrayDataMatriz[$i]);
			if ($NumColumnas != $columna)
				return false;
		}
	return true;
	}
	
//i-ta kolona
	function ithCol($column, $ArrayDataMatriz1){
		$filas1 = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz1);
		$filas2 = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz2);
		$columnas1 = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz1);
		$columnas2 = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz2);
		for($i=0; $i<$filas1; $i++) {   
			for($j=0; $j<$columnas1; $j++){
				if($j+1==$column)
				$ArrayCol[$i][0]= $ArrayDataMatriz1[$i][$j];
			}
		}
		return $ArrayCol;
	}	

//frst-i kolona
	function frstiCol($columns, $ArrayDataMatriz1){
		$filas1 = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz1);
		$filas2 = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz2);
		$columnas1 = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz1);
		$columnas2 = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz2);
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
		$filas1 = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz1);
		$columnas1 = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz1);
		if($filas1==1 & $columnas1==1)
		return $ArrayDataMatriz1[0][0];
	}	

//is Zero

	function isZero($ArrayDataMatriz1){
		$isZero=0;
		$filas1 = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz1);
		$filas2 = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz2);
		$columnas1 = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz1);
		$columnas2 = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz2);
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
		$filas1 = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz1);
		$filas2 = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz2);
		$columnas1 = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz1);
		$columnas2 = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz2);
		for($i=0; $i<$columnas2; $i++){
			$ArrayDataMatriz1[$filas1][$i]=$ArrayDataMatriz2[0][$i];
		}
		return $ArrayDataMatriz1;
	}	

/************************************************/	
/*FUNCIONES DE OPERACIONES BASICAS CON MATRICES */

	/**
	 * Resta de dos matrices
	 * Requisito: tiene que se de iguales valores de NxM
	 *
	 * @param ArrayData $ArrayDataMatriz1
	 * @param ArrayData $ArrayDataMatriz2
	 * @return ArrayData
	 */
	function RestaMatrices($ArrayDataMatriz1, $ArrayDataMatriz2){
		$filas1 = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz1);
		$filas2 = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz2);
		$columnas1 = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz1);
		$columnas2 = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz2);
		
		for($i=0; $i<$filas1; $i++) {   
			for($j=0; $j<$columnas1; $j++){
				$ArrayResta[$i][$j]= $ArrayDataMatriz1[$i][$j]-$ArrayDataMatriz2[$i][$j];
			}
		}
		return $ArrayResta;
		
	}
	
	/**
	 * Mnozenje matrice skalarom
	 */
	function ScalarMatriz($ArrayDataMatriz, $valor) {
		$filas = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz);
		$columnas = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz);

		$matriz = array();
		for($i = 0; $i < $filas; $i++) {
			for($j = 0; $j < $columnas; $j++) {
				$matriz[$i][$j] = $ArrayDataMatriz[$i][$j] * $valor;
			}
		}
		return $matriz;
	}
	/**
	 * Suma de dos matrices
	 * Requisito: tiene que se de iguales valores de NxM
	 *
	 * @param ArrayData $ArrayDataMatriz1
	 * @param ArrayData $ArrayDataMatriz2
	 * @return ArrayData
	 */
	function SumaMatrices($ArrayDataMatriz1, $ArrayDataMatriz2){
		$filas1 = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz1);
		$filas2 = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz2);
		$columnas1 = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz1);
		$columnas2 = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz2);
		
		for($i=0; $i<$filas1; $i++) {   
			for($j=0; $j<$columnas1; $j++){
				$ArrayResta[$i][$j]= $ArrayDataMatriz1[$i][$j]+$ArrayDataMatriz2[$i][$j];
			}
		}
		return $ArrayResta;
		
	}	
	


	/**
	 * Calcula la matriz resultante de multiplicar dos matrices
	 * Requisito: los datos de las matrices A,B, tiene que cumplir que
	 * El # de columnas de A, tienen que se igual a las filas de B.
	 * C(pxq) = A(pxm) * B(mxq)
	 *
	 * @param ArrayData $ArrayDataMatriz1
	 * @param ArrayData $ArrayDataMatriz2
	 * @return ArrayData
	 */
	function MultiplicacionMatrices($ArrayDataMatriz1, $ArrayDataMatriz2) {
		$filas1 = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz1);
		$columnas1 = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz1);

		$columnas2 = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz2);		
		$filas2 = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz2);

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
		
	/**
	 * Calcula la matriz resultante al dividir una matriz para un escalar
	 *
	 * @param ArrayData $ArrayDataMatriz
	 * @param integer $valor
	 * @return ArrayData
	 */
	function DivisionMatriz($ArrayDataMatriz, $valor) {
		$filas = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz);
		$columnas = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz);

		$matriz = array();
		for($i = 0; $i < $filas; $i++) {
			for($j = 0; $j < $columnas; $j++) {
				$matriz[$i][$j] = $ArrayDataMatriz[$i][$j] / $valor;
			}
		}
		return $matriz;
	}
	
	/**
	 * Calcula el Determinante de una matriz.
	 * Requisito: Todas filas deben tener el mismo número de columnas.
	 * Requisito: La matriz debe ser de NxN
	 *
	 * @param ArrayData $ArrayDataMatriz
	 * @return integer
	 */
	function Determinante($ArrayDataMatriz) {
		$filas = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz);
		$columnas = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz);
		$det = 0;
		if ($filas == 2 && $columnas == 2) {
			$det = $ArrayDataMatriz[0][0] * $ArrayDataMatriz[1][1] - $ArrayDataMatriz[0][1] * $ArrayDataMatriz[1][0];
		} else {
			$matriz = array();
			/* Recorrer las columnas pivotes */
			for($j = 0; $j < $columnas; $j++) {
				/* Se crea una sub matriz */
				$matriz = $this->SubMatriz($ArrayDataMatriz, 0, $j);
				if (fmod($j, 2) == 0) {
					$det += $ArrayDataMatriz[0][$j]*$this->Determinante($matriz);
				} else {
					$det -= $ArrayDataMatriz[0][$j]*$this->Determinante($matriz);
				}
			}
		}
		return $det;
	}


	/**
	 * Enter description here...
	 *
	 * @param ArrayData $ArrayDataMatriz
	 * @param integer $pivoteX
	 * @param integer $pivoteY
	 * @return ArrayData
	 */
	function SubMatriz($ArrayDataMatriz, $pivoteX, $pivoteY) {
		//echo "determiando SUBMATRIZ<br>";
		$filas = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz);
		$columnas = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz);
		$matriz = array();
		$p = 0; // indica la fila de la nueva submatriz
		for($i = 0; $i < $filas; $i++) {
			$q = 0; // indica la columna de la nueva submatriz
			if ($pivoteX != $i) {
				for($j = 0; $j < $columnas; $j++) {
					if ($pivoteY != $j) {
						$matriz[$p][$q] = $ArrayDataMatriz[$i][$j];
						$q++;
					}
				}
				$p++;
			}
		}
		return $matriz;
	}


	/**
	 * Calcula la matriz transpuesta de la matriz dada
	 *
	 * @param ArrayData $ArrayDataMatriz
	 * @return ArrayData
	 */
	function Transpuesta($ArrayDataMatriz) {
		$filas = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz);
		$columnas = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz);
		$ArrayTranspuesta = array();
		//echo $filas.",".$columnas;
		for($i = 0; $i < $filas; $i++) {
			for($j = 0; $j < $columnas; $j++) {
				//echo "el dato es ".$ArrayDataMatriz[$i][$j]."<br>";
				$ArrayTranspuesta[$j][$i] = $ArrayDataMatriz[$i][$j];
			}
		}
		return $ArrayTranspuesta;
		
	}


	/**
	 * Calcula la matriz inversa de la matriz dada
	 *
	 * @param ArrayData $ArrayDataMatriz
	 * @return ArrayData
	 */
	function InversaMatriz($ArrayDataMatriz) {
		$filas = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz);
		$columnas = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz);
		//echo "determiando inversa<br>";
		$matriz = array();
		for($i = 0; $i < $filas; $i++) {
			for($j = 0; $j < $columnas; $j++) {
				if (fmod($i + $j, 2) == 0) {
					$matriz[$i][$j] = $this->Determinante($this->SubMatriz($ArrayDataMatriz, $i, $j));
				} else {
					$matriz[$i][$j] = -$this->Determinante($this->SubMatriz($ArrayDataMatriz, $i, $j));
				}
			}
		}
		return $this->Transpuesta($this->DivisionMatriz($matriz,$this->Determinante($ArrayDataMatriz)));
	}
	

/**************************************************/	
/*FUNCIONES DE OPERACIONES AVANZADAS CON MATRICES */
	
	/**
	 * 	M = mean(A)  return la media de los valores de una dimension del arreglo
	 * 	If A is a vector, mean(A) returns the mean value of A.
	 * 	If A is a matrix, mean(A) treats the columns of A as vectors, returning a row vector of mean values.
	 * 	A = [1 2 3; 3 3 6; 4 6 8; 4 7 7];
	 * 	mean(A)= [ 3.0000    4.5000    6.000 ]
	 *
	 * @return unknown
	 */
	function MediasMatriz(){
		//encero los valores para el arreglo que va a almacenar las medias y las sumas
		for ($j=0; $j<$this->NumColumna; $j++){
			$this->ArrayMedia[$j]=0;
			$suma_media[$j]=0;
		}
		for ($j=0; $j<$this->NumColumna; $j++){
			for ($i=0; $i<$this->NumFila; $i++){
				$suma_media[$j]+=$this->ArrayData[$i][$j];
			}
			//echo "suma $i,$j=".$this->ArrayData[$i][$j]."<br>";
			$this->ArrayMedia[$j]=$suma_media[$j]/$this->NumFila;
			$this->ArraySumaMedia[$j]=$suma_media[$j];
		}
	//retorno la matriz con los promedio de cada columna (la matriz de la media)
	return true;
	}
	

		

	/**
	 * COV(X,Y)
	 * Calcula la covarianza entre los vectores x i y
	 * C = CovarianzaVector(x) where x,y  are vectors, 
	 *
	 * @param array $vectorX
	 * @param array $vectorY
	 * @return integer
	 */
	function CovarianzaVectores ($vectorX, $vectorY){
		$NumFilas = count($vectorX);
		if ($NumFilas != count($vectorY)) return null;
		$covarianza = 0;$sum=0;
		$mean_x = $this->MediaVector($vectorX);
		$mean_y = $this->MediaVector($vectorY);
		for($i = 0; $i < $NumFilas; $i++) {
			$valor = (($vectorX[$i] - $mean_x) * ($vectorY[$i] - $mean_y));
			$sum += $valor;
		}
		$covarianza = $sum / $NumFilas;
		return $covarianza;
	}
	
	
	/**
	 * Calcula la matriz de covarianza de una matriz A
	 * S = CovarianzaMatriz(x) where A es una matriz.
	 * Cada fila es una observacion y cada columna es una variable
	 * n = numero de observaciones (# filas)
	 * Cov (A)= A * A'
	*/
	function CovarianzaMatriz($ArrayData){
		$transpA = $this->Transpuesta($ArrayData);
		$MatrizCov =  $this->MultiplicacionMatrices($ArrayData,$transpA);
		return $MatrizCov;
	}
	
	function resenje($d,$z){
		$d=$d*$z;
		return $d;
	}

	function determinanta($ArrayDataMatriz1,$j,$z){
		$filas = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz1);
		$columnas = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz1);
		if(($ArrayDataMatriz1[0][$j])==0)
		{
			if($j>$filas){
				$d=0;
				return $this->resenje($d,$z);
			}	
			else{
				$j++;
				return $this->determinanta($ArrayDataMatriz1,$j,$z);// poziv rekurzivne funkcije
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
				return $this->resenje($d,$z);
			}
			else{
				$j=0;
				return $this->determinanta($ArrayDataMatriz2,$j,$z);
			}
		}
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
	function finaly($ArrayDataMatriz1,$ArrayDataMatriz2){
		$filas = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz1);
		$columnas = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz1);
		$ArrayDataMatrizOut=$ArrayDataMatriz1;
		for($i=0;$i<$filas;$i++){
			$ArrayDataMatrizOut[$i][$columnas]=$ArrayDataMatriz2[$i][0];
		}
		return $ArrayDataMatrizOut;
	}
	
	function microtime_float(){
    	list($usec, $sec) = explode(" ", microtime());
   		 return ((float)$usec + (float)$sec);
	}
	
	function makeZero($m){
		for($i=0;$i<$m;$i++){
			$zero[0][$i]=0;
		}
		return $zero;
	}
	
	function mMatrica($ArrayDataMatriz,$k){
		for($i=0;$i<=$k;$i++){
			for($j=0;$j<=$k;$j++){
				$mMatrica[$i][$j]=$ArrayDataMatriz[$i][$j];
			}
		}
		return $mMatrica;
	}
	function Inverse($ArrayDataMatriz){
		$filas = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz);
		$columnas = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz);
		// step 1
		$nii=$this->mskalar($ArrayDataMatriz,1);
		$N=1/$nii;
		$N=array(array($N));
		// step 2
		for($i=2;$i<=$columnas;$i++){
		// step 2.1				
			$s=$this->mskalar($ArrayDataMatriz,$i);
			$nii=array(array($s));
			$li=$this->mColumn($ArrayDataMatriz,$i);
			$lit=$this->Transpuesta($li);
			$giip=$this->MultiplicacionMatrices($lit, $N);
			$gii1=$this->MultiplicacionMatrices($giip,$li);
			$gii=$this->RestaMatrices($nii,$gii1);
			
			$gii2=$this->matNum($gii);
			$gii=1/$gii2;
		// step 2.2
			$fip=$this->MultiplicacionMatrices($N,$li);
			$fi1=$this->ScalarMatriz($fip, $gii);
			$fi=$this->ScalarMatriz($fi1,-1);
		// step 2.3
			$fit=$this->Transpuesta($fi);
			$E1=$this->MultiplicacionMatrices($fi,$fit);
			$E2=$this->ScalarMatriz($E1,1/$gii);
			$E=$this->SumaMatrices($N,$E2);
			$ArrayDataMatriz1=$this->appRow($E,$fit);
			$giin=array(array($gii));
			$ArrayDataMatriz2=$this->appRow($fi,$giin);
			$N=$this->finaly($ArrayDataMatriz1,$ArrayDataMatriz2);
		}		
		return $N;
	}
}

class Grevile extends matrix{
	function Grevile($ArrayDataMatriz){
		$filas = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz);
		$columnas = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz);
		// step 1
		$AA=$this->ithCol(1, $ArrayDataMatriz);
		if($this->isZero($AA)==0) 
		$AR=$this->Transpuesta($AA);
		else{
			$TA=$this->Transpuesta($AA);
			$AR=$this->MultiplicacionMatrices($TA, $AA);
			$pom=$this->matNum($AR);
			$AR=$this->ScalarMatriz($TA, 1/$pom);
		}
		// step 2
		for($i=2;$i<=$columnas;$i++){
		// step 2.1
			$OO=$this->ithCol($i,$ArrayDataMatriz);
			$DD=$this->MultiplicacionMatrices($AR,$OO);
		// step 2.2
			$FC=$this->frstiCol($i-1, $ArrayDataMatriz);
			$MM=$this->MultiplicacionMatrices($FC,$DD);
			$CC=$this->RestaMatrices($OO,$MM);	
		// step 2.3
			if($this->isZero($CC)==0){
				$TDD=$this->Transpuesta($DD);
				$P=$this->MultiplicacionMatrices($TDD,$DD);
				$pom=1+$this->matNum($P);
				$TM=$this->Transpuesta($AR);
				$MM=$this->MultiplicacionMatrices($TM,$DD);
				$BB=$this->ScalarMatriz($MM, 1/$pom);
			}
			else{
				$TTM=$this->Transpuesta($CC);
				$P=$this->MultiplicacionMatrices($TTM,$CC);
				$pom=$this->matNum($P);
				$BB=$this->ScalarMatriz($CC, 1/$pom);
			}
		// step 2
			$EE=$this->Transpuesta($BB);
			$QW=$this->MultiplicacionMatrices($DD,$EE);
			$AR=$this->RestaMatrices($AR,$QW);
			$TBB=$this->Transpuesta($BB);
			$AR=$this->appRow($AR,$TBB);
		}
		return $AR;
	}
}

class WeightedInverse extends matrix{
	function WeightedInverse($ArrayDataMatrizM,$ArrayDataMatrizA,$ArrayDataMatrizN){
		$filas = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatrizA);
		$columnas = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatrizA);
		// step 1
		$aa=$this->ithCol(1, $ArrayDataMatrizA);
		if($this->isZero($aa)==0) 
			$ar=$this->Transpuesta($aa);
		else{
			$ta=$this->Transpuesta($aa);
			$alb=$this->MultiplicacionMatrices($ta,$ArrayDataMatrizM);
			$ali=$this->MultiplicacionMatrices($alb,$aa);
			$pom=$this->matNum($ali);
			$ar=$this->ScalarMatriz($alb,1/$pom);
		}
		// step 2
		for($i=2;$i<=$columnas;$i++){
		// step 2.1
			$ii=$this->ithCol($i,$ArrayDataMatrizA);
			$di=$this->MultiplicacionMatrices($ar,$ii);
		// step 2.2
			$fc=$this->frstiCol($i,$ArrayDataMatrizA);//
			$mm=$this->MultiplicacionMatrices($fc,$di);
			$ci=$this->RestaMatrices($ii,$mm);	
			$nim1=$this->mMinus($ArrayDataMatrizN,$i);//
			$nim1g=$this->Inverse($nim1);
			$li=$this->mColumn($ArrayDataMatrizN,$i);//
		// step 2.3
			if($this->isZero($ci)==0){
				$nii=$this->mskalar($ArrayDataMatrizN,$i);
				$dit=$this->Transpuesta($di);
				$dtn=$this->MultiplicacionMatrices($dit,$nim1);
				$dtnd=$this->MultiplicacionMatrices($dtn,$di);
				$dtnd=$this->matNum($dtnd);
				$ditl=$this->MultiplicacionMatrices($dit,$li);
				$lit=$this->Transpuesta($li);
				$litdi=$this->MultiplicacionMatrices($lit,$di);
				$ditdi=$this->SumaMatrices($ditl,$litdi);
				$ditdi=$this->matNum($ditdi);
				$nim1li=$this->MultiplicacionMatrices($nim1g,$li);
				$litnli=$this->MultiplicacionMatrices($lit,$nim1li);
				$litnli=$this->matNum($litnli);
				$lktar=$this->MultiplicacionMatrices($lit,$ar);
				$arnklk=$this->MultiplicacionMatrices($fc,$nim1li);			
				$novo=$this->MultiplicacionMatrices($lktar,$arnklk);
				$novo=$this->matNum($novo);			
				$si=$nii+$dtnd-$ditdi-$litnli+$novo;
				$dtnar=$this->MultiplicacionMatrices($dtn,$ar);
				$dilit=$this->RestaMatrices($dtnar,$lktar);
				$bit=$this->ScalarMatriz($dilit,1/$si);
			}
			else{
				$cit=$this->Transpuesta($ci);
				$citm=$this->MultiplicacionMatrices($cit,$ArrayDataMatrizM);
				$pom=$this->MultiplicacionMatrices($citm,$ci);
				$pom=$this->matNum($pom);
				$bit=$this->ScalarMatriz($citm,1/$pom);
			}
		// step 2
			$nim1li=$this->MultiplicacionMatrices($nim1g,$li);
			$arai=$this->MultiplicacionMatrices($ar,$fc);
			$arnim1=$this->MultiplicacionMatrices($arai,$nim1li);
			$pi=$this->RestaMatrices($nim1li,$arnim1);
			$k1=$this->MultiplicacionMatrices($di,$bit);
			$ark1=$this->RestaMatrices($ar,$k1);
			$pib=$this->MultiplicacionMatrices($pi,$bit);//
			$ar=$this->RestaMatrices($ark1,$pib);
			$ar=$this->appRow($ar,$bit);
		}
		return $ar;
	}
}

class LMInverse extends matrix{
	function LMinverse($ArrayDataMatrizM,$ArrayDataMatrizA,$ArrayDataMatrizN){
		$filas = $this->get_NumFilas_ArrayDataMatriz($ArrayDataMatriz);
		$columnas = $this->get_NumColumnas_ArrayDataMatriz($ArrayDataMatriz);
	// step 1
		$aa=$this->ithCol(1, $ArrayDataMatrizA);
		if($this->isZero($aa)==0) 
			$ar=$this->Transpuesta($aa);
			else{
				$ta=$this->Transpuesta($aa);
				$alb=$this->MultiplicacionMatrices($ta,$ArrayDataMatrizM);
				$ali=$this->MultiplicacionMatrices($alb,$aa);
				$pom=$this->matNum($ali);
				$ar=$this->ScalarMatriz($alb,1/$pom);
			}
	// step 2
		for($i=2;$i<=$columnas;$i++){
	// step 2.1
			$ai=$this->ithCol($i,$ArrayDataMatrizA);
			$ni=$this->MultiplicacionMatrices($ar,$ai);
	// step 2.2
			$fc=$this->frstiCol($i-1,$ArrayDataMatrizA);
			$fcni=$this->MultiplicacionMatrices($fc,$ni);	
			$di=$this->RestaMatrices($ai,$fcni);	
	// step 2.3
			$mm=$this->mMinus($ArrayDataMatrizN,$i);
			$mmi=$this->Inverse($mm);
			$vm=$this->mColumn($ArrayDataMatrizN,$i);
			$pro=$this->MultiplicacionMatrices($mmi,$vm);
			$pro1=$this->MultiplicacionMatrices($ar,$fc);
			$pro2=$this->MultiplicacionMatrices($pro1,$pro);
			$pi=$this->RestaMatrices($pro,$pro2);
	// step 2.4
			if($this->isZero($di)==0){
				$z=$this->makeZero($filas);// napravi funkciju makeZero
				$ui=$this->appRow($ar,$z);
				$qi=$this->SumaMatrices($ni,$pi);
				$minusJedan=array(array(-1));// proveri ovu funkciju $minusJedan[0][0]=-1;
				$qi=$this->appRow($qi,$minusJedan);
				$qit=$this->Transpuesta($qi);
				$deoM=$this->mMatrica($ArrayDataMatrizN,$i);// napravi ovu funkciju
				$qitm=$this->MultiplicacionMatrices($qit,$deoM);
				$bi=$this->MultiplicacionMatrices($qitm,$qi);
				$pomb=$this->matNum($bi);
				$hipom=$this->ScalarMatriz($qitm,1/$pomb);
				$ei=$this->MultiplicacionMatrices($hipom,$ui);
			}
			else{
				$dnt=$this->Transpuesta($di);
				$dlni=$this->MultiplicacionMatrices($dnt,$ArrayDataMatrizM);
				$pom=$this->MultiplicacionMatrices($dlni,$di);
				$pom=$this->matNum($pom);
				$ei=$this->ScalarMatriz($dlni,1/$pom);
			}
	// step 2
			$k1=$this->MultiplicacionMatrices($ni,$ei);
			$ar=$this->RestaMatrices($ar,$k1);
			$pd=$this->MultiplicacionMatrices($pi,$ei);
			$ar=$this->RestaMatrices($ar,$pd);
			$ar=$this->appRow($ar,$ei);
		}
	
		$LMinverz=$ar;
		return $LMinverz;
	}
}
class selver{
	//public $z;
	function adio($z){
		$z=$z-1;
		return $z;
	}
	function matrix($z) {
		if ($z==20)
			return $this->adio($z);
		else{
			$z++;
			return $this->matrix($z);
		}
	}
}

?>

