<?php
    require_once './model/ReporteModel.php';
    require_once './model/Reporte.php';
    class ReporteController{
        public function cargar(){
            $model=new ReporteModel();
            $reportes=$model->cargar();
            require_once './view/viewCargarReportes.php';
        }
        public function reportepdf(){
            $model=new ReporteModel();
            $reportes=$model->cargar();
            require_once './view/pdf/reportepdf.php';
        }

        public function guardar(){
            $model=new ClienteModel();
            $clientes=$model->cargar();
            $model=new ProyectoModel();
            $proyectos=$model->cargar();
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $model=new ReporteModel();
                $reporte=new Reporte();
                $reporte->setIdCliente($_POST['cbxIdCli']);  
                $reporte->setIdProyecto($_POST['cbxIdPro']);
                $model->guardar($reporte);
                header('Location: index.php?accion=cargarreportes');
            }
            else{
                require_once './view/viewGuardarReporte.php';
            }

        }
        public function borrar(){
            if(isset($_GET['idrep'])){
                $model=new ReporteModel();
                $model->borrar($_GET['idrep']);
                header('Location: index.php?accion=cargarreportes');
            }
        }
    }
?>