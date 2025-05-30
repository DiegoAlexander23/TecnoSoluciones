<?php
    class Reporte{
        private $idreporte;
        private $idcliente;
        private $idproyecto;

        public function getIdCliente(){
                return $this->idcliente;
        }

        public function setIdCliente($idcliente){
                $this->idcliente = $idcliente;
                return $this;
        }

        public function getIdProyecto(){
                return $this->idproyecto;
        }

        public function setIdProyecto($idproyecto){
                $this->idproyecto = $idproyecto;
                return $this;
        }

        public function getIdReporte(){
                return $this->idreporte;
        }

        public function setIdReporte($idreporte){
                $this->idreporte = $idreporte;
                return $this;
        }
    }
?>