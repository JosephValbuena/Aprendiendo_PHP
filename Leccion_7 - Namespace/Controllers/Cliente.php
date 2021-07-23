<?php
    namespace Controllers;
    require_once("../autoload.php");
    use Models\Persona;
    class Cliente extends Persona{

        protected $Credito;

        function __construct(int $cedula, string $nombre, int $edad){
            parent::__construct($cedula, $nombre, $edad);

        }

        public function setCredito($Credito){
            $this->Credito = $Credito;
        }

        public function getCredito():int{
            return $this->Credito;
        }

        

    }
?>