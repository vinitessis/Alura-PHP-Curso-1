<?php

$peso = 90;
$altura = 2;

$imc = $peso / ($altura ** 2);

if ($imc <= 18.5) {
    echo "Seu IMC é $imc. Classificão Magreza";
} elseif ($imc > 18.5 && $imc <= 24.9) {
    echo "Seu IMC é $imc. Classificação Normal";
} elseif ($imc > 25 && $imc <= 29.9) {
    echo "Seu IMC é $imc. Classificação Sobrepeso";
} elseif ($imc > 30 && $imc <= 39.9) {
    echo "Seu IMC é $imc. Classificação Obesidade";
} elseif ($imc >= 40) {
    echo "Seu IMC é $imc. Classificação Obesidade Grave";
}