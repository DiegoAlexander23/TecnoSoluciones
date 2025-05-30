<?php
    require_once './config/DB.php';
    class ClienteModel{
        private $db;
        public function __construct(){
            $this->db=DB::conectar();
        }
        public function cargar(){
            $sql="select * from cliente";
            $ps=$this->db->prepare($sql);
            $ps->execute();
            $filas=$ps->fetchall();
            $clientes=array();
            foreach($filas as $f){
                $cli=new Cliente();
                $cli->setIdCliente($f[0]);
                $cli->setNombre($f[1]);
                $cli->setApellido($f[2]);
                $cli->setCorreo($f[3]);
                $cli->setCelular($f[4]);
                $cli->setDireccion($f[5]);
                array_push($clientes, $cli);
            }
            return $clientes;
        }
        public function guardar(Cliente $cliente){
            $sql='insert into cliente (nombre, apellido, correo, celular, direccion) values (:nom, :des, :dni, :cel, :dir)';
            $ps=$this->db->prepare($sql);
            $ps->bindParam(":nom", $cliente->getNombre());
            $ps->bindParam(":des", $cliente->getApellido());
            $ps->bindParam(":dni", $cliente->getCorreo());
            $ps->bindParam(":cel", $cliente->getCelular());
            $ps->bindParam(":dir", $cliente->getDireccion());
            $ps->execute();
        }
        public function borrar($idcli){
            $sql='delete from cliente where idcliente=:idcli';
            $ps=$this->db->prepare($sql);
            $ps->bindParam(':idcli', $idcli);
            $ps->execute();
        }
    }
?>