<?php require_once 'config/conexion.php'; ?>
<?php require_once 'autoload.php'; ?>
<?php require_once 'layouts/head.php'; ?>
<?php require_once 'config/helpers.php'?>

<?php if(!isset($_SESSION['ciudadano'])): ?>
    <?php require_once 'layouts/aside.php'; ?>
<?php endif; ?>


<?php

    if(!isset($_GET['controlador']) || !isset($_GET['accion'])){
        echo "<h1>Index principal</h1>";
        if(isset($_GET['codigo'])){  
            echo "<br>";
            echo "<hr>";
            echo "<br>";
            echo "<p style='color:#000;'>Este es tu codigo para entrar futuramente a tu cuenta: ".$_GET['codigo']."</p>";
        }
    }else{
        if(isset($_GET['controlador']) && class_exists($_GET['controlador']."Controller")){
            $nombre_controlador = $_GET['controlador']."Controller";
            $controlador = new $nombre_controlador();
    
            if(isset($_GET['accion']) && method_exists($nombre_controlador,$_GET['accion'])){
                $nombre_accion = $_GET['accion'];
                $controlador->$nombre_accion();
            }else{
                echo error404();
            }
        }else{
            echo error404();
        }
    }

?>



<?php require_once 'layouts/footer.php'; ?>
