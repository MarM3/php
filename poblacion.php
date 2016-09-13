<?php

/*Según la oficina del censo de EEUU, las 10 ciudades americanas más grandes (en población) en el año 2000 fueron las siguientes,
1. New York, NY (8,008,278)
2. Los Ángeles, CA (3,694,820)
3. Chicago, IL (2,896,016)
4. Houston, TX (1,953,631)
5. Philadelphia, PA (1,517,550)
6. Phoenix, AZ (1,321,045)
7. San Diego, CA (1,223,400)
8. Dallas, TX (1,188,580)
9. San Antonio, TX (1,144,646)
10. Detroit, MI (951,270)
Defina un array (o arrays) que contengan esta información sobre lugares y población. Imprima una tabla de lugares y población
que incluya la población total de las 10 ciudades.*/

$ciudades = array ('New York NY' => 8008278,
'Los Ángeles CA' => 3694820,
'Chicago IL' => 2896016,
'Houston TX' => 1953631,
'Philadelphia PA' => 1517550,
'Phoenix AZ' => 1321045,
'San Diego CA' => 1223400,
'Dallas TX' => 1188580,
'San Antonio TX' => 1144646,
'Detroit MI' => 951270);
$poblacion = 0;

echo '<table>';
foreach ($ciudades as $key => $value) {
	echo '<tr><td>',$key,'</td><td>',$value,'</td></tr>';
	$poblacion = $poblacion + $value;
}
echo '<tr><td>Total</td><td>',$poblacion,'</td></tr>';
echo '</table>'
?>