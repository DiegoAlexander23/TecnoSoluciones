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
  </div>
</nav>
    <div class="contenedor">
      <div class="seccion-titulo">
    <h1>Inserción de Reportes</h1>
</div>
        <hr>
        <form action="index.php?accion=guardarreporte" method="post"><br>
            Cliente: <br>
            <select class="form-control" name="cbxIdCli" id="">
                <option>Selecione Cliente</option>
                <?php
                    foreach($clientes as $cli){
                ?>
                <option value="<?=$cli->getIdCliente()?>"><?=$cli->getNombre()?></option>
                <?php
                    }
                ?>
            </select><br>
            Proyecto: <br>
            <select class="form-control" name="cbxIdPro" id="">
                <option>Selecione Proyecto</option>
                <?php
                    foreach($proyectos as $pro){
                ?>
                <option value="<?=$pro->getIdProyecto()?>"><?=$pro->getNombre()?></option>
                <?php
                    }
                ?>
            </select><br>
            <input type="submit" class="btn btn-success" value="Guardar">
        </form>
    </div>
</body>
</html> 