<?php
$numero1 = 10;
$numero2 = 5;
$operacao = "multiplicacao"; 

if ($operacao == "soma") {
    echo "Resultado: " . ($numero1 + $numero2);
} else if ($operacao == "subtracao") {
    echo "Resultado: " . ($numero1 - $numero2);
} else if ($operacao == "multiplicacao") {
    echo "Resultado: " . ($numero1 * $numero2);
} else if ($operacao == "divisao") {
    if ($numero2 != 0) {
        echo "Resultado: " . ($numero1 / $numero2);
    } else {
        echo "Erro: Divisão por zero!";
    }
} else {
    echo "Operação inválida!";
}
