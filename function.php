<?php

// odabir i-te kolone
function ithCol($i, $matrica, $m, $n)
{
	$p=sizeof($matrica);
	for($b=$i-1,$z=0;$b<$p;$b=$b+$n, $z++)
	{
		$itaKolona[$z] = $matrica[$b];
	}
	return $itaKolona;
}

// odabir i-tog reda
function ithRow($i, $matrica, $m, $n)
{
	for($b=($i-1)*$n,$z=0;$b<$i*$n;$b++,$z++)
	{
		$itired[$z] = $matrica[$b];
	}
	return $itired;
}

// odabir prvih i kolona
function frstiCol($k, $matrica, $m, $n)
{
	$z=0;
	for($i=0;$i<$m;$i++)
	{
		for ($j=$i*$n; $j<($k+$i*$n); $j++,$z++)
		{
			$prvihiKolona[$z] = $matrica[$j];
		}
	}
	return $prvihiKolona;
}

// ispitivanje da li je matrica nula matrica
function isZero($matrica)
{	
	$dim = sizeof($matrica);
	$bn=0;
	for($i=0;$i<$dim;$i++)
	{
		$k=$matrica[$i];
		$k=round($k,3);
		if($k!=0)
		$bn=$bn+1;
		
	}
	return $bn;
}

// vracanje vrednosti matrice A1x1
function matNum($matrica)
{
	$dim = sizeof($matrica);
	if($dim==1)
		$jedanjedan=$matrica[0];
	return $jedanjedan;
}

// nadovezivanje matrica
function appRow($matrica1, $m1, $n1, $matrica2, $m2, $n2)
{
	$p=$m2*$n2;
	$q=$m1*$n1;
	$novan=$n1;
	$novam=$m1+$m2;
	$dim1=sizeof($matrica1);
	$dim2=sizeof($matrica2);
	$dim=$dim1+$dim2;
	for($i=$q,$j=0;$i<$dim;$i++,$j++)
	{
		$matrica1[$i]=$matrica2[$j];
		$novaMatrica = $matrica1;
	}
	return $novaMatrica;
}

// nula matrica dimenzija nxm
function zeroMat($m, $n)
{
	for($i=0;$i<$m*$n;$i=$i+$n)
	{
		for($j=$i;$j<$i+$n;$j++)
			$nulaMatrica[$j]=0;
	}
	return $nulaMatrica;
}

// matrica sa svim jedinicama dimenzija nxm
function jedMat($m,$n)
{
	for($i=0;$i<$m*$n;$i=$i+$n)
	{
		for($j=$i;$j<$i+$n;$j++)
		$jedMatrica[$j]=1;
	}
	return $jedMatrica;
}

// jedinicna matrica dimenzija nxm
function jedinicnaMat($m)
{
	$z=0;
	for($i=0;$i<$m;$i++)
	{
		for($j=0;$j<$m;$j++,$z++)
		if($i==$j)
		{
			$jedMatrica[$z]=1;
		}
		else
		{
			$jedMatrica[$z]=0;
		}
	}
	return $jedMatrica;
}

// oduzimanje matrica istog tipa mxn
function subsMat($matrica1, $matrica2, $m, $n)
{
	$z=0;
	$t=1;
	for($i=0;$i<$m*$n;$i=$i+$n)
	{
		for($j=$i;$j<$t*$n;$j++,$z++)
		{
			$rezultatO[$z] = $matrica1[$j] - $matrica2[$j];
		}
		$t++;
	}
	return $rezultatO;
}

// sabirabje matrica istog tipa mxn
function addMat($matrica1, $matrica2, $m, $n)
{
	$z=0;
	$t=1;
	for($i=0;$i<$m*$n;$i=$i+$n)
	{
		for($j=$i;$j<$t*$n;$j++,$z++)
		{	
			$rezultatSab[$z] = $matrica1[$j] + $matrica2[$j];
		}
		$t++;
	}
	return $rezultatSab;
}

//mnozenje matrice skalarom
function multSk($k, $matrica, $m, $n)
{
	for($i=0;$i<$m*$n;$i=$i+$n)
	{
		for($j=$i;$j<$i+$n;$j++)
		{
			$rezultatS[$j] = $k*$matrica[$j];
		}
	}
	return $rezultatS;
}

//transponovana matrica A
function transMat($matrica, $m, $n)
{
	$p=$m*$m;
	$dim=sizeof($matrica);
	$z=0;
	for($i=0;$i<$n;$i++)
	{
		for($j=$i;$j<=$dim-($n-$i);$j=$j+$n, $z++)
		{
			$rezultatT[$z] = $matrica[$j];
		}
	}
	return $rezultatT;
}

//proizvod dve matrice
function multMat($matrica1, $m1, $n1, $matrica2, $m2, $n2)
{
	$pom1=0;
	$pom2=0;
	$proizvod=0;
	$brojac=0;
	for($i=1;$i<=$m1;$i++)
	{
		$pom1=ithRow($i,$matrica1, $m1, $n1);
		for($j=1;$j<=$n2;$j++)
		{
			$proizvod=0;
			$pom2=ithCol($j,$matrica2, $m2, $n2);
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

//nula red reda $m
function makeZero($m)
{
	for($i=0;$i<$m;$i++)
	{
		$nula[$i]=0;
	}
	return $nula;
}

//mMatrica
function mMatrica($matrica,$m,$k)
{
	$z=0;
	for($i=0;$i<($k-1)*($m+1);$i=$i+$m)
	{
		for($j=$i;$j<$i+$k;$j++,$z++)
		{
			$mMatrica[$z]=$matrica[$j];
		}
	}
	return $mMatrica;
}
//mMinus
function mMinus($matrica,$m,$k)
{
	$z=0;
	for($i=0;$i<$k*$m;$i=$i+$m)
	{
		for($j=$i;$j<$i+$k;$j++,$z++)
		{
			$mMatrica[$z]=$matrica[$j];
		}
	}
	return $mMatrica;
}

// mkolona
function mColumn($matrica,$m,$k)
{
	$z=0;
	for($i=$k-1;$i<($k-1)*($m+1);$i=$i+$m,$z++)
	{
		$kolona[$z]=$matrica[$i];
	}
	return $kolona;
}

//mskalar
function mskalar($matrica,$m,$k)
{
	$g=($k-1)*($m+1);
	$skalar=$matrica[$g];	
	return $skalar;
}

//*****************************************************************
//Grevile rekurzivni algoritam za izracunavanje generisanih inverzi
//*****************************************************************
function Grevile($matrica, $m, $n)
{

// korak 1
	$AA=ithCol(1,$matrica,$m,$n);

	if(isZero($AA)== 0) 
	$AR = transMat($AA,$m, 1);
	else
	{
		$TA=transMat($AA,$m,1);
		$AR = multMat($TA,1,$m,$AA,$m,1);//umesto poslednje $m bilo $n
		$pom = matNum($AR);
		$AR=multSk(1/$pom,$TA,1,$m);
	}

// korak 2;
	for($i=2;$i<=$n;$i++)
	{

//korak 2.1
		$OO=ithCol($i,$matrica,$m,$n);
		$DD=multMat($AR,$i-1,$m,$OO,$m,1);

//korak 2.2
		$FC=frstiCol($i-1,$matrica,$m,$n);
		$MM=multMat($FC,$m,$i-1,$DD,$i-1,1);
		$II=ithCol($i,$matrica,$m,$n);
		$CC=subsMat($II,$MM,$m,1);	

//korak 2.3
		if(isZero($CC)==0)
		{
			$TDD=transMat($DD,$i-1,1);
			$P=multMat($TDD,1,$i-1, $DD,$i-1,1);
			$pom=1+matNum($P);
			$BB=multSk(1/$pom,multMat(transMat($AR,$i-1,$m),$m,$i-1,$DD,$i-1,1),$m,1);
		}
		else
		{
			$P=multMat(transMat($CC,$m,1),1,$m,$CC,$m,1);
			$pom=matNum($P);
			$BB=multSk(1/$pom,$CC,$m,1);
		}
		
// korak 2
		$EE=transMat($BB,$m,1);
		$QW=multMat($DD,$i-1,1,$EE,1,$m);
		$AR=subsMat($AR,$QW,$i-1,$m);
		$AR=appRow($AR,$i-1,$m,transMat($BB,$m,1),1,$m);
	}
	$rGrevile = $AR;	
	return $rGrevile;
}

//***************************************************
// algoritam za izracunavanje Tezinskog inverza
//***************************************************
function weightedInverse($matricaM,$matricaA,$matricaN,$m,$n)
{

// korak 1
	$aa=ithCol(1,$matricaA,$m,$n);
	if(isZero($aa)== 0) 
		$ar=transMat($aa,$m, 1);
	else
	{
		$ta=transMat($aa,$m,1);
		$alb=multMat($ta,1,$m,$matricaM,$m,$m);
		$ali=multMat($alb,1,$m,$aa,$m,1);
		$pom=matNum($ali);
		$ar=multSk(1/$pom,$alb,1,$m);
	}
		
// korak 2
for($i=2;$i<=$n;$i++)
	{
	
//korak 2.1
		$ai=ithCol($i,$matricaA,$m,$n);
		$di=multMat($ar,$i-1,$m,$ai,$m,1);

//korak 2.2
		$fc=frstiCol($i-1,$matricaA,$m,$n);
		$mm=multMat($fc,$m,$i-1,$di,$i-1,1);	
		$ii=ithCol($i,$matricaA,$m,$n);
		$ci=subsMat($ii,$mm,$m,1);	
		
//korak 2.3
		if(isZero($ci)==0)
		{
			$nii=mskalar($matricaN,$n,$i);
			$dit=transMat($di,$i-1,1);
			$nim1=mMinus($matricaN,$n,$i-1);
			$dtn=multMat($dit,1,$i-1,$nim1,$i-1,$i-1);
			$dtnd=multMat($dtn,1,$i-1,$di,$i-1,1);
			$dtnd=matNum($dtnd);
			$li=mColumn($matricaN,$n,$i);
			$ditl=multMat($dit,1,$i-1,$li,$i-1,1);
			$lit=transMat($li,$i-1,1);
			$litdi=multMat($lit,1,$i-1,$di,$i-1,1);
			$ditdi=addMat($ditl, $litdi, 1, 1);
			$ditdi=matNum($ditdi);
			$nim1g=Grevile($nim1,$i-1,$i-1);
			$nim1li=multMat($nim1g,$i-1,$i-1,$li,$i-1,1);
			$litnli=multMat($lit,1,$i-1,$nim1li,$i-1,1);
			$litnli=matNum($litnli);
			$arai=multMat($ar,$i-1,$m,$fc,$m,$i-1);
			$litarai=multMat($lit,1,$i-1,$arai,$i-1,$i-1);
			$litli=multMat($litarai,1,$i-1,$nim1li,$i-1,1);
			$litli=matNum($litli);
			$si=$nii+$dtnd-$ditdi-$litnli+$litli;//
			$ditnim1=multMat($dit,1,$i-1,$nim1,$i-1,$i-1);
			$dilit=subsMat($ditnim1,$lit,1,$i-1);
			$ditar=multMat($dilit,1,$i-1,$ar,$i-1,$m);
			$bit=multSk(1/$si,$ditar,1,$m);
		}
		else
		{
			$ci=subsMat($ii,$mm,$m,1);
			$cit=transMat($ci,$i-1,1);
			$citm=multMat($cit,1,$m, $matricaM,$m,$m);
			$pom=multMat($citm,1,$m, $ci,$m,1);
			$pom=matNum($pom);
			$bit=multSk(1/$pom,$citm,1,$m);
		}
	
// korak 2
		$nim1=mMinus($matricaN,$n,$i-1);
		$nim1g=Grevile($nim1,$i-1,$i-1);
		$li=mColumn($matricaN,$n,$i);
		$lit=transMat($li,$i-1,1);
		$nim1li=multMat($nim1g,$i-1,$i-1,$li,$i-1,1);
		$dinim1li=addMat($di,$nim1li,$i-1,1);
		$arai=multMat($ar,$i-1,$m,$fc,$m,$i-1);
		$arnim1=multMat($arai,$i-1,$i-1,$nim1li,$i-1,1);
		$zagrade=subsMat($dinim1li,$arnim1,$i-1,1);
		$zagradabit=multMat($zagrade,$i-1,1,$bit,1,$m);
		$ar=subsMat($ar,$zagradabit,$i-1,$m);
		$ar=appRow($ar,$i-1,$m,$bit,1,$m);
	}

	$weightedInverse = $ar;
	return $weightedInverse;
}

//***************************************************
// algoritam za izracunavanje generisanih LM inverzi
//***************************************************
function LMinverse($matricaL,$matricaA,$matricaM,$m,$n)
{

// korak 1
	$aa=ithCol(1,$matricaA,$m,$n);
	if(isZero($aa)== 0) 
		$ar=transMat($aa,$m, 1);
	else
	{
		$ta=transMat($aa,$m,1);
		$alb=multMat($ta,1,$m,$matricaL,$m,$m);
		$ali=multMat($alb,1,$m,$aa,$m,1);
		$pom=matNum($ali);
		$ar=multSk(1/$pom,$alb,1,$m);
	}

// korak 2
	for($i=2;$i<=$n;$i++)
	{

//korak 2.1
		$ai=ithCol($i,$matricaA,$m,$n);
		$ni=multMat($ar,$i-1,$m,$ai,$m,1);

//korak 2.2
		$fc=frstiCol($i-1,$matricaA,$m,$n);
		$mm=multMat($fc,$m,$i-1,$ni,$i-1,1);	
		$ii=ithCol($i,$matricaA,$m,$n);
		$di=subsMat($ii,$mm,$m,1);	

//korak 2.3
		$mm=mMinus($matricaM,$n,$i-1);
		$mmi=Grevile($mm,$i-1,$i-1);
		$vm=mColumn($matricaM,$n,$i);
		$pro=multMat($mmi,$i-1,$i-1,$vm,$i-1,1);
		$pro1=multMat($ar,$i-1,$m,$fc,$m,$i-1);
		$pro2=multMat($pro1,$i-1,$i-1,$pro,$i-1,1);
		$pi=subsMat($pro,$pro2,$i-1,1);
	
//korak 2.4
		if(isZero($di)==0)
		{
			$z=makeZero($m);
			$ui=appRow($ar,$i-1,$m,$z,1,$m);
			$qi=addMat($ni, $pi, $i-1, 1);
			$minusJedan=array(-1);
			$qi=appRow($qi,$i-1,1,$minusJedan,1,1);
			$qit=transMat($qi,$i,1);
			$deoM=mMatrica($matricaM,$n,$i);
			$qitm=multMat($qit,1,$i, $deoM,$i,$i);
			$bi=multMat($qitm,1,$i, $qi,$i,1);
			$pomb=matNum($bi);
			$hipom=multSk(1/$pomb,$qitm,1,$i);
			$ei=multMat($hipom,1,$i, $ui,$i,$m);
		}
		else
		{
			$dnt=transMat($di,$i-1,1);
			$dlni=multMat($dnt,1,$m, $matricaL,$m,$m);
			$pom=multMat($dlni,1,$m, $di,$m,1);
			$pom=matNum($pom);
			$ei=multSk(1/$pom,$dlni,1,$m);
		}
	
// korak 2
		$k1=multMat($ni,$i-1,1,$ei,1,$m);
		$ar=subsMat($ar,$k1,$i-1,$m);
		$pd=multMat($pi,$i-1,1,$ei,1,$m);
		$ar=subsMat($ar,$pd,$i-1,$m);
		$ar=appRow($ar,$i-1,$m,$ei,1,$m);
	}


	$rGrevile = $ar;
	return $rGrevile;
}

//***************************************************
// algoritam za izracunavanje polinomijalnih inverza
//***************************************************
function polinomial($matN,$m,$n,$nq,$ni,$bi)
{
	$q=$nq;
	$qi[1]=$q;
	$g1=($ni-1)*($ni-1);
	$g=($nq+1)*$g1;
	$z=0;
	for($t=0;$t<=$nq;$t++)
	{
		for($e=0;$e<$g1;$e++,$z++)
		{
			$matrica[$t+1][$e]=$matN[$z];
		}
	}
	
	for($a=0;$a<$n;$a++)
	{
		for($b=0;$b<=$q;$b++)
		{
			$A[$a+1][$b+1]=$matrica[$b+1];
		}
	}

	//$i=1;
	//X[1][$j+1]
	for($j=0;$j<=$q;$j++)
	{	
		$AI[1][$j+1]=ithCol(1,$A[1][$j+1],$m,$n);	
		$X[1][$j+1]=transMat($AI[1][$j+1],$m,1);//1xm
	}

	//Y[1][$j+1]
	for($j=0;$j<=2*$q;$j++)
	{
		$AI[1][$j+1]=ithCol(1,$A[1][$j+1],$m,$n);
		if($AI[1][$j+1]==array(0,0,0,0))
		{
			$Y[1][1]=array(1);
		}
		else
		{
			$Y[1][$j+1]=array(0);
			for($k=0;$k<=$j;$k++)
			{
				$AI[1][$j-$k+1]=ithCol(1,$A[1][$j-$k+1],$m,$n);
				$AI[1][$k+1]=ithCol(1,$A[1][$k+1],$m,$n);
				$AT[1][$j-$k+1]=transMat($AI[1][$j-$k+1],$m,1);
				$MULT[1][$k+1]=multMat($AT[1][$j-$k+1],1,$m,$AI[1][$k+1],$m,1);
				$Y[1][$j+1]=addMat($Y[1][$j+1],$MULT[1][$k+1],1,1);//1x1
			}	
		}
	}
	for($i=2;$i<=$n;$i++)
	{

	//$D[$i][$j+1]
		for($j=0;$j<=$q+$qi[$i-1];$j++)
		{
			$D[$i][$j+1]=array(0);
			for($k=0;$k<=$j;$k++)
			{
				$AI[$i][$k+1]=ithCol($i,$A[$i-1][$k+1],$m,$n);
				$MULT=multMat($X[$i-1][$j-$k+1],$i-1,$m,$AI[$i][$k+1],$m,1);
				$D[$i][$j+1]=addMat($D[$i][$j+1],$MULT,$i-1,1);//($i-1)x1
			}
		}
	//$C[$i][$j+1]
		$sumac=0;
		for($j=0;$j<=2*$q+$qi[$i-1];$j++)
		{
			$C[$i][$j+1]=array(0);
			for($k=0;$k<=$j;$k++)
			{
				$AI[$i][$j-$k+1]=ithCol($i,$A[$i-1][$j-$k+1],$m,$n);
				$MULT1=multMat($AI[$i][$j-$k+1],$m,1,$Y[$i-1][$k+1],1,1);
				$AF[$i-1][$j-$k+1]=frstiCol($i-1,$A[$i-1][$j-$k+1], $m, $n);
				$MULT2=multMat($AF[$i-1][$j-$k+1],$m,$i-1,$D[$i][$k+1],$i-1,1);
				$SUBS=subsMat($MULT1,$MULT2,$m,1);
				$C[$i][$j+1]=addMat($C[$i][$j+1],$SUBS,$m,1);//mx1
			}		
			for($y=0;$y<$m;$y++)
			{
				$sumac=$sumac+($C[$i][$j+1][$y]);
			}
		}		
		for($j=0;$j<=2*$q+$qi[$i-1];$j++)
		{		
			if($sumac==0)
			{			
				$qi[$i]=4*$q+5*$qi[$i-1];
				$l1[$i]=2*$q+3*$qi[$i-1];
				for($j=0;$j<=$q+2*$qi[$i-1];$j++)
				{
					$V[$i][$j+1]=array(0,0,0,0);
					for($k=0;$k<=$j;$k++)
					{
						$XT[$i-1][$j-$k+1]=transMat($X[$i-1][$j-$k+1],$i-1,$m);	
						$MULT=multMat($XT[$i-1][$j-$k+1],$m,$i-1,$D[$i][$k+1],$i-1,	1);
						$V[$i][$j+1]=addMat($V[$i][$j+1],$MULT,$m,1);//mx1	
					}
				}
				for($j=0;$j<=2*$q+2*$qi[$i-1];$j++)
				{
					$W[$i][$j+1]=array(0);
					for($k=0;$k<=$j;$k++)
					{
						$YT[$i-1][$j-$k+1]=transMat($Y[$i-1][$j-$k+1],1,1);
						$MULT1=multMat($YT[$i-1][$j-$k+1],1,1,$Y[$i-1][$k+1],1,1);
						$DT[$i][$j-$k+1]=transMat($D[$i][$j-$k+1],$i-1,1);
						$MULT2=multMat($DT[$i][$j-$k+1],1,$i-1,$D[$i][$k+1],$i-1,1);
						$SUBS=addMat($MULT1,$MULT2,1,1);//1x1
						$W[$i][$j+1]=addMat($W[$i][$j+1],$SUBS,1,1);
					}
				}
			}
			else	
			{
				$qi[$i]=8*$q+5*$qi[$i-1];
				$l1[$i]=4*$q+3*$qi[$i-1];
				for($j=0;$j<=3*$q+2*$qi[$i-1];$j++)
				{
					$V[$i][$j+1]=array(0,0,0,0);
					for($k=0;$k<=$j;$k++)
					{
						$YT[$i-1][$k+1]=transMat($Y[$i-1][$k+1],1,1);
						$MULT=multMat($C[$i][$j-$k+1],$m,1,$YT[$i-1][$k+1],1,1);
						$V[$i][$j+1]=addMat($V[$i][$j+1],$MULT,$m,1);//mx1
					}
				}
				for($j=0;$j<=4*$q+2*$qi[$i-1];$j++)
				{
					$W[$i][$j+1]=array(0);
					for($k=0;$k<=$j;$k++)
					{
						$CT[$i][$j-$k+1]=transMat($C[$i][$j-$k+1],$m,1);	
						$MULT=multMat($CT[$i][$j-$k+1],1,$m,$C[$i][$k+1],$m,1);
						$W[$i][$j+1]=addMat($W[$i][$j+1],$MULT,1,1);//1x1
					}
				}					
			}
		}
		for($j=0;$j<=$l1[$i]+$q;$j++)
		{
			$FI[$i][$j+1]=array(0);
			for($k=0;$k<=$j;$k++)
			{
				$WT[$i][$k+1]=transMat($W[$i][$k+1],1,1);
				$MULT=multMat($Y[$i-1][$j-$k+1],1,1,$WT[$i][$k+1],1,1);
				$FI[$i][$j+1]=addMat($FI[$i][$j+1],$MULT,1,1);//1x1
			}	
		}
		for($j=0;$j<=$l1[$i];$j++)
		{
			$TE[$i][$j+1]=array(0,0,0,0);
			for($k=0;$k<=$j;$k++)
			{	
				$WT[$i][$k+1]=transMat($W[$i][$k+1],1,1);
				$VT[$i][$k+1]=transMat($V[$i][$k+1],$m,1);
				$k1=matNum($WT[$i][$k+1]);
				$MULT1=multSk($k1,$X[$i-1][$j-$k+1],$i-1,$m);
				$MULT2=multMat($D[$i][$j-$k+1],$i-1,1,$VT[$i][$k+1],1,$m);
				$SUBS=subsMat($MULT1,$MULT2,$i-1,$m);	
				$TE[$i][$j+1]=addMat($TE[$i][$j+1],$SUBS,$i-1,$m);//($i-1)xm
			}
		}
		for($j=0;$j<=$qi[$i]+$q;$j++)
		{
			$Y[$i][$j+1]=array(0);
			for($k=0;$k<=$j;$k++)
			{
				$WT[$i][$k+1]=transMat($W[$i][$k+1],1,1);
				$MULT=multMat($FI[$i][$j-$k+1],1,1,$WT[$i][$k+1],1,1);
				$Y[$i][$j+1]=addMat($Y[$i][$j+1],$MULT,1,1);//1x1
			}
		}
		//$XG[$i][$j+1]
		for($j=0;$j<=$qi[$i];$j++)
		{
			$XG[$i][$j+1]=array(0,0,0,0);
			for($k=0;$k<=$j;$k++)
			{
				$WT[$i][$k+1]=transMat($W[$i][$k+1],1,1);
				$k1=matNum($WT[$i][$k+1]);
				$MULT=multSk($k1,$TE[$i][$j-$k+1],$i-1,$m);
				$XG[$i][$j+1]=addMat($XG[$i][$j+1],$MULT,$i-1,$m);//($i-1)xm
			}	
		}	

		//$XD[$i][$j+1]
		for($j=0;$j<=$qi[$i];$j++)
		{
			$XD[$i][$j+1]=array(0,0,0,0);
			for($k=0;$k<=$j;$k++)
			{
				$VT[$i][$k+1]=transMat($V[$i][$k+1],$m,1);
				$k2=matNum($FI[$i][$k+1]);
				$MULT=multSk($k2,$VT[$i][$j-$k+1],1,$m);
				$XD[$i][$j+1]=addMat($XD[$i][$j+1],$MULT,1,$m);//1xm
			}
		}
		//$XG[$i][$j+1]// mozda je ovde suvisna petlja za k, mozda ona usporava !!!!!!!
		for($j=0;$j<=$qi[$i];$j++)
		{			
			for($k=0;$k<=$j;$k++)
			{
				$X[$i][$j+1]=appRow($XG[$i][$j+1],$i-1,$m,$XD[$i][$j+1],1,$m);//$ixm
			}
		}	
	}
	if($bi==1)
	return $X;
	else
	return $Y;
	
}

function poly($matN,$m,$n,$mp,$np,$nq,$ni,$bi)
{
	$qi[1]=$q;
	$z=0;
	$si=$ni-1;
	$q=$nq;
	$z=0;
	for($t=0;$t<=$q;$t++){
		for($i=0;$i<($si*$mp);$i=$i+$mp){
			for($j=$i;$j<$i+$si;$j++){
				$matrica[$t+1][$z]=$matN[$t+1][$j];
				$z++;
			}
		}
	}
	for($a=0;$a<$n;$a++){
		for($b=0;$b<=$q;$b++){
			$A[$a+1][$b+1]=$matrica[$b+1];
		}
	}

	//$i=1;
	//X[1][$j+1]
	for($j=0;$j<=$q;$j++)
	{	
		$AI[1][$j+1]=ithCol(1,$A[1][$j+1],$m,$n);	
		$X[1][$j+1]=transMat($AI[1][$j+1],$m,1);//1xm
	}

	//Y[1][$j+1]
	for($j=0;$j<=2*$q;$j++)
	{
		$AI[1][$j+1]=ithCol(1,$A[1][$j+1],$m,$n);
		if($AI[1][$j+1]==array(0,0,0,0))
		{
			$Y[1][1]=array(1);
		}
		else
		{
			$Y[1][$j+1]=array(0);
			for($k=0;$k<=$j;$k++)
			{
				$AI[1][$j-$k+1]=ithCol(1,$A[1][$j-$k+1],$m,$n);
				$AI[1][$k+1]=ithCol(1,$A[1][$k+1],$m,$n);
				$AT[1][$j-$k+1]=transMat($AI[1][$j-$k+1],$m,1);
				$MULT[1][$k+1]=multMat($AT[1][$j-$k+1],1,$m,$AI[1][$k+1],$m,1);
				$Y[1][$j+1]=addMat($Y[1][$j+1],$MULT[1][$k+1],1,1);//1x1
			}	
		}
	}
	for($i=2;$i<=$n;$i++)
	{

	//$D[$i][$j+1]
		for($j=0;$j<=$q+$qi[$i-1];$j++)
		{
			$D[$i][$j+1]=array(0);
			for($k=0;$k<=$j;$k++)
			{
				$AI[$i][$k+1]=ithCol($i,$A[$i-1][$k+1],$m,$n);
				$MULT=multMat($X[$i-1][$j-$k+1],$i-1,$m,$AI[$i][$k+1],$m,1);
				$D[$i][$j+1]=addMat($D[$i][$j+1],$MULT,$i-1,1);//($i-1)x1
			}
		}
	//$C[$i][$j+1]
		$sumac=0;
		for($j=0;$j<=2*$q+$qi[$i-1];$j++)
		{
			$C[$i][$j+1]=array(0);
			for($k=0;$k<=$j;$k++)
			{
				$AI[$i][$j-$k+1]=ithCol($i,$A[$i-1][$j-$k+1],$m,$n);
				$MULT1=multMat($AI[$i][$j-$k+1],$m,1,$Y[$i-1][$k+1],1,1);
				$AF[$i-1][$j-$k+1]=frstiCol($i-1,$A[$i-1][$j-$k+1], $m, $n);
				$MULT2=multMat($AF[$i-1][$j-$k+1],$m,$i-1,$D[$i][$k+1],$i-1,1);
				$SUBS=subsMat($MULT1,$MULT2,$m,1);
				$C[$i][$j+1]=addMat($C[$i][$j+1],$SUBS,$m,1);//mx1
			}		
			for($y=0;$y<$m;$y++)
			{
				$sumac=$sumac+($C[$i][$j+1][$y]);
			}
		}		
		for($j=0;$j<=2*$q+$qi[$i-1];$j++)
		{		
			if($sumac==0)
			{			
				$qi[$i]=4*$q+5*$qi[$i-1];
				$l1[$i]=2*$q+3*$qi[$i-1];
				for($j=0;$j<=$q+2*$qi[$i-1];$j++)
				{
					$V[$i][$j+1]=array(0,0,0,0);
					for($k=0;$k<=$j;$k++)
					{
						$XT[$i-1][$j-$k+1]=transMat($X[$i-1][$j-$k+1],$i-1,$m);	
						$MULT=multMat($XT[$i-1][$j-$k+1],$m,$i-1,$D[$i][$k+1],$i-1,	1);
						$V[$i][$j+1]=addMat($V[$i][$j+1],$MULT,$m,1);//mx1	
					}
				}
				for($j=0;$j<=2*$q+2*$qi[$i-1];$j++)
				{
					$W[$i][$j+1]=array(0);
					for($k=0;$k<=$j;$k++)
					{
						$YT[$i-1][$j-$k+1]=transMat($Y[$i-1][$j-$k+1],1,1);
						$MULT1=multMat($YT[$i-1][$j-$k+1],1,1,$Y[$i-1][$k+1],1,1);
						$DT[$i][$j-$k+1]=transMat($D[$i][$j-$k+1],$i-1,1);
						$MULT2=multMat($DT[$i][$j-$k+1],1,$i-1,$D[$i][$k+1],$i-1,1);
						$SUBS=addMat($MULT1,$MULT2,1,1);//1x1
						$W[$i][$j+1]=addMat($W[$i][$j+1],$SUBS,1,1);
					}
				}
			}
			else	
			{
				$qi[$i]=8*$q+5*$qi[$i-1];
				$l1[$i]=4*$q+3*$qi[$i-1];
				for($j=0;$j<=3*$q+2*$qi[$i-1];$j++)
				{
					$V[$i][$j+1]=array(0,0,0,0);
					for($k=0;$k<=$j;$k++)
					{
						$YT[$i-1][$k+1]=transMat($Y[$i-1][$k+1],1,1);
						$MULT=multMat($C[$i][$j-$k+1],$m,1,$YT[$i-1][$k+1],1,1);
						$V[$i][$j+1]=addMat($V[$i][$j+1],$MULT,$m,1);//mx1
					}
				}
				for($j=0;$j<=4*$q+2*$qi[$i-1];$j++)
				{
					$W[$i][$j+1]=array(0);
					for($k=0;$k<=$j;$k++)
					{
						$CT[$i][$j-$k+1]=transMat($C[$i][$j-$k+1],$m,1);	
						$MULT=multMat($CT[$i][$j-$k+1],1,$m,$C[$i][$k+1],$m,1);
						$W[$i][$j+1]=addMat($W[$i][$j+1],$MULT,1,1);//1x1
					}
				}					
			}
		}
		for($j=0;$j<=$l1[$i]+$q;$j++)
		{
			$FI[$i][$j+1]=array(0);
			for($k=0;$k<=$j;$k++)
			{
				$WT[$i][$k+1]=transMat($W[$i][$k+1],1,1);
				$MULT=multMat($Y[$i-1][$j-$k+1],1,1,$WT[$i][$k+1],1,1);
				$FI[$i][$j+1]=addMat($FI[$i][$j+1],$MULT,1,1);//1x1
			}	
		}
		for($j=0;$j<=$l1[$i];$j++)
		{
			$TE[$i][$j+1]=array(0,0,0,0);
			for($k=0;$k<=$j;$k++)
			{	
				$WT[$i][$k+1]=transMat($W[$i][$k+1],1,1);
				$VT[$i][$k+1]=transMat($V[$i][$k+1],$m,1);
				$k1=matNum($WT[$i][$k+1]);
				$MULT1=multSk($k1,$X[$i-1][$j-$k+1],$i-1,$m);
				$MULT2=multMat($D[$i][$j-$k+1],$i-1,1,$VT[$i][$k+1],1,$m);
				$SUBS=subsMat($MULT1,$MULT2,$i-1,$m);	
				$TE[$i][$j+1]=addMat($TE[$i][$j+1],$SUBS,$i-1,$m);//($i-1)xm
			}
		}
		for($j=0;$j<=$qi[$i]+$q;$j++)
		{
			$Y[$i][$j+1]=array(0);
			for($k=0;$k<=$j;$k++)
			{
				$WT[$i][$k+1]=transMat($W[$i][$k+1],1,1);
				$MULT=multMat($FI[$i][$j-$k+1],1,1,$WT[$i][$k+1],1,1);
				$Y[$i][$j+1]=addMat($Y[$i][$j+1],$MULT,1,1);//1x1
			}
		}
		//$XG[$i][$j+1]
		for($j=0;$j<=$qi[$i];$j++)
		{
			$XG[$i][$j+1]=array(0,0,0,0);
			for($k=0;$k<=$j;$k++)
			{
				$WT[$i][$k+1]=transMat($W[$i][$k+1],1,1);
				$k1=matNum($WT[$i][$k+1]);
				$MULT=multSk($k1,$TE[$i][$j-$k+1],$i-1,$m);
				$XG[$i][$j+1]=addMat($XG[$i][$j+1],$MULT,$i-1,$m);//($i-1)xm
			}	
		}	

		//$XD[$i][$j+1]
		for($j=0;$j<=$qi[$i];$j++)
		{
			$XD[$i][$j+1]=array(0,0,0,0);
			for($k=0;$k<=$j;$k++)
			{
				$VT[$i][$k+1]=transMat($V[$i][$k+1],$m,1);
				$k2=matNum($FI[$i][$k+1]);
				$MULT=multSk($k2,$VT[$i][$j-$k+1],1,$m);
				$XD[$i][$j+1]=addMat($XD[$i][$j+1],$MULT,1,$m);//1xm
			}
		}
		//$XG[$i][$j+1]// mozda je ovde suvisna petlja za k, mozda ona usporava !!!!!!!
		for($j=0;$j<=$qi[$i];$j++)
		{			
			for($k=0;$k<=$j;$k++)
			{
				$X[$i][$j+1]=appRow($XG[$i][$j+1],$i-1,$m,$XD[$i][$j+1],1,$m);//$ixm
			}
		}	
	}
	if($bi==1)
	return $X;
	else
	return $Y;	
}

?>