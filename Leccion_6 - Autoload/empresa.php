<?php
    // require_once("classEmpleado.php");
    // require_once("classCliente.php");
    require_once("autoload.php");

    $objEmpleado = new Empleado(658354,"Juan Perez",25);
    $objEmpleado->setPuesto("Administrador");

    $objCliente = new Cliente(100951,"Joseph Valbuena", 19);
    $objCliente->setCredito(1000);

    echo $objEmpleado->getDatosPersonales();
    echo "Puesto: ".$objEmpleado->getPuesto();

    echo "<br>";

    echo $objCliente->getDatosPersonales();
    echo "Crédito: ".$objCliente->getCredito();


?>