<?php

class matrix 
{
	var $numbers = array();
	var $numColumns = 0;
	var $numRows = 0;
	
	function matrix(){
		$nArgs = func_num_args();
		$numbers = func_get_arg(0);
//		$this->numbers = $numbers;
		if($nArgs > 2){// ovo nam sluzi za kreiranje matrice kada su data tri argumenta matrica, br.redova,br.kolona
			$this->numRows = func_get_arg(1);
			$this->numColumns = func_get_arg(2);
		}
		
		//Routine to initialise the array of numbers.
		//$numberColumns = 0;
		//$numberRows = 0;
		if(empty($numbers) == false){ //If the array is not empty
			
			foreach($numbers as $i => $rows){ //Check every row...
				foreach($rows as $j => $number){ //...and column to remove zeros.
					if($number != 0){
						$this->numbers[$i][$j] = $number;// ovo je zapravo 2D niz koji smo uneli 
					}
					$numberColumns = $j;
				}
				$numberRows = $i;
			}
		}
		$this->numRows = $numberRows+1;
		$this->numColumns = $numberColumns+1;	
	}

	
	function eye($n,$m){		
		$dim=min($n,$m);
		for($i=0;$i<$dim;$i++){
			$id_numbers[$i][$i]=1; 
		}
		$the_identity_matrix=new matrix($id_numbers,$dim,$dim);
		return $the_identity_matrix;
	}

	function zeros($n, $m){
		$the_zero_matrix = new matrix(array(), $n, $m);
		return $the_zero_matrix;
	}
	
	function makeZero($m){
		for($i=0;$i<$m;$i++){
			$zero[0][$i]=0;
		}
		$the_zero_matrix = new matrix($zero);
		return $the_zero_matrix;

	}
	function ones($n,$m){
		$ones = array();
		for($i = 0; $i < $n; $i++){
			for($j = 0; $j < $m; $j++){
				$ones[$i][$j] = 1; 
			}
		}
		$a_matrix_of_ones = new matrix($ones);
		return $a_matrix_of_ones;
	}

	function get_num_rows(){
		return $this->numRows;
	}

	function get_num_columns(){
		return $this->numColumns;
	}
	
	function get_numbers(){
		return $this->numbers;
	}
	
	function size_eq($someMatrix){// utvrdjivanje da li su dve matrice istih dimenzija
		$return = false;
		if ($someMatrix->get_num_rows() == $this->get_num_rows() and $someMatrix->get_num_columns() == $this->get_num_columns()){
			$return = true;
		}
		return $return;
	}
		
	function is_square(){// da li je matrica kvadratna
		$return = false;
		if ($this->get_num_rows() == $this->get_num_columns()){
			 $return = true;
		}
		return $return;
	}

	function minus($someMatrix){// PROMENI
		for($i=0; $i<$this->get_num_rows(); $i++){   
			for($j=0; $j< $this->get_num_columns(); $j++){
				$ArrayResta[$i][$j]= $this->numbers[$i][$j]-$someMatrix->numbers[$i][$j];
			}
		}
		$the_ArrayResta = new matrix($ArrayResta);
		return $the_ArrayResta;
	}
		
	function plus($someMatrix){// PROMENI
		for($i=0; $i<$this->get_num_rows(); $i++) {   
			for($j=0; $j< $this->get_num_columns(); $j++){
				$ArrayResta[$i][$j]= $this->numbers[$i][$j]+$someMatrix->numbers[$i][$j];//mozda ovde treba +
			}
		}
		$the_ArrayResta = new matrix($ArrayResta);
		return $the_ArrayResta;
	}	
	
	function times($someMatrix) {// PROMENI	
		$easier = $someMatrix->transpose();	
		foreach($this->numbers as $i => $row) {	
			foreach($easier->numbers as $j => $column){
				$total = 0;
				foreach($row as $k => $number){
					$total += $number * $column[$k];
				}
				$the_product_data[$i][$j] = $total;
			}
		}
		$the_product = new matrix($the_product_data);
		return $the_product;
	}
	
	function s_times($value){// PROMENI	
		for($i = 0; $i < $this->get_num_rows(); $i++) {
			for($j = 0; $j < $this->get_num_columns(); $j++) {
				$matriz[$i][$j] = $this->numbers[$i][$j] * $value;
			}
		}
		$the_matriz = new matrix($matriz);
		return $the_matriz;
	}

	function Determinante($someMatrix) {
		$det=0;
		$matriz=$this->zeros($someMatrix->get_num_rows(), $someMatrix->get_num_columns());
		if ($someMatrix->get_num_rows()==2 && $someMatrix->get_num_columns()==2){
			$det = $someMatrix->numbers[0][0] * $someMatrix->numbers[1][1] - $someMatrix->numbers[0][1] * $someMatrix->numbers[1][0];
		} 
		else{
			for($j=0;$j<$someMatrix->get_num_columns();$j++){
				$matriz = $this->SubMatriz($someMatrix,0,$j);
				if (fmod($j, 2) == 0) {
					$det += $someMatrix->numbers[0][$j]*$this->Determinante($matriz);
				} else {
					$det -= $someMatrix->numbers[0][$j]*$this->Determinante($matriz);
				}
			}
		}
		return $det;
	}

	function SubMatriz($someMatrix,$pivoteX,$pivoteY){
		$matriz = array();
		$p = 0;
		for($i = 0; $i < $someMatrix->get_num_rows(); $i++){
			$q = 0; 
			if ($pivoteX != $i){
				for($j = 0; $j < $someMatrix->get_num_columns(); $j++){
					if ($pivoteY != $j){
						$matriz[$p][$q] = $someMatrix->numbers[$i][$j];
						$q++;
					}
				}
				$p++;
			}
		}
		$the_matriz = new matrix($matriz);
		return $the_matriz;
	}

	function InverseMatrix($someMatrix){
		$matrica = array();
		for($i=0;$i<$someMatrix->get_num_rows();$i++){
			for($j=0;$j<$someMatrix->get_num_columns();$j++){
				if (fmod($i + $j, 2) == 0){
					$matrica[$i][$j] = $this->Determinante($this->SubMatriz($someMatrix,$i,$j));
				} 
				else{
					$matrica[$i][$j] = -$this->Determinante($this->SubMatriz($someMatrix,$i,$j));
				}
			}
		}
		$matricai = new matrix($matrica);
		$r=$this->DivisionMatriz($matricai,$this->Determinante($someMatrix));
		return $r->transpose($r);
	}
	
	function DivisionMatriz($someMatrix,$valor) {
		$matriz = array();
		for($i = 0; $i < $someMatrix->get_num_rows(); $i++) {
			for($j = 0; $j < $someMatrix->get_num_columns(); $j++) {
				$matriz[$i][$j] = $someMatrix->numbers[$i][$j]/$valor;
			}
		}
		$the_division = new matrix($matriz);
		return $the_division;
	}
	function transpose(){
		$ArrayT = array();
		for($i=0;$i<$this->get_num_rows();$i++){
			for($j=0;$j<$this->get_num_columns();$j++) {
				$ArrayT[$j][$i]=$this->numbers[$i][$j];
			}
		}
		$the_transpose = new matrix($ArrayT);
		return $the_transpose;	
	}

	//i-ta kolona
	function ithCol($column){
		$ArrayCol=array();
		for($i=0; $i<$this->get_num_rows(); $i++){   
			for($j=0; $j<$this->get_num_columns();$j++){
				if($j+1==$column)
				$ArrayCol[$i][0]= $this->numbers[$i][$j];
			}
		}
		$the_ArrayCol = new matrix($ArrayCol);
		return $the_ArrayCol;
	}
	
	//i-ta kolona preko objekta
	function ithCol_new($column){// preko objekata
		$ArrayCol=$this->zeros($this->get_num_rows(),$this->get_num_columns());//objekat nula matrica
		for($i=0; $i<$this->get_num_rows();$i++){   
			for($j=0; $j<$this->get_num_columns(); $j++){
				if($j+1==$column)
				$ArrayCol->numbers[$i][0]= $this->numbers[$i][$j];
			}
		}
		return $ArrayCol;
	}	
	//frst-i kolona
	function frstiCol($columns){
		$ArrayFcol=array();
		for($i=0; $i<$this->get_num_rows();$i++){   
			for($j=0; $j<$this->get_num_columns();$j++){
				if($j+1<=$columns)
				$ArrayFcol[$i][$j]=$this->numbers[$i][$j];
			}
		}
		
		$the_ArrayFcol = new matrix($ArrayFcol);
		return $the_ArrayFcol;
	}	

	//mat Num
	function matNum(){
		if($this->get_num_rows()==1 & $this->get_num_columns()==1)
		$matNum = $this->numbers[0][0];
		return $matNum;
	}	

	//is Zero
	function isZero(){
		$numZero=0;
		for($i=0; $i<$this->get_num_rows(); $i++) {   
			for($j=0; $j<$this->get_num_columns(); $j++){
				if(round($this->numbers[$i][$j],3)!=0)
				$numZero++;
			}
		}
		return $numZero;
	}	

	function mscalar($k){// bilo mskalar i vraca broj pa nije objekat
		$scalar=$this->numbers[$k-1][$k-1];	
		return $scalar;
	}

	function mMinus($k){//objekat posto se koristi u Inverse
		$mMatrica=array();
		for($i=0;$i<$k-1;$i++){
			for($j=0;$j<$k-1;$j++){
				$mMatrica[$i][$j]=$this->numbers[$i][$j];
			}
		}
		$the_minus = new matrix($mMatrica);
		return $the_minus;
	}
	
	function mColumn($k){// objekat posto treba za transponovanje i mnozenje
		$mColumn=array();
		for($i=0;$i<$k-1;$i++){
			$mColumn[$i][0]=$this->numbers[$i][$k-1];
		}
		$the_column = new matrix($mColumn);
		return $the_column;
	}
	function mMatrica($k){// objekat posto treba za transponovanje i mnozenje
		$mMatrica=array();
		for($i=0;$i<=$k;$i++){
			for($j=0;$j<=$k;$j++){
				$mMatrica[$i][$j]=$this->numbers[$i][$j];
			}
		}
		$the_mMatrica = new matrix($mMatrica);
		return $the_mMatrica;
	}
	
	function appRow($someMatrix2){// vraca objekat 
		for($i=0; $i<$someMatrix2->get_num_columns(); $i++){
			$this->numbers[$this->get_num_rows()][$i]=$someMatrix2->numbers[0][$i];
		}
		$the_appRow = new matrix($this->numbers);
		return $the_appRow;
	}	

	function finaly($someMatrix2){
		for($i=0;$i<$this->get_num_rows();$i++){
			$this->numbers[$i][$this->get_num_columns()]=$someMatrix2->numbers[$i][0];
		}
		$the_finaly = new matrix($this->numbers);
		return $the_finaly;
	}
	
	function Inverse(){//objekat
		$nii=$this->mscalar(1);
		$N=1/$nii;
		$N=array(array($N));// trebo bi ovo malo bolje resit
		$NO=new matrix($N);
		for($i=2;$i<=$this->get_num_columns();$i++){
			$s=$this->mscalar($i);
			$nii=array(array($s));
			$niii=new matrix($nii);
			$li=$this->mColumn($i);
			$lit=$li->transpose();
			$giip=$lit->times($NO);
			$gii1=$giip->times($li);
			$gii=$niii->minus($gii1);
			$gii2=$gii->matNum();
			$gii=1/$gii2;
			$fip=$NO->times($li);
			$fi1=$fip->s_times($gii);
			$fi=$fi1->s_times(-1);
			$fit=$fi->transpose();
			$E1=$fi->times($fit);
			$E2=$E1->s_times(1/$gii);
			$E=$NO->plus($E2);
			$ArrayData1=$E->appRow($fit);
			$giin=array(array($gii));
			$giin=new matrix($giin);
			$ArrayData2=$fi->appRow($giin);
			$NO=$ArrayData1->finaly($ArrayData2);
		}		
		return $NO;
	}

	function Grevile(){
		$AA=$this->ithCol(1);
		if($AA->isZero()==0) 
		$AR=$AA->transpose();
		else{
			$TA=$AA->transpose();
			$AR=$TA->times($AA);
			$pom=$AR->matNum();
			$AR=$TA->s_times(1/$pom);
		}
		// step 2
		for($i=2;$i<=$this->get_num_columns();$i++){
		// step 2.1
			$OO=$this->ithCol($i);
			$DD=$AR->times($OO);
		// step 2.2
			$FC=$this->frstiCol($i-1);
			$MM=$FC->times($DD);
			$CC=$OO->minus($MM);	
		// step 2.3
			if($CC->isZero()==0){
				$TDD=$DD->transpose();
				$P=$TDD->times($DD);
				$pom=1+$P->matNum();
				$TM=$AR->transpose();
				$MM=$TM->times($DD);
				$BB=$MM->s_times(1/$pom);
			}
			else{
				$TTM=$CC->transpose();
				$P=$TTM->times($CC);
				$pom=$P->matNum();
				$BB=$CC->s_times(1/$pom);
			}
		// step 2
			$EE=$BB->transpose();
			$QW=$DD->times($EE);
			$AR=$AR->minus($QW);
			$AR=$AR->appRow($EE);
		}
		return $AR;
	}
	
	function WeightedInverseO($ArrayDataMatrizM,$ArrayDataMatrizN){
		// step 1
		$aa=$this->ithCol(1);
		if($aa->isZero()==0) 
			$ar=$aa->transpose();
		else{
			$ta=$aa->transpose();
			$alb=$ta->times($ArrayDataMatrizM);
			$ali=$alb->times($aa);
			$inv=$ali->Inverse();
			$ar=$inv->times($alb);		
		}
		// step 2
		for($i=2;$i<=$this->get_num_columns();$i++){
		// step 2.1
			$ii=$this->ithCol($i);
			$di=$ar->times($ii);
		// step 2.2
			$fc=$this->frstiCol($i-1);
			$mm=$fc->times($di);
			$ci=$ii->minus($mm);		
			$nim1=$ArrayDataMatrizN->mMinus($i);
			$nim1g=$nim1->Inverse();
			$li=$ArrayDataMatrizN->mColumn($i);
		// step 2.3
			if($ci->isZero()==0){
				$nii=$ArrayDataMatrizN->mscalar($i);
				$dit=$di->transpose();
				$dtn=$dit->times($nim1);
				$dtnd=$dtn->times($di);
				$dtnd=$dtnd->matNum();
				$ditl=$dit->times($li);
				$lit=$li->transpose();
				$litdi=$lit->times($di);
				$ditdi=$ditl->plus($litdi);
				$ditdi=$ditdi->matNum();
				$nim1li=$nim1g->times($li);
				$litnli=$lit->times($nim1li);
				$litnli=$litnli->matNum();
				$lktar=$lit->times($ar);
				$arnklk=$fc->times($nim1li);			
				$novo=$lktar->times($arnklk);
				$novo=$novo->matNum();			
				$si=$nii+$dtnd-$ditdi-$litnli+$novo;
				$dtnar=$dtn->times($ar);
				$dilit=$dtnar->minus($lktar);
				$bit=$dilit->s_times(1/$si);
			}
			else{
				$cit=$ci->transpose();
				$citm=$cit->times($ArrayDataMatrizM);
				$pom=$citm->times($ci);
				$pom=$pom->matNum();
				$bit=$citm->s_times(1/$pom);
			}
		// step 2
			$nim1li=$nim1g->times($li);
			$arai=$ar->times($fc);
			$arnim1=$arai->times($nim1li);
			$pi=$nim1li->minus($arnim1);
			$k1=$di->times($bit);
			$ark1=$ar->minus($k1);
			$pib=$pi->times($bit);
			$ar=$ark1->minus($pib);
			$ar=$ar->appRow($bit);
		}
		return $ar;
	}
	
	function LMinverse($ArrayDataMatrizM,$ArrayDataMatrizN){
		// step 1
		$aa=$this->ithCol(1);
		if($this->isZero($aa)==0) 
			$ar=$this->transpose($aa);
		else{
			$ta=$this->transpose($aa);
			$alb=$ta->times($ArrayDataMatrizM);
			$ali=$alb->times($aa);
			$inv=$this->Inverse($ali);
			$ar=$inv->times($alb);		
		}
		$minusJedan=array(array(-1));
		$minusJedan=new matrix($minusJedan);
		// step 2
		for($i=2;$i<=$this->get_num_columns();$i++){
			// step 2.1
			$ai=$this->ithCol($i);
			$ni=$ar->times($ai);
			// step 2.2
			$fc=$this->frstiCol($i-1);
			$fcni=$fc->times($ni);	
			$di=$ai->minus($fcni);	
			// step 2.3
			$mm=$ArrayDataMatrizN->mMinus($i);
			$mmi=$this->Inverse($mm);
			$vm=$ArrayDataMatrizN->mColumn($i);
			$pro=$mmi->times($vm);
			$pro1=$ar->times($fc);
			$pro2=$this->eye($i-1,$i-1);
			$pi=$pro2->times($pro);
			// step 2.4
			if($this->isZero($di)==0){
				$z=$this->makeZero($this->get_num_rows());// napravi funkciju makeZero
				$ui=$ar->appRow($z);
				$qi=$ni->plus($pi);
				$qi=$qi->appRow($minusJedan);
				$qit=$this->transpose($qi);
				$deoM=$ArrayDataMatrizN->mMatrica($i);// napravi ovu funkciju
				$qitm=$qit->times($deoM);
				$bi=$qitm->times($qi);
				$pomb=$this->matNum($bi);
				$hipom=$qitm->s_times(1/$pomb);
				$ei=$hipom->times($ui);
			}
			else{
				$dnt=$this->transpose($di);
				$dlni=$dnt->times($ArrayDataMatrizM);
				$pom=$dlni->times($di);
				$pom=$this->matNum($pom);
				$ei=$dlni->s_times(1/$pom);
			}
			// step 2
			$k1=$ni->times($ei);
			$ar=$ar->minus($k1);
			$pd=$pi->times($ei);
			$ar=$ar->minus($pd);
			$ar=$ar->appRow($ei);
		}
		return $ar;
	}

/**
	 * 	Performs a PLU decomposition of this matrix.
	 * 	
	 * 	Pre-requisite : this matrix must be square. Otherwise an error message is echoed to the standard output.
	 *
	 *	This function sets two arrays containing the data for matrices : "P" "L", "U".
	 *
	 *	@return : The array $PLU which consists of $PLU['P_det'], $PLU['P'], $PLU['LU']. 
	 *
	 *  Example : if the matrix is : 2    1    1
	 *								 1    2    1
	 *								 1    1    2
	 *
	 *  The decomposition is then : 
	 *
	 *	L			 				 1    0    0
	 *								 1/2  1    0
	 *								 1/2  4/3  1
	 *
	 *	U			 				 2    1    1
	 *								 0    3/2  1/2
	 *								 0    0    4/3
	 *
	 *  P (determinant = 1)			 1    0    0 
	 *								 0    1    0
	 *								 0    0    1
	 *
	 *
	 *	So the return arrays will be : 
	 * 	$PLU['P'] 					 1    0    0 
	 *								 0    1    0
	 *								 0    0    1
	 *
	 *	$PLU['P_det']	: 1
	 *
	 *	And the we omit the ones in the L matrix to get a "stacked" array with LU : 
	 *
	 *	$PLU['LU'] together :		2    1    1
	 *								1/2  3/2  1/2
	 *								1/2  4/3  1							
	 *
	 */
	private function PLU()
	{
	 	if($this->is_square())
		{
			$PLU['LU'] = $this->numbers;
			$PLU['P'] = array();
			// Set the permutation matrix. 
			$PLU['P_set'] = 1;
			for($k = 0; $k < $this->get_num_rows(); $k++)
			{
				$PLU['P'][$k][$k] = 1; 
			}
		
			//For all rows of the matrix....
			for($k = 0; $k < $this->get_num_rows(); $k++)
			{
	    		//Find the highest value of the actual column, starting at $k and switch it.
	    		$row = $k;
	    		for($j = $k; $j < $this->get_num_rows(); $j++)
	    		{
	    			if($PLU['LU'][$j][$k] > $PLU['LU'][$row][$k])
	    			{
	    				$row = $j;
	    			}	
	    		}
	    		
	    		if($row != $k) //If they are not equal, we have to switch rows
	    		{

	    			//Row switching on L
	    			$temp = $PLU['LU'][$k];
	    			$PLU['LU'][$k] = $PLU['LU'][$row];
	    			$PLU['LU'][$row] = $temp;
	    				    			
	    			//Row switching on P
	    			$temp = $PLU['P'][$k];
	    			$PLU['P'][$k] = $PLU['P'][$row];
	    			$PLU['P'][$row] = $temp;
	    			$PLU['P_set'] *= -1;
	    		}
	    		
	    		//Then, we perform the algorithm on L 
	    		//(note : you gotta admire this. Such a small piece of code for a so powerful result)
	    		
	    		//For all the values in the column $k
	    		for($i = $k+1; $i < $this->get_num_rows(); $i++)
	    		{	
	    			//If we are below the diagonal, then we work on L...
			        if(empty($PLU['LU'][$i][$k]) == false and $i > $k)
			        {
			        	$PLU['LU'][$i][$k] = $PLU['LU'][$i][$k]/$PLU['LU'][$k][$k];
			        }
			        
			        //Now for all elements of the U matrix...
			    	for($j = $k+1; $j < $this->get_num_rows(); $j++)
			    	{
	       				if(empty($PLU['LU'][$i][$j]) == false)
	           			{
	           				if(empty($PLU['LU'][$k][$j]) == false)
	           				{
	           					$PLU['LU'][$i][$j] = $PLU['LU'][$i][$j] - $PLU['LU'][$i][$k] * $PLU['LU'][$k][$j];
	           				}
	           			}
	           			else
	           			{
	           				if(empty($PLU['LU'][$k][$j]) == false)
	           				{
	           					$PLU['LU'][$i][$j] = - $PLU['LU'][$i][$k] * $PLU['LU'][$k][$j];
	           				}
	           			}
	        		}
	    		}
			}	
			//P needs to be transposed
	    	foreach($PLU['P'] as $i => $row)
	    	{
	    		foreach($row as $j => $value)
	    		{
	    			$new_P[$j][$i] = $value; 
	    		}
	    	}
		}
		else
		{
			echo "Wrong dimensions in LU !!!<br><br>";
			$PLU['LU'] = $this->numbers;
		}
		return $PLU;
	}
	
	/**
	* Performs a PLU decomposition of this matrix.
	* 	
	* Pre-requisite :this matrix must be square. Otherwise an error message is echoed to the standard output.
	*
	* @return : A 2n x n matrix where :
	*			- the first n x n matrix is the permutation matrix.
	*			- the second n x n matrix is the LU decomposition "stacked" where "ones" of the lower diagonal matrix
	*			  are omitted (by convention).
	*
	*  Example : if the matrix is the 3 x 3 :   
	* 
	* 2    1    1
	*
	* 1    2    1
	*
	* 1    1    2
	*
	*  The decomposition is then : 
	*
	*	L:
	*
	* 1    0    0
	*
	* 1/2  1    0
	*
	* 1/2  4/3  1
	*
	*	U:
	*
	* 2    1    1
	*
	* 0    3/2  1/2
	*
	* 0    0    4/3
	*
	*   P:
	*
	* 1    0    0 
	*
	* 0    1    0
	*
	* 0    0    1
	*
	*
	*	So the return matrix will be : 
	*
	* 1    0    0   2    1    1
	*
	* 0    1    0   1/2  3/2  1/2
	*
	* 0    0    1   1/2  4/3  1			
	*
	*/
	function lu(){
		$PLU = $this->PLU();
		$n = $this->get_num_rows();
		for($i = 0; $i < $n; $i++){
			for($j = $n; $j < $n*2; $j++){
				$PLU['P'][$i][$j] = $PLU['LU'][$i][$j - $n];
			}
		}
		$the_lu = new matrix($PLU['P']);
		return $the_lu;
	}

		
	/**
	* Prints the matrix
	*
	* Prints the matrix in an ugly table with borders in the standard output. This is intended for debugging purpose.
	*/
	function print_matrix(){
		$numb = $this->numbers;
		echo '<table border="1">'."\n";
		for($i = 0; $i < $this->get_num_rows();$i++){
			echo "<tr>";
			for($j = 0; $j < $this->get_num_columns(); $j++){
				if(empty($numb[$i][$j]) == false){
					echo "<td>".$numb[$i][$j]."</td>";
				}
				else{
					echo "<td>0</td>";
				}
			}
			echo "<tr>\n";
		}
		echo "</table>\n";
	}
}

?>