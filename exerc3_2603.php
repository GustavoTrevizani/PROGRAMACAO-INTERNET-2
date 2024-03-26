<?php

$altura_chico = 0.8;
$altura_juca = 0.6;
$cresc_chico = 0.06;
$cresc_juca = 0.09;

$ano = 0;

while ($altura_juca <= $altura_chico){
	$altura_chico += $cresc_chico;
	$altura_juca += $cresc_juca;

	$ano++;
}

echo("Serão necessários $ano anos para que Juca seja maior que Chico");

?>