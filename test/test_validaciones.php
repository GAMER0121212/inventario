<?php

require_once __DIR__ . '/../src/validaciones.php';

$casos = [
    ["Teclado",true],
    ["", false],
    ["", false],
    ["Mouse", true]
];

$pasaron = 0;
$fallaron = 0;

foreach ($casos as [$entrada, $esperado]){
    $obtenido = validarNombreProducto($entrada);
    if ($obtenido === $esperado) {
        echo"PASS\n";
        $pasaron++;
    } else {
        echo "FAIL\n";
        $fallaron++;
    }
}

echo "\nTotal PASS: $pass\n";
echo "Total FAIL: $fail\n";