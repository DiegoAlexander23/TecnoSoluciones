<?php
    class Cliente{
        private $idcliente;
        private $nombre;
        private $apellido;
        private $correo;
        private $celular;
        private $direccion;
        
        public function getIdCliente(){
            return $this->idcliente;
        }
        public function setIdCliente($idcliente){
            $this->idcliente=$idcliente;
        }

        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }

        public function getApellido(){
            return $this->apellido;
        }
        public function setApellido($apellido){
            $this->apellido=$apellido;
        }

        public function getCorreo(){
            return $this->correo;
        }
        public function setCorreo($correo){
            $this->correo=$correo;
        }

        public function getCelular(){
            return $this->celular;
        }
        public function setCelular($celular){
            $this->celular=$celular;
        }

        public function getDireccion(){
            return $this->direccion;
        }
        public function setDireccion($direccion){
            $this->direccion=$direccion;
        }
    }
?>