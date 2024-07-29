<?php
    require_once("ClassOperacion.php");

    $operacion1 = new Operacion(10, 2);

    $totalSuma = $operacion1->getSuma();
    echo "Total de la suma: ".$totalSuma."<br />";

    $totalResta = $operacion1->getResta();
    echo "Total de la Resta: ".$totalResta."<br />";

    $totalDivision = $operacion1->getDivision();
    echo "Total de la Division: ".$totalDivision."<br />";

    $totalMultiplicacion = $operacion1->getMultiplicacion();
    echo "Total de la Multiplicacion: ".$totalMultiplicacion."<br />";

?>