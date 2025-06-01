<?php
    ob_start();

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        <?php include 'estilos.css'; ?>
    </style>
<div>
    <h2>Listado de Reportes</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Proyecto</th>
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
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>    
</div>
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

    $dompdf->stream("Lista_de_Reportes.pdf", array("Attachment" => false));
?>