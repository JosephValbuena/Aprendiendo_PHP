<?php
    require_once("classTienda.php");
    $objProducto = new Tienda();
    $objProducto->setProducto("Monito",345,5);
    echo $objProducto->getProducto();

    $objProducto->setCarrito("Monito",2);
    $objProducto->setStock(2);
    echo $objProducto->getCarrito();
    echo $objProducto->getProducto();
?>