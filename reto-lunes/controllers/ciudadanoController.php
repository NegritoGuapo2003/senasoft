<?php

    require_once "models/ciudadanoModel.php";

    class ciudadanoController {

        public function login(){

            if(isset($_POST)){
                
                $tipo_documento = isset($_POST['tipo_documento']) ? $_POST['tipo_documento'] : "" ;
                $documento = isset($_POST['documento']) ? $_POST['documento'] : "" ;
                $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : "" ;

                //ARRAY QUE MOSTRARÁ LOS POSIBLES ERRORES
                $errores = array();

                //VALIDACION PARA EL TIPO DEL DOCUMENTO
                if(!is_int($tipo_documento) && !empty($tipo_documento)){
                    $tipo_documento_validado = true;
                }else{
                    $errores['tipo_documento'] = "Tipo de documento no valido";
                }

                //VALIDACION PARA EL DOCUMENTO
                if(is_int($documento) && !empty($documento) && preg_match("/^[[:digit:]]+$/",$documento)){
                    $documento_validado = true;
                }else{
                    $errores['documento'] = "Documento no valido";
                }

                //VALIDACION PARA EL TIPO DEL DOCUMENTO
                if(!is_int($codigo) && !empty($codigo)){
                    $codigo_validado = true;
                }else{
                    $errores['codigo'] = "Codigo no valido";
                }

                if(count($errores) == 0){

                    $ciudadano = new CiudadanoModel();
                    
                    var_dump($ciudadano->getCiudadanos());

                }

                var_dump($errores);
                var_dump($documento);
                die();

            }

        }

        public function index(){

            $ciudadano = new CiudadanoModel();
            $ciudadanos = $ciudadano->getCiudadanos();

            var_dump($_POST);
            die();

            require_once 'views/ciudadano.php';

        }

        public function registro(){

            require_once 'views/ciudadano/registro.php';

        }

    }