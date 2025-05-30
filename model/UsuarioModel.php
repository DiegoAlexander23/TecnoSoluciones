<?php
    require_once './config/DB.php';
    class UsuarioModel{
        private $db;
        public function __construct(){
            $this->db=DB::conectar();
        }
        public function login(Usuario $usuario){
            $sql='select * from usuario where correo=:cor and clave=:cla';
            $ps=$this->db->prepare($sql);
            $correo = $usuario->getCorreo();
            $clave = $usuario->getClave();
            $ps->bindParam(":cor", $correo);
            $ps->bindParam(":cla", $clave);
            $ps->execute();
            if ($ps->fetch(PDO::FETCH_OBJ)) {
                return true;
            }else{
                return false;
            }
        }
        public function cargar(){
            $sql="select * from usuario";
            $ps=$this->db->prepare($sql);
            $ps->execute();
            $filas=$ps->fetchall();
            $usuarios=array();
            foreach($filas as $f){
                $usu=new Usuario();
                $usu->setIdUsuario($f[0]);
                $usu->setCorreo($f[1]);
                $usu->setClave($f[2]);
                array_push($usuarios, $usu);
            }
            return $usuarios;
        }
        public function guardar(Usuario $usuario){
            $sql='insert into usuario (correo, clave) VALUES (:cor, :cla);';
            $ps=$this->db->prepare($sql);
            $ps->bindParam(":cor", $usuario->getCorreo());
            $ps->bindParam(":cla", $usuario->getClave());
            $ps->execute();
        }
        public function borrar($idusu){
            $sql='delete from usuario where idusuario=:idusu';
            $ps=$this->db->prepare($sql);
            $ps->bindParam(':idusu', $idusu);
            $ps->execute();
        }
    }
?>