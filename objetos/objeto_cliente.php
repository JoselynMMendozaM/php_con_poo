<?php 

    // Incluir el archivoCliente.php para poder utilizar
    // instanciar una clase
    include_once("../clases/Cliente.php");
    // crear un objeto de tipo Cliente = instancias la clase

    $cliente = new Cliente();

    $cliente->nit="112233-4";
    $cliente->telefono = 55478963;
    $cliente->apellido = "Prueba";
    $cliente->asignarNombre("Herencia");
    $cliente->direccion = "zona 1";


    echo "<br><h3>{$cliente->verDatos()}</h3>";
    
   
?>