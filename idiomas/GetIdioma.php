<?php

class GetIdioma{

	public $valnum="";

	function ES($number,$lan){
		$res = $this->milmillon($number);
		if ($lan=="en") {
		$parts=explode(" ", $res);
		$val=count($parts);
		for ($i=$val; $i >= 0 ; $i--) { 
				$this->ingles($parts[$i]);
			}
		 return $this->valnum;
		}else{
		  return $res;
		}
	}

	function ingles($val){
		switch ($val) {
			case 'UNO':
			  $this->valnum="ONE"." ".$this->valnum;  
				break;
			case 'DOS':
			  $this->valnum="TWO"." ".$this->valnum;
				break;
			case 'TRES':
			  $this->valnum="THREE"." ".$this->valnum;  
			break;
			case 'CUATRO':	
			  $this->valnum="FOUR"." ".$this->valnum; 
				break;
			case 'CINCO':
			  $this->valnum="FIVE"." ".$this->valnum; 
				break;
			case 'SEIS':
			  $this->valnum="SIX"." ".$this->valnum;
				break;
			case 'SIETE':
			  $this->valnum="SEVEN"." ".$this->valnum;  
				break;
			case 'OCHO':
			  $this->valnum="EIGTH"." ".$this->valnum;  
				break;
			case 'NUEVE':
			  $this->valnum="NINE"." ".$this->valnum; 
				break;
			case 'DIEZ':
			  $this->valnum="TEN"." ".$this->valnum;
				break;
			case 'ONCE':
			  $this->valnum="ELEVEN"." ".$this->valnum;  
				break;
			case 'DOCE':
			  $this->valnum="TWOELVE"." ".$this->valnum;  
				break;
			case 'TRECE':
			  $this->valnum="THIRTEEN"." ".$this->valnum;  
				break;
			case 'CATORCE':
			  $this->valnum="FOURTEEN"." ".$this->valnum;  
				break;
			case 'QUINCE':
			  $this->valnum="FIVETEEN"." ".$this->valnum;  
				break;
			case 'DIECISEIS':
			  $this->valnum="SIXTEEN"." ".$this->valnum;  
				break;
			case 'DIECISIETE':
			  $this->valnum="SEVENTEEN"." ".$this->valnum;  
				break;
			case 'DIECIOCHO':
			  $this->valnum="EIGTHTEEN"." ".$this->valnum;  
				break;
			case 'DIECINUEVE':
			  $this->valnum="NINETHEEN"." ".$this->valnum;  
				break;
			case 'VEINTE':
			  $this->valnum="TWENTY"." ".$this->valnum; 
				break;
			case 'TREINTA':
			  $this->valnum="THIRTY"." ".$this->valnum; 
				break;
			case 'CUARENTA':
			  $this->valnum="FORTY"." ".$this->valnum;
				break;
			case 'CINCUENTA':
			  $this->valnum="FIFTY"." ".$this->valnum;
				break;
			case 'SESENTA':
			  $this->valnum="SIXTY"." ".$this->valnum;
				break;
			case 'SETENTA':
			  $this->valnum="SEVENTY"." ".$this->valnum;  
				break;
			case 'OCHENTA':
			  $this->valnum="EIGTHY"." ".$this->valnum; 
				break;
			case 'NOVENTA':
			  $this->valnum="NINETY"." ".$this->valnum;  
				break;
			case 'CIEN':
			  $this->valnum="ONE HUNDRED"." ".$this->valnum; 
				break;
			case 'DOSCIENTOS':
			  $this->valnum="TWO HUNDRED"." ".$this->valnum; 
				break;
			case 'TRESCIENTOS':
			  $this->valnum="THREE HUNDRED"." ".$this->valnum;  
				break;
			case 'CUATROCIENTOS':
			  $this->valnum="FOUR HUNDRED"." ".$this->valnum;  
				break;
			case 'QUINIENTOS':
			  $this->valnum="FIVE HUNDRED"." ".$this->valnum;  
				break;
			case 'SETECIENTOS':
			  $this->valnum="SIX HUNDRED"." ".$this->valnum; 
				break;
			case 'SETECIENTOS':
			  $this->valnum="SEVEN HUNDRED"." ".$this->valnum;  
				break;
			case 'OCHOCIENTOS':
			  $this->valnum="EIGTH HUNDRED"." ".$this->valnum;  
				break;
			case 'NOVECIENTOS':
			  $this->valnum="NINE HUNDRED"." ".$this->valnum;  
				break;
			case 'MIL':
			  $this->valnum="THOUSAND"." ".$this->valnum;  
				break;
			case 'MILLON':
			  $this->valnum="MILLION"." ".$this->valnum;  
				break;
			case 'MILLONES':
			  $this->valnum="MILLIONS"." ".$this->valnum;  
				break;
			case 'Y':
			  $this->valnum="AND"." ".$this->valnum;  
				break;
			default:
			 $this->valnum=$this->valnum."";
				break;
		}
	}

  function italiano($val){
		switch ($val) {
			case 'UNO':
			  $this->valnum="UNO"." ".$this->valnum;  
				break;
			case 'DOS':
			  $this->valnum="DUE"." ".$this->valnum;
				break;
			case 'TRES':
			  $this->valnum="TRES"." ".$this->valnum;  
			break;
			case 'CUATRO':	
			  $this->valnum="QUATRO"." ".$this->valnum; 
				break;
			case 'CINCO':
			  $this->valnum="CHINQUE"." ".$this->valnum; 
				break;
			case 'SEIS':
			  $this->valnum="SEIS"." ".$this->valnum;
				break;
			case 'SIETE':
			  $this->valnum="SIETE"." ".$this->valnum;  
				break;
			case 'OCHO':
			  $this->valnum="OTTO"." ".$this->valnum;  
				break;
			case 'NUEVE':
			  $this->valnum="NINE"." ".$this->valnum; 
				break;
			case 'DIEZ':
			  $this->valnum="TEN"." ".$this->valnum;
				break;
			case 'ONCE':
			  $this->valnum="ELEVEN"." ".$this->valnum;  
				break;
			case 'DOCE':
			  $this->valnum="TWOELVE"." ".$this->valnum;  
				break;
			case 'TRECE':
			  $this->valnum="THIRTEEN"." ".$this->valnum;  
				break;
			case 'CATORCE':
			  $this->valnum="FOURTEEN"." ".$this->valnum;  
				break;
			case 'QUINCE':
			  $this->valnum="FIVETEEN"." ".$this->valnum;  
				break;
			case 'DIECISEIS':
			  $this->valnum="SIXTEEN"." ".$this->valnum;  
				break;
			case 'DIECISIETE':
			  $this->valnum="SEVENTEEN"." ".$this->valnum;  
				break;
			case 'DIECIOCHO':
			  $this->valnum="EIGTHTEEN"." ".$this->valnum;  
				break;
			case 'DIECINUEVE':
			  $this->valnum="NINETHEEN"." ".$this->valnum;  
				break;
			case 'VEINTE':
			  $this->valnum="TWENTY"." ".$this->valnum; 
				break;
			case 'TREINTA':
			  $this->valnum="THIRTY"." ".$this->valnum; 
				break;
			case 'CUARENTA':
			  $this->valnum="FORTY"." ".$this->valnum;
				break;
			case 'CINCUENTA':
			  $this->valnum="FIFTY"." ".$this->valnum;
				break;
			case 'SESENTA':
			  $this->valnum="SIXTY"." ".$this->valnum;
				break;
			case 'SETENTA':
			  $this->valnum="SEVENTY"." ".$this->valnum;  
				break;
			case 'OCHENTA':
			  $this->valnum="EIGTHY"." ".$this->valnum; 
				break;
			case 'NOVENTA':
			  $this->valnum="NINETY"." ".$this->valnum;  
				break;
			case 'CIEN':
			  $this->valnum="ONE HUNDRED"." ".$this->valnum; 
				break;
			case 'DOSCIENTOS':
			  $this->valnum="TWO HUNDRED"." ".$this->valnum; 
				break;
			case 'TRESCIENTOS':
			  $this->valnum="THREE HUNDRED"." ".$this->valnum;  
				break;
			case 'CUATROCIENTOS':
			  $this->valnum="FOUR HUNDRED"." ".$this->valnum;  
				break;
			case 'QUINIENTOS':
			  $this->valnum="FIVE HUNDRED"." ".$this->valnum;  
				break;
			case 'SETECIENTOS':
			  $this->valnum="SIX HUNDRED"." ".$this->valnum; 
				break;
			case 'SETECIENTOS':
			  $this->valnum="SEVEN HUNDRED"." ".$this->valnum;  
				break;
			case 'OCHOCIENTOS':
			  $this->valnum="EIGTH HUNDRED"." ".$this->valnum;  
				break;
			case 'NOVECIENTOS':
			  $this->valnum="NINE HUNDRED"." ".$this->valnum;  
				break;
			case 'MIL':
			  $this->valnum="THOUSAND"." ".$this->valnum;  
				break;
			case 'MILLON':
			  $this->valnum="MILLION"." ".$this->valnum;  
				break;
			case 'MILLONES':
			  $this->valnum="MILLIONS"." ".$this->valnum;  
				break;
			case 'Y':
			  $this->valnum="AND"." ".$this->valnum;  
				break;
			default:
			 $this->valnum=$this->valnum."";
				break;
		}
	}

  //posngo este comentario para joder el merge
	function unidad($numuero){
    $numu="";
    switch ($numuero)
    {
    case 9:
    {
    $numu = "NUEVE";
    break;
    }
    case 8:
    {
    $numu = "OCHO";
    break;
    }
    case 7:
    {
    $numu = "SIETE";
    break;
    }
    case 6:
    {
    $numu = "SEIS";
    break;
    }
    case 5:
    {
    $numu = "CINCO";
    break;
    }
    case 4:
    {
    $numu = "CUATRO";
    break;
    }
    case 3:
    {
    $numu = "TRES";
    break;
    }
    case 2:
    {
    $numu = "DOS";
    break;
    }
    case 1:
    {
    $numu = "UNO";
    break;
    }
    case 0:
    {
    $numu = "";
    break;
    }
    }
    return $numu;
    }

    function decena($numdero){

    if ($numdero >= 90 && $numdero <= 99)
    {
    $numd = "NOVENTA ";
    if ($numdero > 90)
    $numd = $numd."Y ".($this->unidad($numdero - 90));
    }
    else if ($numdero >= 80 && $numdero <= 89)
    {
    $numd = "OCHENTA ";
    if ($numdero > 80)
    $numd = $numd."Y ".($this->unidad($numdero - 80));
    }
    else if ($numdero >= 70 && $numdero <= 79)
    {
    $numd = "SETENTA ";
    if ($numdero > 70)
    $numd = $numd."Y ".($this->unidad($numdero - 70));
    }
    else if ($numdero >= 60 && $numdero <= 69)
    {
    $numd = "SESENTA ";
    if ($numdero > 60)
    $numd = $numd."Y ".($this->unidad($numdero - 60));
    }
    else if ($numdero >= 50 && $numdero <= 59)
    {
    $numd = "CINCUENTA ";
    if ($numdero > 50)
    $numd = $numd."Y ".($this->unidad($numdero - 50));
    }
    else if ($numdero >= 40 && $numdero <= 49)
    {
    $numd = "CUARENTA ";
    if ($numdero > 40)
    $numd = $numd."Y ".($this->unidad($numdero - 40));
    }
    else if ($numdero >= 30 && $numdero <= 39)
    {
    $numd = "TREINTA ";
    if ($numdero > 30)
    $numd = $numd."Y ".($this->unidad($numdero - 30));
    }
    else if ($numdero >= 20 && $numdero <= 29)
    {
    if ($numdero == 20)
    $numd = "VEINTE ";
    else
    $numd = "VEINTI".($this->unidad($numdero - 20));
    }
    else if ($numdero >= 10 && $numdero <= 19)
    {
    switch ($numdero){
    case 10:
    {
    $numd = "DIEZ ";
    break;
    }
    case 11:
    {
    $numd = "ONCE ";
    break;
    }
    case 12:
    {
    $numd = "DOCE ";
    break;
    }
    case 13:
    {
    $numd = "TRECE ";
    break;
    }
    case 14:
    {
    $numd = "CATORCE ";
    break;
    }
    case 15:
    {
    $numd = "QUINCE ";
    break;
    }
    case 16:
    {
    $numd = "DIECISEIS ";
    break;
    }
    case 17:
    {
    $numd = "DIECISIETE ";
    break;
    }
    case 18:
    {
    $numd = "DIECIOCHO ";
    break;
    }
    case 19:
    {
    $numd = "DIECINUEVE ";
    break;
    }
    }
    }
    else
    $numd = $this->unidad($numdero);
    return $numd;
    }

    function centena($numc){
    if ($numc >= 100)
    {
    if ($numc >= 900 && $numc <= 999)
    {
    $numce = "NOVECIENTOS ";
    if ($numc > 900)
    $numce = $numce.($this->decena($numc - 900));
    }
    else if ($numc >= 800 && $numc <= 899)
    {
    $numce = "OCHOCIENTOS ";
    if ($numc > 800)
    $numce = $numce.($this->decena($numc - 800));
    }
    else if ($numc >= 700 && $numc <= 799)
    {
    $numce = "SETECIENTOS ";
    if ($numc > 700)
    $numce = $numce.($this->decena($numc - 700));
    }
    else if ($numc >= 600 && $numc <= 699)
    {
    $numce = "SEISCIENTOS ";
    if ($numc > 600)
    $numce = $numce.($this->decena($numc - 600));
    }
    else if ($numc >= 500 && $numc <= 599)
    {
    $numce = "QUINIENTOS ";
    if ($numc > 500)
    $numce = $numce.($this->decena($numc - 500));
    }
    else if ($numc >= 400 && $numc <= 499)
    {
    $numce = "CUATROCIENTOS ";
    if ($numc > 400)
    $numce = $numce.($this->decena($numc - 400));
    }
    else if ($numc >= 300 && $numc <= 399)
    {
    $numce = "TRESCIENTOS ";
    if ($numc > 300)
    $numce = $numce.($this->decena($numc - 300));
    }
    else if ($numc >= 200 && $numc <= 299)
    {
    $numce = "DOSCIENTOS ";
    if ($numc > 200)
    $numce = $numce.($this->decena($numc - 200));
    }
    else if ($numc >= 100 && $numc <= 199)
    {
    if ($numc == 100)
    $numce = "CIEN ";
    else
    $numce = "CIENTO ".($this->decena($numc - 100));
    }
    }
    else
    $numce = $this->decena($numc);

    return $numce;
    }

    function miles($nummero){
    if ($nummero >= 1000 && $nummero < 2000){
    $numm = "MIL ".($this->centena($nummero%1000));
    }
    if ($nummero >= 2000 && $nummero <10000){
    $numm = $this->unidad(Floor($nummero/1000))." MIL ".($this->centena($nummero%1000));
    }
    if ($nummero < 1000)
    $numm = $this->centena($nummero);

    return $numm;
    }

    function decmiles($numdmero){
    if ($numdmero == 10000)
    $numde = "DIEZ MIL";
    if ($numdmero > 10000 && $numdmero <20000){
    $numde = $this->decena(Floor($numdmero/1000))."MIL ".($this->centena($numdmero%1000));
    }
    if ($numdmero >= 20000 && $numdmero <100000){
    $numde = $this->decena(Floor($numdmero/1000))." MIL ".($this->miles($numdmero%1000));
    }
    if ($numdmero < 10000)
    $numde = $this->miles($numdmero);

    return $numde;
    }

    function cienmiles($numcmero){
    if ($numcmero == 100000)
    $num_letracm = "CIEN MIL";
    if ($numcmero >= 100000 && $numcmero <1000000){
    $num_letracm = $this->centena(Floor($numcmero/1000))." MIL ".($this->centena($numcmero%1000));
    }
    if ($numcmero < 100000)
    $num_letracm = $this->decmiles($numcmero);
    return $num_letracm;
    }

    function millon($nummiero){
    if ($nummiero >= 1000000 && $nummiero <2000000){
    $num_letramm = "UN MILLON ".($this->cienmiles($nummiero%1000000));
    }
    if ($nummiero >= 2000000 && $nummiero <10000000){
    $num_letramm = $this->unidad(Floor($nummiero/1000000))." MILLONES ".($this->cienmiles($nummiero%1000000));
    }
    if ($nummiero < 1000000)
    $num_letramm = $this->cienmiles($nummiero);

    return $num_letramm;
    }

    function decmillon($numerodm){
    if ($numerodm == 10000000)
    $num_letradmm = "DIEZ MILLONES";
    if ($numerodm > 10000000 && $numerodm <20000000){
    $num_letradmm = $this->decena(floor($numerodm/1000000))."MILLONES ".($this->cienmiles($numerodm%1000000));
    }
    if ($numerodm >= 20000000 && $numerodm <100000000){
    $num_letradmm = $this->decena(floor($numerodm/1000000))." MILLONES ".($this->millon($numerodm%1000000));
    }
    if ($numerodm < 10000000)
    $num_letradmm = $this->millon($numerodm);

    return $num_letradmm;
    }

    function cienmillon($numcmeros){
    if ($numcmeros == 100000000)
    $num_letracms = "CIEN MILLONES";
    if ($numcmeros >= 100000000 && $numcmeros <1000000000){
    $num_letracms = $this->centena(Floor($numcmeros/1000000))." MILLONES ".($this->millon($numcmeros%1000000));
    }
    if ($numcmeros < 100000000)
    $num_letracms = $this->decmillon($numcmeros);
    return $num_letracms;
    }

    function milmillon($nummierod){
    if ($nummierod >= 1000000000 && $nummierod <2000000000){
    $num_letrammd = "MIL ".($this->cienmillon($nummierod%1000000000));
    }
    if ($nummierod >= 2000000000 && $nummierod <10000000000){
    $num_letrammd = $this->unidad(Floor($nummierod/1000000000))." MIL ".($this->cienmillon($nummierod%1000000000));
    }
    if ($nummierod < 1000000000)
    $num_letrammd = $this->cienmillon($nummierod);

    return $num_letrammd;
    }

}

?>