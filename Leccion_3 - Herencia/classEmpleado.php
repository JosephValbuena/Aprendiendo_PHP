<?php
    require_once("classPersona.php");
    class Empleado extends Persona{

        protected $puesto;

        function __construct(int $cedula, string $nombre, int $edad){
            parent::__construct($cedula,$nombre,$edad);
        }

        public function setPuesto(string $puesto){
            $this->puesto = $puesto;
        }

        public function getPuesto():string{
            return $this->puesto;
        }

    }
?>