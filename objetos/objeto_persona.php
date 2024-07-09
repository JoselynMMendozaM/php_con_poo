<?php
    // referencia al archivo donde esta la clase
    include_once("../clases/Persona.php");
    
    // instanciar la clase = crear un objeto
    $persona = new Persona();

    // si es privado esta ente parentesis y si es publico no tiene

    // asigne el valor a el atributo nombre el cual es publico. 
    // $persona->nombre = "Joselyn Mendoza";
    $persona->apellido = "Mendoza";

    // asigne el valor a el atributo nombre el cual es private. 
     $persona->asignarNombre("Joselyn");

     $persona->telefono = "<span style:'color=red;'>54565852";
     $persona->direccion = "Calle Doroteo Guamuch Flores 7-51 zona 5, Guatemala, CA.";

    // mostrar el contenido del atributo que es publico
    // echo "El apellidoes : ", $persona->apellido;
    //   echo "<br><h1> El apellidoes : $persona->apellido </h1>";

    // mostrar el contenido del atributo que es privado
    // el punto concatena
    //echo "<br><h1>El nombre es :{$persona->verNombre()}</h1>";

    // echo "<br><h1>{$persona->nombreCompleto()}</h1>";
    echo "<br><h2>{$persona->verDatos()}</h2>";

?>