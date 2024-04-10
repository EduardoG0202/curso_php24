<?php
//obter as notas
// 572
// 100, 50, 20, 10, 5, 2.

$total=572;

function divisao($total, $divisor){
    $resultado = floor($total / $divisor);
    return $resultado;
}

function resto($total, $divisor){
    $resultado = $total / $divisor; // 5,72
    $resto = $total - ( floor($resultado) * $divisor);
    return $resto;
}

$notas_cem = divisao($total, 100);
$resto_cem = resto($total, 100);

$notas_cinquenta= divisao($resto_cem, 50);
$resto_cinquenta= resto($resto_cem, 50);

$notas_vinte= divisao($resto_cinquenta, 20);
$resto_vinte= resto($resto_cinquenta, 20);

$notas_dez= divisao($resto_vinte, 10);
$resto_dez= resto($resto_vinte, 10);

$notas_cinco= divisao($resto_dez, 5);
$resto_cinco= resto($resto_dez, 5);

$notas_dois= divisao($resto_cinco, 2);
$resto_dois= resto($resto_cinco, 2);


echo "devem retornar $notas_cem notas de cem, $notas_cinquenta notas de cinquenta, $notas_vinte notas de vinte, $notas_dez notas de dez,
$notas_cinco notas de cinco, $notas_dois notas de dois";
