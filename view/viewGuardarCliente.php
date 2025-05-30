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
        <h1>Inserción de Cliente</h1>
        <hr>
        <form action="index.php?accion=guardarcliente" method="post"><br>
            Nombre: <br>
            <input type="text" name="txtNom" placeHolder="Nombre"class="form-control"><br>
            Apellidos: <br>
            <input type="text" name="txtApe" placeHolder="Apellido"class="form-control"><br>
            Correo: <br>
            <input type="email" name="txtCor" placeHolder="Correo"class="form-control"><br>
            Celular:
            <input type="text" name="txtCel" placeHolder="celular"class="form-control"><br>
            Direccion:
            <input type="text" name="txtDir" placeHolder="Direccion"class="form-control"><br>
            <input type="submit" class="btn btn-success" value="Guardar">
        </form>
    </div>
</body>
</html> 