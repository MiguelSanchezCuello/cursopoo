<?php
    require_once("ClassEmpleado.php");

    $objEmpleado = new Empleado(00064, "Miguel Sanchez", 37);

    echo $objEmpleado->getDatosPersonales();

    $objEmpleado->setPuesto("Administrador");

    echo "<br>".$objEmpleado->getPuesto();