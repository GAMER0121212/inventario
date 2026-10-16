<?php

require_once __DIR__ . '/../src/validaciones.php';

$casos = [
    ["Teclado", true],
    ["", false],
    ["AB", false],
    ["Mouse", true]
];

$casosCantidad = [
    [10, true],
    [1, true],
    [0, true],
    [-5, false]
];

$pasaron = 0;
$fallaron = 0;

echo "PRUEBAS DE NOMBRE\n";

foreach ($casos as [$entrada, $esperado]) {
    $obtenido = validarNombreProducto($entrada);

    if ($obtenido === $esperado) {
        echo "PASS - Probe el nombre: '$entrada'\n";
        $pasaron++;
    } else {
        echo "FAIL - Probe el nombre: '$entrada'\n";
        $fallaron++;
    }
}

echo "\nPRUEBAS DE CANTIDAD\n";

foreach ($casosCantidad as [$entrada, $esperado]) {
    $obtenido = validarCantidadProducto($entrada);

    if ($obtenido === $esperado) {
        echo "PASS - Probe la cantidad: $entrada\n";
        $pasaron++;
    } else {
        echo "FAIL - Probe la cantidad: $entrada\n";
        $fallaron++;
    }
}

echo "\nTotal PASS: $pasaron\n";
echo "Total FAIL: $fallaron\n";