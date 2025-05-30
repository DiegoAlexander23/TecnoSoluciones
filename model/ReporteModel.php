<?php
    require_once './config/DB.php';
    class ReporteModel{
        private $db;
        public function __construct(){
            $this->db=DB::conectar();
        }
        public function cargar(){
            $sql="select r.idreporte, c.nombre AS cliente, p.nombre AS proyecto FROM reporte r JOIN cliente c ON r.idcliente = c.idcliente JOIN proyecto p ON r.idproyecto = p.idproyecto";
            $ps=$this->db->prepare($sql);
            $ps->execute();
            $filas=$ps->fetchall();
            $reportes=array();
            foreach($filas as $f){
                $rep=new Reporte();
                $rep->setIdReporte($f[0]);
                $rep->setIdCliente($f[1]);
                $rep->setIdProyecto($f[2]);
                array_push($reportes, $rep);
            }
            return $reportes;
        }
        public function guardar(Reporte $reporte){
            $sql='insert into reporte (idcliente, idproyecto) VALUES(:cbxIdCli, :cbxIdPro  )';
            $ps=$this->db->prepare($sql);
            $ps->bindParam(":cbxIdCli", $reporte->getIdCliente());
            $ps->bindParam(":cbxIdPro", $reporte->getIdProyecto());
            $ps->execute();
        }
        public function borrar($idrep){
            $sql='delete from reporte where idreporte = :idrep';
            $ps=$this->db->prepare($sql);
            $ps->bindParam(':idrep', $idrep);
            $ps->execute();
        }
    }
?>