<?php

/*
Faça um programa em PHP que defina uma variável com o peso e a altura 
de uma pessoa. Calcule e mostre o IMC.
*/

echo "<br><br> Exercicio 3 <br><br>";

echo "<br>";
echo "ALTURA: 1.70 <br>";
echo "PESO: 70";

$altura = 1.70;
$peso = 70;

echo "<br><br>";

$imc = $peso / ($altura*$altura);
echo "O IMC É: ".number_format($imc, 2);

echo "<br>";

?>