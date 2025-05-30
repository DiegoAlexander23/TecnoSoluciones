<?php
    session_start();
    require_once './model/UsuarioModel.php';
    require_once './model/Usuario.php';
    class UsuarioController{
        public function index(){
            if (isset($_SESSION['login'])) {
                header('Location: index.php?accion=cargarreportes');
            }else {
                require './view/viewCargarLogin.php';
            }
        }
        public function login(){
            $model=new UsuarioModel();
            $usuario=new Usuario();

            $usuario->setCorreo($_POST['txtCorreo']);  
            $usuario->setClave($_POST['txtClave']);
            $resultado=$model->login($usuario);
            if ($resultado) {
                $_SESSION['login'] = $usuario->getCorreo();
                header('Location: index.php?accion=cargarreportes');
            }else {
                header('Location: index.php?msg=No coinciden las credenciales');
            }
        }
        public function logout() {
            session_unset();
            session_destroy();
            header("Location: index.php");
        }
        public function cargar(){
            $model=new UsuarioModel();
            $usuarios=$model->cargar();
            require_once './view/viewCargarLogin.php';
        }

        public function guardar(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $model=new UsuarioModel();
                $usuario=new Usuario();
                $usuario->setCorreo($_POST['txtCor']);  
                $usuario->setClave($_POST['txtCla']);
                $model->guardar($usuario);
                header('Location: index.php?accion=cargarUsuarios');
            }
            else{
                require_once './view/viewGuardarUsuario.php';
            }

        }
        public function borrar(){
            if(isset($_GET['idusu'])){
                $model=new UsuarioModel();
                $model->borrar($_GET['idusu']);
                header('Location: index.php?accion=cargarUsuarios');
            }
        }

    }
?>