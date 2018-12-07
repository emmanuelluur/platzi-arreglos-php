<?php
/**
 * Crea un arreglo que contenga como clave los nombres de 5 países 
 * y como valor otro arreglo con 3 ciudades que pertenezcan a ese país, 
 * después utiliza un ciclo foreach, para imprimir el nombre 
 * del país seguido de las ciudades que definiste
 */
$paises = array(
    "Mexico" => array("Tamaulipas","Nuevo Leon","Hidalgo"),
    "USA" => array("Washington","Idaho","Oregon"),
    "Colombia" => array("Bogota", "Cartagena", "Medellin"),
    "Canada" => array("Ontario", "Alberta", "Quebec"),
    "Alemania" => array("Berlín","Múnich","Bremen"),
);
$c=0;
foreach($paises as $pais => $estados){
    echo @"<strong>{$pais}:</strong> ";
    foreach($estados as $valores):
        echo @"{$valores} ";
    endforeach;
    echo "<br>";
}

