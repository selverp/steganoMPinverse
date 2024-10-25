<?php
function agreed($arithmetic,$m1,$m2,$n1,$n2,$time_start,$id_A,$id_B,$skalarr,$skalars,$skalarp,$skalarq,$equations,$powersa,$powersb,$products,$transpose,$determinants,$inverses){
	if($arithmetic!="arithmetic"){
		if(((($arithmetic=="sum")or($arithmetic=="A-B")or($arithmetic=="B-A")or($arithmetic=="rAsumsB"))and(($m1==$m2)and($n1==$n2)))or($arithmetic=="rA")or($arithmetic=="sB"))
			return 1;
		//echo "saglasne matrice";
		else
			return $p=11;
			//echo "nisu saglasne matrice";
	}
	if($powersa!="powers of A"){
		if(((($powersa=="A^4.A")or($powersa=="A^3.A")or($powersa=="A^2.A")or($powersa=="A.A")or($powersa=="A^p.A^q")or($powersa=="A^-1.A^-1")or($powersa=="A^-2.A^-1")or($powersa=="A^-3.A^-1")or($powersa=="A^-4.A^-1")or($powersa=="A^-1.A")or($powersa=="A.A^-1")or($powersa=="A^-1.A^-1")or($powersa=="A^-2.A^-1")or($powersa=="A^-3.A^-1")or($powersa=="A^-4.A^-1")or($powersa=="A^p.A^-q"))and($m1==$n1)))
			return 1;
		else
			return $p=2;
	}
	if($powersb!="powers of B"){
		if(((($powersb=="B^4.B")or($powersb=="B^3.B")or($powersb=="B^2.B")or($powersb=="B.B")or($powersb=="B^p.B^q")or($powersb=="B^-1.B^-1")or($powersb=="B^-2.B^-1")or($powersb=="B^-3.B^-1")or($powersb=="B^-4.B^-1")or($powersb=="B^-1.B")or($powersb=="B.B^-1"))and($m2==$n2)))
			return 1;
		else
			return $p=3;
	}
	
	if($products!="matrix products"){
		if(((($products=="A.B")or($products=="B^-1.A^-1"))and($m2==$n1))or((($products=="B.A")or($products=="A^-1.B^-1"))and($m1==$n2))or((($products=="B^-1.A")or($products=="A^-1.B"))and($m1==$m2))or((($products=="A.B^-1")or($products=="B.A^-1"))and($n1==$n2))or((($products=="A^p.B^q")or($products=="B^q.A^p"))and($n1==$n2 and $m1==$m2)))
			return 1;
		else
			return $p=4;
	}
	if($inverses!="inverses"){
		if((($inverses=="(A.B)^-1")and($n1==$m2))or(($inverses=="(B.A)^-1")and($n2==$m1))or(($inverses=="(A^p.B^q)^-1")and($n1==$m1)and($n2==$m2)and($m1==$m2))or(($inverses=="(A^p)^-1")and($n1==$m1))or(($inverses=="(B^q)^-1")and($n2==$m2))or($inverses=="A^-1")or($inverses=="B^-1")or($inverses=="A^T^-1")or($inverses=="B^T^-1")or($inverses=="(A^-1)^-1")or($inverses=="(B^-1)^-1"))
			return 1;
		else
			return $p=5;
	}
	if($determinants!="determinants"){
		if((($determinants=="det[A]")or($determinants=="det[A^-1]")or($determinants=="det[A^T]")or($determinants=="det[A^p]")and($m1==$n1))or(($determinants=="det[B]")or($determinants=="det[B^-1]")or($determinants=="det[B^T]")or($determinants=="det[B^q]")and($m2==$n2))or(($determinants=="det[A.B]")and($n1==$m2))or(($determinants=="det[A.B]")and($n1==$m2))or(($determinants=="det[B^-1.A]")and($m1==$m2))or(($determinants=="det[A^-1.B]")and($m1==$m2))or((($determinants=="det[A^p.B^q]")or($determinants=="det[B^q.A^p]"))and(($m1==$m2)and($n1==$n2))))
			return 1;
		else
			return $p=6;
	}
	if($transpose!="transpose"){
		if(($transpose=="A^T")or($transpose=="B^T")or(($transpose=="(A.B)^T")and($n1==$m1))or(($transpose=="(B.A)^T")and($n2==$m1))or(($transpose=="A^T.B^T")and($n2==$m1))or(($transpose=="B^T.A^T")and($n1==$m2)))
			return 1;
		else
			return $p=7;
	}
	if($determinants=="determinants" and $transpose=="transpose" and $determinants=="determinants" and $inverses=="inverses" and $arithmetic=="arithmetic" and $powersa=="powers of A" and $powersb=="powers of B")
	return $p=8;
}
$zabrana=agreed($arithmetic,$m1,$m2,$n1,$n2,$time_start,$id_A,$id_B,$skalarr,$skalars,$skalarp,$skalarq,$equations,$powersa,$powersb,$products,$transpose,$determinants,$inverses);

if($zabrana==1)
	header("Location:denseop2.php?m1=$m1&n1=$n1&m2=$m2&n2=$n2&time_start=$time_start&idA=$id_A&idB=$id_B&arithmetic=$arithmetic&r=$skalarr&s=$skalars&p=$skalarp&q=$skalarq&equations=$equations&powersa=$powersa&powersb=$powersb&products=$products&transpose=$transpose&determinants=$determinants&inverses=$inverses");
else{
	if($nacin=="browse")
	header("Location:dense.php?agree=$zabrana&nacin=$nacin&m1=$m1&n1=$n1&m2=$m2&n2=$n2&time_start=$time_start&idA=$id_A&idB=$id_B&arithmetic=$arithmetic&r=$skalarr&s=$skalars&p=$skalarp&q=$skalarq&equations=$equations&powersa=$powersa&powersb=$powersb&products=$products&transpose=$transpose&determinants=$determinants&inverses=$inverses");
	if($nacin=="element")
	header("Location:denseel1.php?agree=$zabrana&nacin=$nacin&m1=$m1&n1=$n1&m2=$m2&n2=$n2&time_start=$time_start&idA=$id_A&idB=$id_B&arithmetic=$arithmetic&r=$skalarr&s=$skalars&p=$skalarp&q=$skalarq&equations=$equations&powersa=$powersa&powersb=$powersb&products=$products&transpose=$transpose&determinants=$determinants&inverses=$inverses");
	if($nacin=="text")
	header("Location:densetex1.php?agree=$zabrana&nacin=$nacin&m1=$m1&n1=$n1&m2=$m2&n2=$n2&time_start=$time_start&idA=$id_A&idB=$id_B&arithmetic=$arithmetic&r=$skalarr&s=$skalars&p=$skalarp&q=$skalarq&equations=$equations&powersa=$powersa&powersb=$powersb&products=$products&transpose=$transpose&determinants=$determinants&inverses=$inverses&textarea=$textarea&textarea2=$textarea2");
	if($nacin=="testu")
header("Location:examples4.php?agree=$zabrana&nacin=$nacin&m1=$m1&n1=$n1&m2=$m2&n2=$n2&time_start=$time_start&idA=$id_A&idB=$id_B&arithmetic=$arithmetic&r=$skalarr&s=$skalars&p=$skalarp&q=$skalarq&equations=$equations&powersa=$powersa&powersb=$powersb&products=$products&transpose=$transpose&determinants=$determinants&inverses=$inverses");
}

//if((($determinants=="det[A^p.B^q]")or($determinants=="det[B^q.A^p]")) and($m1==$m2 and $n1==$n2))
//echo $m2;
?>