<?php

// m i n
function m($fsadrzaj){
	$t=count($fsadrzaj);// dimenzija m
	return $t;
}

function n($fsadrzaj){
	$p=count(explode(" ",$fsadrzaj[0]));// dimenzija n
	return $p;
}

function dimenzija($fsadrzaj){
	$t=count($fsadrzaj);// dimenzija m
	$k= filesize($r);
	$podeljen[0]=explode(" ",$fsadrzaj[0]);
	$p=count($podeljen[0]);// dimenzija n
	$dimenzija = $t . "x" . $p;
	return $dimenzija;
}

function kreiraj($fsadrzaj){
	$t=count($fsadrzaj);// dimenzija m
	$niz="";
	for($i=0;$i<$t;$i++)
	{
		$fsadrzaj[$i]=rtrim($fsadrzaj[$i]).",";
		$niz = $niz . $fsadrzaj[$i];}
	$niz1=str_replace(" ",",",$niz);
	$niz2=substr($niz1,0,strlen($niz1)-1);// string predstavljen nizom svih elemenata odvojenih zarezom
	return $niz2;
}

function postoji($dimenzija, $niz2){
	$db_link = db_connect();
	$query4 = "select * from MATRICES_IN where DIMENSION = '$dimenzija'";
	$result4 = mysql_query($query4, $db_link);
	$zbir=0;
	while ($row = mysql_fetch_row($result4)){
		if($row[1] == $niz2){// ako je prvi red matrice isti ispituje drugi i td. do poslednjeg	 
			$zbir++;
			break;			
		}
	} 
	if($zbir==1){
		$id_matrice=$row[0];	
	}
	else
		$id_matrice=false;	
	return $id_matrice;
}

//unos matrice
function unos_matrice($niz2,$dimenzija){
	$db_link = db_connect();
	$query = "insert into MATRICES_IN(ELEMENTS_IN, DIMENSION) values('$niz2', '$dimenzija')";
	$result = mysql_query($query, $db_link);	
}

// upload fajla
function upload_file(){
	global $userfile, $userfile_name, $userfile_size, $userfile_type, $archive_dir, $WINDIR;
	if (isset($WINDIR)) $userfile = str_replace("\\\\", "\\", $userfile);
	$filename = basename($userfile_name);
	if ($userfile_size <= 0) die("$filename je prazan.");
	if (!@copy($userfile, "$archive_dir/$filename"))
	die("Can't copy $userfile_name to $filename.");
	if (!isset($WINDIR) && !@unlink($userfile))
	die("Can't delete the file $userfile_name.");
}	

// upload fajla2
function upload_file2(){
	global $userfile2, $userfile2_name, $userfile2_size, $userfile2_type, $archive_dir, $WINDIR;
	if (isset($WINDIR)) $userfile2 = str_replace("\\\\", "\\", $userfile2);
	$filename2 = basename($userfile2_name);
	if ($userfile2_size <= 0) die("$filename2 je prazan.");
	if (!@copy($userfile2, "$archive_dir/$filename2"))
	die("Can't copy $userfile2_name to $filename2.");
	if (!isset($WINDIR) && !@unlink($userfile2))
	die("Can't delete the file $userfile2_name.");
}	

// upload fajla2
function upload_file3(){
	global $userfile3, $userfile3_name, $userfile3_size, $userfile3_type, $archive_dir, $WINDIR;
	if (isset($WINDIR)) $userfile3 = str_replace("\\\\", "\\", $userfile3);
	$filename3 = basename($userfile3_name);
	if ($userfile3_size <= 0) die("$filename3 je prazan.");
	if (!@copy($userfile3, "$archive_dir/$filename3"))
	die("Can't copy $userfile3_name to $filename3.");
	if (!isset($WINDIR) && !@unlink($userfile3))
	die("Can't delete the file $userfile3_name.");
}	

// unos test
function unos_test_matrice($niz2,$dimenzija,$famous){
	$db_link = db_connect();
	$query = "insert into MATRICES_IN(ELEMENTS_IN, DIMENSION, FAMOUS) values('$niz2', '$dimenzija', '$famous')";
	$result = mysql_query($query, $db_link);
}

// selektovanje imena test matrice
function ime_test($userfile_name){
	$famous1=explode(".",$userfile_name);
	$famous=$famous1[0];//izvlacenje imena bez ekstenzije
	return $famous;
}
// pretraga tesst
function pretraga_test($fsadrzaj,$userfile_name){
	$db_link = db_connect();
	$famous=ime_test($userfile_name);	
	$query = "SELECT * FROM MATRICES_IN where FAMOUS = '$famous'";// broj unetih matrica dimenzija $dimenzija
	$result = mysql_query($query, $db_link);
	$row=mysql_fetch_array($result);
	if($row[0]==NULL){ //nema matrice unesi je
		$id_test_matrice=false;
	}
	else{ //prenesi kljuc
		$id_test_matrice=$row[0];
	}
	return $id_test_matrice;
}
// pretraga test za elemente
function pretraga_test_el($test){
	$db_link = db_connect();
	//$famous=ime_test($userfile_name);	
	$query = "SELECT * FROM MATRICES_IN where FAMOUS = '$ftest'";// broj unetih matrica dimenzija $dimenzija
	$result = mysql_query($query, $db_link);
	$row=mysql_fetch_array($result);
	if($row[0]==NULL){ //nema matrice unesi je
		$id_test_matrice=false;
	}
	else{ //prenesi kljuc
		$id_test_matrice=$row[0];
	}
	return $id_test_matrice;
}
//maksimum za id
function maximum(){
	$db_link = db_connect();
	$query4 = "SELECT max(ID_A) FROM MATRICES_IN";
	$result4 = mysql_query($query4,$db_link);
	$row1=mysql_fetch_array($result4);
	return $row1[0];
}

function prikaz_resenja($resenje,$m,$n){
	echo '<textarea name="textarea" cols="60" rows="11" readonly="readonly" wrap="off" id="textarea" style="overflow: scroll; overflow-y: scroll; overflow-x: scrool; background:#fffcf0">';
    $resenje = NthReplace($resenje,",",";",$n);
	$resenje = explode(";",$resenje);
    for($i=0;$i<count($resenje);$i++){
		echo ltrim($resenje[$i]);
	    echo "\n";
    }
	//echo $resenje;
  echo '</textarea>';
}

function create_txt($idA, $idB){
	$db_link = db_connect();
	$query = "SELECT * FROM matrices_out where KLJUCA = $idA AND KLJUCB = $idB";
	$result = mysql_query($query);
	$row = mysql_fetch_row($result);
	$string = $row[1];
	$myFile = "txt/" . $idA . "." . $idB . ".txt";
	$fh = fopen($myFile, 'w') or die("can't open file");
	//$stringData = "Bobby Bopper\n";
	fwrite($fh, $string);
	///$stringData = "Tracy Tanner\n";
	//fwrite($fh, $stringData);
	fclose($fh);
}
/*
//prethodno koriscena funkcija
function prikaz_resenja($resenje,$m,$n){
	for($i=0,$z=0;$i<$m;$i++){
		for($j=0;$j<$n;$j++,$z++){
			$matrixbd[$i][$j]=$resenje[$z];
			$zaok= round($matrixbd[$i][$j],3);
			echo "<input name=clanovi[] type=text size=\"2\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
			echo "&nbsp;&nbsp;&nbsp;";
		}
		echo "<br>";
	}
}
*/
function NthReplace($string,$find,$replace,$n) {
    $count = 0;
		for($i=0;$i<strlen($string);$i++){
		if($string[$i] == $find){
			$count++;
		}
		if($count == $n){
			$string[$i] = $replace;
			$count = 0;
		}
	}
	return $string;
} 

function prikaz_resenja_textarea($resenje,$m,$n){
	echo '<textarea name="textarea" cols="60" rows="11" readonly="readonly" wrap="off" id="textarea" style="overflow: scroll; overflow-y: scroll; overflow-x: scrool; background:#fffcf0">';
	//$resenje = implode($resenje,",");
    $resenje = NthReplace($resenje,",",";",$n);
	$resenje = explode(";",$resenje);
    for($i=0;$i<count($resenje);$i++){
		echo ltrim($resenje[$i]);
	    echo "\n";
    }
	//print_r($resenje);
  echo '</textarea>';
}

function makeDvodim($id,$m,$n){
	$db_link = db_connect();
	$query = "select * from MATRICES_IN where ID_A='$id'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$podeljen=explode(",",$row[1]);
	for($i=0,$z=0;$i<$m;$i++){
		for($j=0;$j<$n;$j++,$z++){
			$matrixDD[$i][$j]=$podeljen[$z];
		}
	}
	return $matrixDD;
}

function makeDvodim2($niz,$m,$n){
	$podeljen=explode(",",$niz);
	for($i=0,$z=0;$i<$m;$i++){
		for($j=0;$j<$n;$j++,$z++){
			$matrixDD[$i][$j]=$podeljen[$z];
		}
	}
	return $matrixDD;
}
function makeJeddim($resenje_prikaz,$m,$n){
	for($i=0,$z=0;$i<$m;$i++){
		for($j=0;$j<$n;$j++){
			$resenje[$z]=$resenje_prikaz[$i][$j];
			$z++;
		}
	}
	return $resenje;
}
/*
function prikaz_kad_nema($resenje,$m,$n){
	for($i=0,$z=0;$i<$m;$i++){
		for($j=0;$j<$n;$j++,$z++){
			$zaok= round($resenje[$z],3);
			echo "<input name=clanovi[] type=text size=\"2\" maxlength=\"5\" value=\"$zaok\"  class=\"style21\"  readonly=\"readonly\"> ";
			echo "&nbsp;&nbsp;&nbsp;";
		}
		echo "<br>";
	}
}
*/
function prikaz_kad_nema($resenje,$m,$n){
	echo '<textarea name="textarea" cols="60" rows="11" readonly="readonly" wrap="off" id="textarea" style="overflow: scroll; overflow-y: scroll; overflow-x: scrool; background:#fffcf0">';
    $resenje = implode($resenje,",");
	$resenje = NthReplace($resenje,",",";",$n);
	$resenje = explode(";",$resenje);
    for($i=0;$i<count($resenje);$i++){
		echo ltrim($resenje[$i]);
	    echo "\n";
    }
	//echo $resenje;
  echo '</textarea>';
}

function matrx_in_textarea($resenje,$m,$n){
	$r=12*$m;
	$s = $n+11;
	echo '<textarea name="textarea" cols="50" rows="11" readonly="readonly" wrap="off" id="textarea" style="overflow: scroll; overflow-y: scroll; overflow-x: scrool; background:#fffcf0">';
    //$resenje = explode(",",$resenje);
	//$resenje = implode($resenje,",");
	$resenje = NthReplace($resenje,",",";",$n);
	$resenje = explode(";",$resenje);
    for($i=0;$i<count($resenje);$i++){
		echo ltrim($resenje[$i]);
	    echo "\n";
    }
	//echo $resenje;
  echo '</textarea>';
  
}

function unos_matrice2($resenje_prikaz,$m,$n,$idA,$idB,$arithmetic,$r,$s,$p,$q){
	$db_link = db_connect();
	$dimenzija = $m . "x" . $n;
	$resenje=makeJeddim($resenje_prikaz,$m,$n);
	$niz1=implode(",",$resenje);
	$query = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,OPERATION,R,S,P,Q) values('$niz1', '$dimenzija', '$idA', '$idB', '$arithmetic', '$r', '$s', '$p', '$q')";
	$result = mysql_query($query, $db_link);
}

function unos_weighted($Weighted,$m,$n,$idA,$idB,$idC,$inverz){
	$db_link = db_connect();
	$resenje=makeJeddim($Weighted,$n,$m);
	$string_zarez = implode($resenje,",");
	$dimenzija = $n . "x" . $m;
	$query2 = "insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,KLJUCB,KLJUCC,OPERATION) values('$string_zarez','$dimenzija', '$idA','$idB','$idC','$inverz')";
	$result2 = mysql_query($query2, $db_link);
}

/*
// stara funkcija
function prikaz_weighted($idA,$idB,$idC,$m,$n,$inverz){
	$db_link = db_connect();
	$query = "select * from MATRICES_OUT where KLJUCA='$idA' and KLJUCB='$idB' and KLJUCC='$idC' and INVERSE ='$inverz'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	if($row[1]==NULL){
		$matricaW=false;
	}
	else{
		$podeljen=explode(",",$row["ELEMENTS"]);
		$matricaW=$podeljen;
	}
	return $matricaW;
}
*/

function prikaz_weighted($idA,$idB,$idC,$m,$n,$inverz){
	$db_link = db_connect();
	$query = "select * from MATRICES_OUT where KLJUCA='$idA' and KLJUCB='$idB' and KLJUCC='$idC' and OPERATION ='$inverz'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	//echo $row[1];
	if($row[1]==NULL){
		$matricaW=false;
	}
	else{
		//$podeljen=explode(",",$row["ELEMENTS"]);
		//$matricaW=$podeljen;
		$resenje=$row["ELEMENTS"];
		$matricaW=true;
	}
	//return $matricaW;
	echo '<textarea name="textarea" cols="60" rows="11" readonly="readonly" wrap="off" id="textarea" style="overflow: scroll; overflow-y: scroll; overflow-x: scrool; background:#fffcf0">';
    $resenje = NthReplace($resenje,",",";",$m);
	$resenje = explode(";",$resenje);
    for($i=0;$i<count($resenje);$i++){
		echo ltrim($resenje[$i]);
	    echo "\n";
    }
	//echo $resenje;
  echo '</textarea>';
  return $matricaW;
}

function input_solution($resenje,$idA,$m,$n){
	$db_link = db_connect();
	$string_zarez = implode($resenje,",");
	$dimenzija = $n . "x" . $m;
	$inverz='MP';
	$query="insert into MATRICES_OUT(ELEMENTS,DIMENSION,KLJUCA,OPERATION) values('$string_zarez', '$dimenzija', '$idA', '$inverz')";
	$result = mysql_query($query, $db_link);
}

function solution_exist($idA){
	$inverz='MP';
	$db_link = db_connect();
	$query = "select * from MATRICES_OUT where KLJUCA='$idA' and OPERATION ='$inverz'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	if($row[1]==NULL){
		$matrix_out=false;
	}
	else{
		$matrix_out=explode(",",$row["ELEMENTS"]);
	}
	return $matrix_out;
}
function replace($n){
    if($n==NULL)
	 return $n=0;	
	 else
	 return $n;
}

function dim_m($textarea){
if($textarea!=null){
	$selver=explode("\n",$textarea);
	$m=count($selver);
	return $m;
}
else
return 0;
}

function dim_n($textarea){
	$selver=explode("\n",$textarea);
	$m=count($selver);
	$r=array();
	for($i=0;$i<$m;$i++){
		$k[$i]=explode(" ",$selver[$i]);
		$e[$i]=count($k[$i]);
	}
	rsort($e);
	$n=$e[0];
	return $n;
}

function textarea($textarea){
	$selver=explode("\n",$textarea);
	$m=count($selver);
	$r=array();
	for($i=0;$i<$m;$i++){
		$k[$i]=explode(" ", $selver[$i]);
		$e[$i]=count($k[$i]);
	}
	rsort($e);
	$n= $e[0];
	$r=array();
	$s=array();
	$z="";
	for($i=0;$i<$m;$i++){
		$selver[$i]=trim($selver[$i]);
		$k[$i]=explode(" ",$selver[$i]);
		$t[$i]=array_map("replace", $k[$i]);//stavljanje na mesta null nule
		$t[$i]=array_pad($t[$i], $n, 0);
		$u=implode(",",$t[$i]);
		$l=trim($u);
		$z=$z . "," . $l;
		$s=array_merge($s,$t[$i]);
	}
	$z=ltrim($z,",");
	return $s;
}


?>