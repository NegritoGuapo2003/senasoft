<?php

    require_once "models/sondeoModel.php";
    require_once "models/temaModel.php";

    class SondeoController {

        public function sondeoGuardar(){

            if(isset($_POST)){

                $codigo = isset($_POST['codigo']) ? (int)$_POST['codigo'] : "" ;
                $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "" ;
                $fecha_inicio = isset($_POST['fecha_inicio']) ? $_POST['fecha_inicio'] : "" ;
                $fecha_cierre = isset($_POST['fecha_cierre']) ? $_POST['fecha_cierre'] : "" ;
                $tema = isset($_POST['tema']) ? (int)$_POST['tema'] : "" ;
                $admin = isset($_POST['admin']) ? (int)$_POST['admin'] : "" ;
                //Recibir datos del archivo
                $nombre_archivo = $_FILES['imagen']['name'];
                $tipo_archivo = $_FILES['imagen']['type'];
                $tamaño_archivo = $_FILES['imagen']['size'];
                
                if($tipo_archivo == "image/jpeg" || $tipo_archivo == "image/jpg"
                || $tipo_archivo == "image/png" || $tipo_archivo == "image/gif"){
                    
                    move_uploaded_file($_FILES['imagen']['tmp_name'], $nombre_archivo);
                    $imagen = true;
                }

                if(!empty($codigo) && !empty($nombre) && !empty($fecha_inicio) 
                && !empty($fecha_cierre) &&!empty($tema) && !empty($nombre_archivo) && !empty($admin)){

                    $sondeo = new SondeoModel();
                    $sondeo->setCodigo($codigo);
                    $sondeo->setNombre($nombre);
                    $sondeo->setFechaInicio($fecha_inicio);
                    $sondeo->setFechaCierre($fecha_cierre);
                    $sondeo->setCodigo($codigo);
                    $sondeo->setCodigo($codigo);
                    $sondeo->setCodigo($codigo);
                    $sondeos = $sondeo->guardarSondeo();

                    var_dump($sondeos);

                }

            }

        }

        public function registroSondeo(){

            $tema = new TemaModel();
            $temas = $tema->getAll();

            require_once 'views/sondeo/sondeo.php';
        }

        public function mostrarSondeo(){

            $tema = new TemaModel();
            $temas = $tema->getAll();

            require_once 'views/sondeo/sondeosDisponibles.php';

        }

    }

?>