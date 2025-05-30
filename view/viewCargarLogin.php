<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        <?php include 'estilos.css'; ?>
    </style>
</head>
<body>
        <div class="login">
            <h1>BIENVENIDO</h1>

            <hr>
            <form action="index.php?accion=login" method="post">
                Correo: <br>
                <input type="email" name="txtCorreo"class="form-control"><br>
                Contraseña: <br>
                <input type="password" name="txtClave"class="form-control"><br>
                <input type="submit" value="Iniciar sesión" class="btn btn-success">
            </form>
        </div>
</body>
</html>