<?php
    require_once './controller/ClienteController.php';
    require_once './controller/ProyectoController.php';
    require_once './controller/UsuarioController.php';
    require_once './controller/ReporteController.php';
    $accion=isset($_GET['accion'])?$_GET['accion']:'cargarusuarios';
    switch($accion){
        case 'cargarmenu';
            
        break;
        //CLIENTES
        case 'guardarcliente':
            $controller=new ClienteController();
            $controller->guardar();
        break;
        case 'cargarclientes':                                                                                                                              
            $controller=new ClienteController();
            $controller->cargar();
        break;
        case 'clientespdf':                                                                                                                              
            $controller=new ClienteController();
            $controller->clientespdf();
        break;
        case 'borrarcliente':
            $controller=new ClienteController();
            $controller->borrar();
        break;
        //PROYECTOS
        case 'guardarproyecto':
            $controller=new ProyectoController();
            $controller->guardar();
        break;
        case 'cargarproyectos':                                                                                                                              
            $controller=new ProyectoController();
            $controller->cargar();
            case 'proyectospdf':                                                                                                                              
            $controller=new ProyectoController();
            $controller->proyectospdf();
        break;
        case 'borrarproyecto':
            $controller=new ProyectoController();
            $controller->borrar();
        break;
        //USUARIOS
        case 'guardarusuario':
            $controller=new UsuarioController();
            $controller->guardar();
        break;
        case 'cargarusuarios':                                                                                                                              
            $controller=new UsuarioController();
            $controller->cargar();
        break;
        case 'borrarusuario':
            $controller=new UsuarioController();
            $controller->borrar();
        break;
        //Login
        case 'login':
            $controller=new UsuarioController();
            $controller->login();
        break;
        case 'cerrar':
            $controller = new UsuarioController();
            $controller->logout();
        break;

        //Reporte
        case 'guardarreporte':
            $controller=new ReporteController();
            $controller->guardar();
        break;
        case 'cargarreportes':                                                                                                                              
            $controller=new ReporteController();
            $controller->cargar();
        break;
        case 'reportespdf':                                                                                                                              
            $controller=new ReporteController();
            $controller->reportepdf();
        break;
        case 'borrarreporte':
            $controller=new ReporteController();
            $controller->borrar();
        break;
    }
?>      