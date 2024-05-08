<?php
$listaCompras = [];

$listaCompras[] = 'Leche';
$listaCompras[] = 'Pan';
$listaCompras[] = 'Huevos';
$listaCompras[] = 'Queso';

print_r($listaCompras);

$indice_reemplazo = 1; 
$nuevo_elemento = 'Comprado'; 
$listaCompras[$indice_reemplazo] = $nuevo_elemento;

print_r($listaCompras);
?>