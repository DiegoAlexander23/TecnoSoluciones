<?php
    class Usuario{
        private $idusuario;
        private $correo;
        private $clave;
  
        public function getIdUsuario(){
                return $this->idusuario;
        }
        public function setIdUsuario($idusuario){
                $this->idusuario = $idusuario;
        }

        public function getCorreo(){
                return $this->correo;
        }
        public function setCorreo($correo) {
                $this->correo = $correo;
        }
        
        public function getClave(){
                return $this->clave;
        }
        public function setClave($clave){
                $this->clave = $clave;
        }
    }
?>