
<?php
// Dadas las horas trabajadas de una persona y el valor por hora. Calcular su salario e imprimirlo.

$precio = 8.5;
$horas = 8;
$salario = 0;

$salario = $horas*$precio;
echo "Salario si trabaja 8 horas es ",$salario,'&euro; al dia<br>';

//Si bajamos las horas
$horas=5;

$salario = $horas*$precio;
echo "Salario si trabaja 5 horas es ",$salario,'&euro; al dia<br>';

$horas=6;
$salario = $horas*$precio;
echo 'Salario si trabaja 6 horas es ',$salario,'&euro; al dia<br>';

$horas=7;
$salario = $horas*$precio;
echo 'Salario si trabaja 7 horas es ',$salario,'&euro; al dia<br>';

$horas=4;
$salario = $horas*$precio;
echo 'Salario si trabaja 4 horas es ',$salario,'&euro; al dia';

?>
