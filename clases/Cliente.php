<?php 

        // Uso de herencia (se usa include y extends)
    include_once("Persona.php");
    class Cliente extends Persona{
        public $nit="";
        public function verDatos(){
            return parent::verDatos()// Uso de parent para el método del mismo nombre al usar herencia
            ."<br>NIT: ". $this->nit;
        }
    }


    // conectar basa de datos y que al llamar de muestre en pantalla(Generado en tarjetas y en tablas)
    //uso de nbc o nvc
    //uso de framework 
?>



