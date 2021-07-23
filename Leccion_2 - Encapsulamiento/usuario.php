<?php
    require_once("classUsuario.php");

    $objUsuarioUno = new Usuario("Joseph Valbuena","josvalk775@gmail.com","admin");

    // echo $objUsuarioUno->getNombre();
    //IMPORTANTE
    // echo Usuario::$strEstado;

    //Obteniendo todo:

    echo $objUsuarioUno->getPerfil();
    echo "<br><br>";
    echo $objUsuarioUno->setCambiarClave("123456789");
    echo "<br><br>";
    echo $objUsuarioUno->getPerfil();
    
?>