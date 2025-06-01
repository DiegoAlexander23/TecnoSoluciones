<?php
    ob_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        <?php include 'estilos.css'; ?>
    </style>

    <title>Proyectos</title>
</head>
<body>
    <div>
        <h1>Listado de Proyectos</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>descripcion</th>
                    <th>Fecha_inicio</th>
                    <th>Fecha_fin</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($proyectos as $pro){
                ?>
                <tr>
                    <td><?=$pro->getIdProyecto();?></td>
                    <td><?=$pro->getNombre();?></td>
                    <td><?=$pro->getDescripcion();?></td>
                    <td><?=$pro->getFecha_inicio();?></td>
                    <td><?=$pro->getFecha_fin();?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
    $html=ob_get_clean();
    //echo $html;

    require_once './libreria/dompdf/autoload.inc.php';
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();
    
    $options =$dompdf->getOptions();
    $options->set(array('isRemoteEnabled'=> true));
    $dompdf->setOptions($options);

    $dompdf->loadHtml($html);

    $dompdf->setPaper('letter');
    //$dompdf->setPaper('A4', 'landscape');

    $dompdf->render();

    $dompdf->stream("Lista_de_Proyectos.pdf", array("Attachment" => false));
?>