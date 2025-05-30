<?php
    class Proyecto{
        private $idproyecto;
        private $nombre;
        private $descripcion;
        private $fecha_inicio;
        private $fecha_fin;

        public function getIdProyecto(){
                return $this->idproyecto;
        }
        public function setIdProyecto($idproyecto){
                $this->idproyecto = $idproyecto;

                return $this;
        }
        public function getNombre(){
                return $this->nombre;
        }
        public function setNombre($nombre){
                $this->nombre = $nombre;

                return $this;
        }
        public function getDescripcion(){
                return $this->descripcion;
        }
        public function setDescripcion($descripcion){
                $this->descripcion = $descripcion;

                return $this;
        }
        public function getFecha_inicio(){
                return $this->fecha_inicio;
        }
        public function setFecha_inicio($fecha_inicio){
                $this->fecha_inicio = $fecha_inicio;

                return $this;
        }
        public function getFecha_fin(){
                return $this->fecha_fin;
        }
        public function setFecha_fin($fecha_fin){
                $this->fecha_fin = $fecha_fin;

                return $this;
        }
    }
?>