<?php
$dinheiro = 15000;

if ($dinheiro <= 2000) {
    echo "Pobre";
} elseif ($dinheiro <= 15000) {
    echo "Classe Média";
} elseif ($dinheiro <= 100000) {
    echo "Riquinho";
} elseif ($dinheiro <= 1000000000) {
    echo "Ricão";
} else {
    echo "Elon Musk";
}