<?php
    require_once './model/ClienteModel.php';
    require_once './model/ProyectoModel.php';
    require_once './model/Cliente.php';
    class ClienteController{
        public function cargar(){
            $model=new ClienteModel();
            $clientes=$model->cargar();
            require_once './view/viewCargarClientes.php';
        }
        public function clientespdf(){
            $model=new ClienteModel();
            $clientes=$model->cargar();
            require_once './view/pdf/clientepdf.php';
        }

        public function guardar(){
            $model=new ProyectoModel();
            $proyectos=$model->cargar();
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $model=new ClienteModel();
                $cliente=new Cliente();
                $cliente->setNombre($_POST['txtNom']);  
                $cliente->setApellido ($_POST['txtApe']);
                $cliente->setCorreo($_POST['txtCor']);
                $cliente->setCelular($_POST['txtCel']);
                $cliente->setDireccion($_POST['txtDir']);
                $model->guardar($cliente);
                header('Location: index.php?accion=cargarclientes');
            }
            else{
                require_once './view/viewGuardarCliente.php';
            }

        }
        public function borrar(){
            if(isset($_GET['idcli'])){
                $model=new ClienteModel();
                $model->borrar($_GET['idcli']);
                header('Location: index.php?accion=cargarclientes');
            }
        }
    }
?>