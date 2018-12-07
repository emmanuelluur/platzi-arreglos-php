<?php
/**
 * código necesario para generar la cadena final usando el arreglo dado
 */
$arreglo = [
	'keyStr1' => 'lado',
	0 => 'ledo',

	'keyStr2' => 'lido',
	1 => 'lodo',
	2 => 'ludo'

];
// se acomodan al inverso
$reverse = array_reverse($arreglo);
//  se impreme en orden
foreach($arreglo as $valor):
    echo "{$valor}, ";
endforeach;
echo "<p>decirlo al revés lo dudo.</p>";
//  se impreme en inverso
foreach($reverse as $valores):
    echo "{$valores}, ";
endforeach;
echo "<p>¡Qué trabajo me ha costado!.</p>";