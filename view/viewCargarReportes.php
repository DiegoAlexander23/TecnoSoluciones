<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        <?php include 'estilos.css'; ?>
    </style>

    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">TecnoSoluciones</a>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php?accion=cargarclientes">Clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?accion=cargarproyectos">Proyectos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?accion=cargarreportes">Reportes</a>
      </li>
    </ul>
    <div class="ml-auto">
      <a href="index.php?accion=cerrar" class="btn btn-danger">Cerrar sesión</a>
    </div>
  </div>
</nav>
    <div class="contenedor">
        <h1>Listado de Reportes</h1>
        <a href="index.php?accion=reportespdf" class="btn btn-dark">Exportar en PDF</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Proyecto</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($reportes as $rep){
                ?>
                <tr>
                    <td><?=$rep->getIdReporte();?></td>
                    <td><?=$rep->getIdCliente();?></td>
                    <td><?=$rep->getIdProyecto();?></td>
                    <td><a href="index.php?accion=borrarreporte&idrep=<?=$rep->getIdReporte();?>" class="btn btn-danger">borrar</a></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <a href="index.php?accion=guardarreporte" class="btn btn-success"  >Crear Nuevo</a>
    </div>
</body>
</html>