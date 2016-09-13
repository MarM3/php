<?php
/*Escriba un programa en PHP que calcule el coste de esta comida:
Dos hamburguesas a 4.95€ cada una, un batido de chocolate a 1.95€, y una coca-cola a 85 centimos. EL IVA es de 7,5% y ha dejado una propina antes del impuesto del 16%.*/

$hamb=4.95;
$cola=0.85;
$batido=1.95;
$iva=7.5;
$total=0;
$propina=0;
$importe=0;

echo 'Una hamburguesa cuesta ',$hamb,'&euro; <br> la coca-cola ',$cola,'&euro; y el batido ',$batido,'&euro; <br>';

$importe = ($hamb * 2) + $cola + $batido;
printf('Son %.2f&euro; <br>', $importe);
$propina = ($importe * 16) / 100;

printf ('Dejo una propina de %.2f&euro; <br>', $propina);

$importe = $importe + $propina;

printf('El importe de la compra fue %.2f&euro;', $importe);
echo ' sin el IVA <br>';

$total = $importe + (($importe * $iva) / 100);

printf ('El total que se pago fueron %.2f&euro;', $total);
?>