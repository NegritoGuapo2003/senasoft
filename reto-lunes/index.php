<?php require_once 'config/conexion.php'; ?>
<?php require_once 'autoload.php'; ?>
<?php require_once 'layouts/head.php'; ?>
<?php require_once 'config/helpers.php'?>

<?php require_once 'layouts/aside.php'; ?>


<?php

    if(isset($_GET['controlador'])){
        $nombre_controlador = $_GET['controlador']."Controller";
        $controlador_validado = true;
    }else{
        $nombre_controlador = "";
        $controlador_validado = false;
    }

    if(isset($_GET['accion'])){
        $nombre_accion = $_GET['accion'];
        $accion_validada = true;
    }else{
        $nombre_accion = "";
        $accion_validada = false;
    }

    if($controlador_validado && $accion_validada){

        $controlador = new $nombre_controlador();
        $controlador->$nombre_accion();

    }

?>



<?php require_once 'layouts/footer.php'; ?>
