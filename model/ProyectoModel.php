<?php
    require_once './config/DB.php';
    class ProyectoModel{
        private $db;
        public function __construct(){
            $this->db=DB::conectar();
        }
        public function cargar(){
            $sql="select * from proyecto";
            $ps=$this->db->prepare($sql);
            $ps->execute();
            $filas=$ps->fetchall();
            $proyectos=array();
            foreach($filas as $f){
                $pro=new Proyecto();
                $pro->setIdProyecto($f[0]);
                $pro->setNombre($f[1]);
                $pro->setDescripcion($f[2]);
                $pro->setFecha_inicio($f[3]);
                $pro->setFecha_fin($f[4]);
                array_push($proyectos, $pro);
            }
            return $proyectos;
        }
        public function guardar(Proyecto $proyecto){
            $sql='insert into proyecto (nombre, descripcion, fecha_inicio, fecha_fin) values (:nom, :des, :fecha_inicio, :fecha_fin)';
            $ps=$this->db->prepare($sql);
            $ps->bindParam(":nom", $proyecto->getNombre());
            $ps->bindParam(":des", $proyecto->getDescripcion());
            $ps->bindParam(":fecha_inicio", $proyecto->getFecha_inicio());
            $ps->bindParam(":fecha_fin", $proyecto->getFecha_fin());
            $ps->execute();
        }
        public function borrar($idpro){
            $sql='delete from proyecto where idproyecto = :idpro';
            $ps=$this->db->prepare($sql);
            $ps->bindParam(':idpro', $idpro);
            $ps->execute();
        }
    }
?>