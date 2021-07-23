<?php
    namespace Models;
    class Persona{

        public $cedula;
        public $nombre;
        public $edad;

        function __construct(int $cedula, string $nombre, int $edad){
            $this->cedula = $cedula;
            $this->nombre = $nombre;
            $this->edad = $edad;
        }

        public function getDatosPersonales(){
            $datos = "
                <h2>DATOS PERSONALES</h2>
                Cedula: {$this->cedula}<br>
                Nombre: {$this->nombre}<br>
                edad: {$this->edad}<br>
            ";

            return $datos;
        }

    }

?>