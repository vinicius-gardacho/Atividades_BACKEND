<?php

function calcularEInspirar($num1, $num2) {
    $soma = $num1 + $num2;
    $subtracao = $num1 - $num2;
    $frase = "O código é como a poesia: quando bem escrito, pode mudar o mundo!";
    
    return [
        "soma" => $soma,
        "subtracao" => $subtracao,
        "frase" => $frase
    ];
}


$resultado = calcularEInspirar(15, 5);


echo "Soma: " . $resultado["soma"] . "\n";
echo "Subtração: " . $resultado["subtracao"] . "\n";
echo "Mensagem: " . $resultado["frase"] . "\n";
