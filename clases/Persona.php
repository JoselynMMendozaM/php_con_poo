<?php
    class Persona{
        // atributos
        //public $nombre="";
        //si es private
         private $nombre="";
         public $apellido="";
         public $telefono="";
         public $direccion="";

        // métodos
        //si es private
        // setter and getter son métodos de acceso
        // método para asignar = set
        public function asignarNombre($valor){
            $this->nombre=$valor;
        }
        // método para obtener = get

        public function verNombre(){
            return $this->nombre;
        }
        public function nombreCompleto(){
            return "Nombre Completo: ". $this->nombre. " ". $this->apellido;
        }

        public function verDatos(){ 
            return "Nombre Completo: ". $this->nombre. " ". $this->apellido
                ."<br>Teléfono: ". $this->telefono
                ."<br>Dirección: ". $this->direccion;
        }
    }
?>