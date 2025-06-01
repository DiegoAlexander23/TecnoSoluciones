<?php
    require_once './model/ProyectoModel.php';
    require_once './model/Proyecto.php';
    class ProyectoController{
        public function cargar(){
            $model=new ProyectoModel();
            $proyectos=$model->cargar();
            require_once './view/viewCargarProyectos.php';
        }
        public function proyectospdf(){
            $model=new ProyectoModel();
            $proyectos=$model->cargar();
            require_once './view/pdf/proyectos.php';
        }

        public function guardar(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $model=new ProyectoModel();
                $proyecto=new Proyecto();
                $proyecto->setNombre($_POST['txtNom']);  
                $proyecto->setDescripcion ($_POST['txtDes']);
                $proyecto->setFecha_inicio($_POST['txtFecha_inicio']);
                $proyecto->setFecha_fin($_POST['txtFecha_fin']);
                $model->guardar($proyecto);
                header('Location: index.php?accion=cargarproyectos');
            }
            else{
                require_once './view/viewGuardarProyecto.php';
            }

        }
        public function borrar(){
            if(isset($_GET['idpro'])){
                $model=new ProyectoModel();
                $model->borrar($_GET['idpro']);
                header('Location: index.php?accion=cargarproyectos');
            }
        }
    }
?>