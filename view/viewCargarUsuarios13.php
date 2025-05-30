<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Listado de Usuarios</h1>
        <hr>
        <a href="index.php?accion=guardarusuario">Crear Nuevo</a>
        <table border='1'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>clave</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($usuarios as $usu){
                ?>
                <tr>
                    <td><?=$usu->getIdUsuario();?></td>
                    <td><?=$usu->getCorreo();?></td>
                    <td><?=$usu->getClave();?></td>
                    <td><a href="index.php?accion=borrarcliente&idcli=<?=$usu->getIdUsuario()?>">borrar</a></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>