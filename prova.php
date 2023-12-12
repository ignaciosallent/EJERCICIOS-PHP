<?php
$matriz1 = array();
$matriz2 = array();

function GenerarMatriu($N, $rangoMin=1, $rangoMax=10){
    $matriu = array();
    for ($i=0; $i < $N; $i++){
        $fila = array();
        for ($j = 0; $j < $N; $j++){
            $Numero = rand($rangoMin, $rangoMax);
            $fila[]=$Numero;
        }
        $matriu[] = $fila; 
    }
    return $matriu;
}

$matriz1 = GenerarMatriu(3);
($matriz1);
?>