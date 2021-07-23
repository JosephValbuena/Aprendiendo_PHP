<?php
    require_once('ClassOperacion.php');

    $operacion1 = new operacion(10,2);
    $operacion2 = new operacion(100,3);

    $totalSuma = $operacion1->getSuma();
    echo "total Suma: ".$totalSuma;
    echo "<br>";

    $totalResta = $operacion1->getResta();
    echo "total Resta: ".$totalResta;
    echo "<br>";

    $totalMulti = $operacion1->getMultiplicacion();
    echo "Total Multiplicacion: ".$totalMulti;
    echo "<br>";

    $totalDivision = $operacion1->getDivision();
    echo "Total Division: ".$totalDivision;

    echo "<br><br>";

    //segundo Objeto

    $totalSuma = $operacion2->getSuma();
    echo "total Suma: ".$totalSuma;
    echo "<br>";

    $totalResta = $operacion2->getResta();
    echo "total Resta: ".$totalResta;
    echo "<br>";

    $totalMulti = $operacion2->getMultiplicacion();
    echo "Total Multiplicacion: ".$totalMulti;
    echo "<br>";

    $totalDivision = $operacion2->getDivision();
    echo "Total Division: ".$totalDivision;




?>