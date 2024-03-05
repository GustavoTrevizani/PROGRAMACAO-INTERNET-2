<?php
	$dia = date("d");
	$mes = date("m");
	$ano = date("Y");

	$mes_extenso = "";

	$hoje = date("d/m/Y");

	$dia_semana = date("N");

	if($mes == 1){
	 	$mes_extenso = "janeiro";
	} else if($mes == 2){
	 	$mes_extenso = "fevereiro";
	} else if($mes == 3){
	 	$mes_extenso = "março";
	} else if($mes == 4){
	 	$mes_extenso = "abril";
	} else if($mes == 5){
	 	$mes_extenso = "maio";
	} else if($mes == 6){
	 	$mes_extenso = "junho";
	} else if($mes == 7){
	 	$mes_extenso = "julho";
	} else if($mes == 8){
	 	$mes_extenso = "agosto";
	} else if($mes == 9){
	 	$mes_extenso = "setembro";
	} else if($mes == 10){
	 	$mes_extenso = "outubro";
	} else if($mes == 11){
	 	$mes_extenso = "novembro";
	}
	
	if ($dia_semana == 1)
		echo ("Segunda-feira, $dia de $mes_extenso de $ano<br>");

	if ($dia_semana == 2)
		echo ("Terça-feira, $dia de $mes_extenso de $ano<br>");

	if ($dia_semana == 3)
		echo ("Quarta-feira, $dia de $mes_extenso de $ano<br>");

	if ($dia_semana == 4)
		echo ("Quinta-feira, $dia de $mes_extenso de $ano<br>");

	if ($dia_semana == 5)
		echo ("Sextas-feira, $dia de $mes_extenso de $ano<br>");

	if ($dia_semana == 6)
		echo ("Sábado, $dia de $mes_extenso de $ano<br>");

	if ($dia_semana == 7)
		echo ("Domingo, $dia de $mes_extenso de $ano<br>");

?>