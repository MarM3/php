<?php

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

sort($ciudades);

echo '<table>';
foreach ($ciudades as $key => $value) {
	echo '<tr><td>',$key,'</td><td>',$value,'</td></tr>';
	//$poblacion = $poblacion + $value;
}
//echo '<tr><td>Total</td><td>',$poblacion,'</td></tr>';
echo '</table>'
?>