<?php
    require_once("autoload.php");

    $objUsuario = new Usuario();

    //Insertar Usuario
    // $insert = $objUsuario->insertUsuario("Jorge", 31346563541, "jorge@gimal.com");
    
    //Update Usuario

    $update = $objUsuario->updateUsuario(1,"Joseph",3134836045,"josvalk123@gmail.com");
    echo $update;

    //Extraer los registros
    $users = $objUsuario->getUsuarios();
    print_r("<pre>");
    print_r($users);
    print_r("</pre>");

    //Traer un solo usuario
    $user = $objUsuario->getUser(1);
    print_r("<pre>");
    print_r($user);
    print_r("</pre>");

    //Borrar el usuario
    $delete = $objUsuario->DelUsuario(2);
    echo $delete;
?>