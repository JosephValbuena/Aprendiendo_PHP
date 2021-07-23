<?php

    class Usuario{

        private $strNombre;
        private $strEmail;
        private $strTipo;
        private $strClave;
        protected $strFechaResgistro;
        static $strEstado = "Activo";

        function __construct(string $nombre, string $email, string $tipo){
            $this->strNombre = $nombre;
            $this->strEmail = $email;
            $this->strTipo = $tipo;
            $this->strClave = rand();
            $this->strFechaResgistro = date('Y-m-d H:m:s');
        }

        public function getNombre():string{
            return $this->strNombre;
        }

        public function getEmail():string{
            return $this->strEmail;
        }
        
        public function getTipo():string{
            return $this->strTipo;
        }

        public function setCambiarClave(string $pass){
            $this->strClave = $pass;
        }

        public function getPerfil(){
            echo "Datos del Usuario <br>";
            echo "Nombre: ".$this->strNombre."<br>";
            echo "Email: ".$this->strEmail."<br>";
            echo "clave: ".$this->strClave."<br>";
            echo "Fecha de Registro: ".$this->strFechaResgistro."<br>";
            echo "Estado: ".self::$strEstado."<br>";
        }

    }


?>