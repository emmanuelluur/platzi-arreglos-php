<?php
/**
 * Escribe el código necesario para encontrar 
 * los 3 números más grandes y los 3 números más bajos del arreglo
 */
$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
sort($valores);
$reve = array_reverse($valores);
$count = 3;
echo "Mayores: ";
for ($i=0; $i<$count; $i++){
    echo $reve[$i].", ";
}
echo "<br>Menores: ";
for ($i=0; $i<$count; $i++){
    echo $valores[$i].", ";
}
