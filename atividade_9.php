<?php

$papagaios = [
    "Papagaio-verdadeiro (Amazona aestiva)",
    "Papagaio-do-mangue",
    "Cacatua",
    "Ringneck"
];

$papagaios[] = "Calopsita";

echo "Lista de Psitacídeos (Papagaios): \n";

foreach ($papagaios as $ave) {
    echo "- " . $ave . "\n";
}
?>