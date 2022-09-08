<?php

    require_once "models/sondeoModel.php";
    require_once "models/temaModel.php";
    require_once "models/sexoModel.php";
    require_once "models/etniaModel.php";
    require_once "models/nivelEducativoModel.php";
    require_once "models/preguntasModel.php";

    class SondeoController {

        public function sondeoGuardar(){

            if(isset($_POST) && count($_POST) > 11){

                $codigo = isset($_POST['codigo']) ? (int)$_POST['codigo'] : "" ;
                $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "" ;
                $fecha_inicio = isset($_POST['fecha_inicio']) ? $_POST['fecha_inicio'] : "" ;
                $fecha_cierre = isset($_POST['fecha_cierre']) ? $_POST['fecha_cierre'] : "" ;
                $tema = isset($_POST['tema']) ? (int)$_POST['tema'] : "" ;
                $edad = isset($_POST['edad']) ? (int)$_POST['edad'] : "" ;
                $sexo = isset($_POST['sexo']) ? (int)$_POST['sexo'] : "" ;
                $etnia = isset($_POST['etnia']) ? (int)$_POST['etnia'] : "" ;
                $estrato = isset($_POST['estrato']) ? (int)$_POST['estrato'] : "" ;
                $nivel_academico = isset($_POST['nivel_academico']) ? (int)$_POST['nivel_academico'] : "" ;
                $admin = isset($_POST['admin']) ? (int)$_POST['admin'] : "" ;
                //Recibir datos del archivo
                if(!empty($_FILES['imagen']['name'])){
                    $nombre_archivo = $_FILES['imagen']['name'];
                    $tipo_archivo = $_FILES['imagen']['type'];
                    $tamaño_archivo = $_FILES['imagen']['size'];
                    $directorio = 'uploads/images/';
                    $subir_archivo = $directorio.basename($_FILES['imagen']['name']);
                    
                    if($tipo_archivo == "image/jpeg" || $tipo_archivo == "image/jpg"
                    || $tipo_archivo == "image/png" || $tipo_archivo == "image/gif"){
                        
                            if(move_uploaded_file($_FILES['imagen']['tmp_name'], $subir_archivo)){
                                echo "Subido con exito";
                            }else{
                                echo "Fallo";
                            }

                    }
                }else{
                    $nombre_archivo = "defecto.jpg";
                }

                if(!empty($codigo) && !empty($nombre) && !empty($fecha_inicio) 
                && !empty($fecha_cierre) &&!empty($tema) && !empty($edad) && !empty($sexo)
                && !empty($etnia) && !empty($estrato) && !empty($nivel_academico) 
                && !empty($admin) ){

                    $sondeo = new SondeoModel();
                    $sondeo->setCodigo($codigo);
                    $sondeo->setNombre($nombre);
                    $sondeo->setFechaInicio($fecha_inicio);
                    $sondeo->setFechaCierre($fecha_cierre);
                    $sondeo->setCodigoTema($tema);
                    $sondeo->setEdad($edad);
                    $sondeo->setCodigoSexo($sexo);
                    $sondeo->setCodigoEtnia($etnia);
                    $sondeo->setEstrato($estrato);
                    $sondeo->setCodigoNivelAcademico($nivel_academico);
                    $sondeo->setUrlImagen($nombre_archivo);
                    $sondeo->setCodigoAdministrador($admin);
                    $sondeos = $sondeo->guardarSondeo();

                }

                if(count($_POST) >= 11){

                    $cont = count($_POST) - 11;

                    for ($i=0; $i < $cont; $i++) { 
                        
                        $nombre_pregunta = $_POST['pregunta'.$i];

                        $codigo_aleatorio = rand(10000,99999);

                        $pregunta = new PreguntasModel();
                        $pregunta->setCodigo($codigo_aleatorio);
                        $pregunta->setNombre($nombre_pregunta);
                        $preguntas = $pregunta->insertarPreguntas();

                        if($preguntas){

                            $pregunta->setCodigoPregunta($codigo_aleatorio);
                            $pregunta->setCodigoSondeo($codigo);
                            $preguntas_sondeo = $pregunta->insertarSondeoPregunta();

                            var_dump($preguntas_sondeo);

                        }
    
                    }

                }

            }else{
                echo "Debes generar preguntas para el sondeo";
            }

        }

        public function registroSondeo(){

            $tema = new TemaModel();
            $temas = $tema->getAll();

            $sexo = new SexoModel();
            $sex = $sexo->getAll();

            $etnia = new EtniaModel();
            $etn = $etnia->getAll();

            $nivel_educativo = new NivelEducativoModel();
            $niv = $nivel_educativo->getAll();

            require_once 'views/sondeo/sondeo.php';
        }

        public function mostrarSondeo(){

            $sondeo = new SondeoModel();
            $sondeos = $sondeo->getSondeos();

            require_once 'views/sondeo/sondeosDisponibles.php';

        }

        public function detalleSondeo(){
            
        }

    }

?>