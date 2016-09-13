<?php
/*A un trabajador le pagan según sus horas trabajadas y la tarifa está a un valor por hora. Si la cantidad
de horas trabajadas es mayor a 40 horas, la tarifa por hora se incrementa en un 50% para las horas
extras. Calcular el salario del trabajador dadas las horas trabajadas y la tarifa.*/

$horas = 70;
$semana = 40;
$tarifa = 8.5;

if ($horas>$semana){
	$tarifa_extra = ($tarifa * 50) / 100;
	$horas_extra = $semana - $horas;
	$salario = ($tarifa * $semana) + ($tarifa_extra * $horas_extra);
}else{
	$salario = ($tarifa * $horas);
}

echo $salario;

?>