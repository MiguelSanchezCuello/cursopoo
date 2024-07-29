<?php
    require_once("ClassEmpleado.php");
    require_once("ClassCliente.php");

    $objEmpleado = new Empleado(00064, "Miguel Sanchez", 37);
    $objCliente = new Cliente(00065, "Dawilka Arias", 29);

    echo $objEmpleado->getDatosPersonales();
    $objEmpleado->setPuesto("Administrador");
    echo "<br>".$objEmpleado->getPuesto();

    echo "<br />".$objCliente->getDatosPersonales();
    $objCliente->setCredito(18000.55);
    echo "<br />".$objCliente->getCredito();


    
    

