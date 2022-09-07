<?php

    require_once "models/ciudadanoModel.php";

    class ciudadanoController {

        public function login(){

            if(isset($_POST)){
                
                $tipo_documento = isset($_POST['tipo_documento']) ? $_POST['tipo_documento'] : "" ;
                $documento = isset($_POST['documento']) ? (int)$_POST['documento'] : "" ;
                $codigo = isset($_POST['codigo']) ? (int)$_POST['codigo'] : "" ;

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
                if(is_int($codigo) && !empty($codigo)){
                    $codigo_validado = true;
                }else{
                    $errores['codigo'] = "Codigo no valido";
                }

                if(count($errores) == 0){

                    $ciudadano = new CiudadanoModel();
                    
                    
                }

            }

        }

        public function index(){

            $ciudadano = new CiudadanoModel();
            $ciudadanos = $ciudadano->getCiudadanos();

            require_once 'views/ciudadano.php';

        }

        public function registro(){

            require_once 'views/ciudadano/registro.php';

        }

        public function guardar(){

            if(isset($_POST)){
                
                

                $tipo_documento = isset($_POST['tipo_documento']) ? $_POST['tipo_documento'] : "" ;
                $cedula = isset($_POST['cedula']) ? (int)$_POST['cedula'] : "" ;
                $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "" ;
                $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : "" ;
                $telefono_fijo = isset($_POST['telefono_fijo']) ? (int)$_POST['telefono_fijo'] : "" ;
                $celular = isset($_POST['celular']) ? (int)$_POST['celular'] : "" ;
                $email = isset($_POST['email']) ? $_POST['email'] : "" ;
                $municipio = isset($_POST['municipio']) ? (int)$_POST['municipio'] : "" ;
                $barrio_vereda = isset($_POST['barrio_vereda']) ? (int)$_POST['barrio_vereda'] : "" ;
                $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : "" ;
                $nacimiento = $_POST['nacimiento'];
                $etnia = isset($_POST['etnia']) ? (int)$_POST['etnia'] : "" ;
                $discapacidad = isset($_POST['discapacidad']) ? (int)$_POST['discapacidad'] : "" ;
                $estrato = isset($_POST['estrato']) ? (int)$_POST['estrato'] : "" ;
                $nivel_educacion = isset($_POST['nivel_educacion']) ? (int)$_POST['nivel_educacion'] : "" ;
                $acceso_dispositivos = isset($_POST['acceso_dispositivos']) ? (int)$_POST['acceso_dispositivos'] : "" ;
                $dispositivos = isset($_POST['dispositivos']) ? (int)$_POST['dispositivos'] : "" ;
                $internet = isset($_POST['internet']) ? (int)$_POST['internet'] : "" ;
                $regimen = isset($_POST['regimen']) ? (int)$_POST['regimen'] : "" ;

                $errores = array();

                //Validacion para el tipo_documento
                if(!empty($tipo_documento)){
                    $tipo_documento_validado = true;
                }else{
                    $tipo_documento_validado = false;
                    $errores['tipo_documento'] = "Tipo de documento no valido";
                }

                //Validacion para la cedula
                if(!empty($cedula) && is_int($cedula) && preg_match("/[0-9]/",$cedula)){
                    $cedula_validado = true;
                }else{
                    $cedula_validado = false;
                    $errores['cedula'] = "Cedula no valida";
                }

                //Validacion para el nombre
                if(!empty($nombre) && !is_int($nombre) && !preg_match("/[0-9]/",$nombre)){
                    $nombre_validado = true;
                }else{
                    $nombre_validado = false;
                    $errores['nombre'] = "Nombre no valido";
                }

                //Validacion para los apellidos
                if(!empty($apellidos) && !is_int($apellidos) && !preg_match("/[0-9]/",$apellidos)){
                    $apellidos_validado = true;
                }else{
                    $apellidos_validado = false;
                    $errores['apellidos'] = "Apellidos no validos";
                }

                //Validacion para el telefono fijo
                if(!empty($telefono_fijo) && is_int($telefono_fijo) && preg_match("/[0-9]/",$telefono_fijo)){
                    $telefono_fijo_validado = true;
                }else{
                    $telefono_fijo_validado = false;
                    $errores['telefono_fijo'] = "Telefono no valido";
                }

                //Validacion para el celular
                if(!empty($celular) && is_int($celular) && preg_match("/[0-9]/",$celular)){
                    $celular_validado = true;
                }else{
                    $celular_validado = false;
                    $errores['celular'] = "Celular no valido";
                }

                //Validacion para el email
                if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $email_validado = true;
                }else{
                    $email_validado = false;
                    $errores['email'] = "Email no valido";
                }

                //Validacion para el municipio
                if(!empty($municipio)){
                    $municipio_validado = true;
                }else{
                    $municipio_validado = false;
                    $errores['municipio'] = "Municipio no valido";
                }

                //Validacion para el barrio_vereda
                if(!empty($barrio_vereda)){
                    $barrio_vereda_validado = true;
                }else{
                    $barrio_vereda_validado = false;
                    $errores['barrio_vereda'] = "Barrio/Vereda no valido";
                }

                //Validacion para la direccion
                if(!empty($direccion)){
                    $direccion_validado = true;
                }else{
                    $direccion_validado = false;
                    $errores['direccion'] = "Rellene este campo por favor";
                }

                //Validacion para el nacimiento
                if(!empty($nacimiento)){
                    $nacimiento_validado = true;
                }else{
                    $nacimiento_validado = false;
                    $errores['nacimiento'] = "Fecha no valida";
                }

                //Validacion para la etnia
                if(!empty($etnia)){
                    $etnia_validado = true;
                }else{
                    $etnia_validado = false;
                    $errores['etnia'] = "Etnia no valida";
                }

                //Validacion para la discapacidad
                if(!empty($discapacidad)){
                    $discapacidad_validado = true;
                }else{
                    $discapacidad_validado = false;
                    $errores['discapacidad'] = "Discapacidad no valida";
                }

                //Validacion para el estrato
                if(!empty($estrato)){
                    $estrato_validado = true;
                }else{
                    $estrato_validado = false;
                    $errores['estrato'] = "Estrato no valido";
                }

                //Validacion para el nivel_educacion
                if(!empty($nivel_educacion)){
                    $nivel_educacion_validado = true;
                }else{
                    $nivel_educacion_validado = false;
                    $errores['nivel_educacion'] = "Nivel de educacion no valido";
                }

                //Validacion para el acceso_dispositivos
                if(!empty($acceso_dispositivos)){
                    $acceso_dispositivos_validado = true;
                }else{
                    $acceso_dispositivos_validado = false;
                    $errores['acceso_dispositivos'] = "Tipo de documento no valido";
                }

                //Validacion para los dispositivos
                if(!empty($dispositivos)){
                    $dispositivos_validado = true;
                }else{
                    $dispositivos_validado = false;
                    $errores['dispositivos'] = "Dispositivos no validos";
                }

                //Validacion para el internet
                if(!empty($internet)){
                    $internet_validado = true;
                }else{
                    $internet_validado = false;
                    $errores['internet'] = "Internet no valido";
                }

                //Validacion para el regimen
                if(!empty($regimen)){
                    $regimen_validado = true;
                }else{
                    $regimen_validado = false;
                    $errores['regimen'] = "Regimen no valido";
                }

                if(count($errores) == 0){
                    echo "melo";
                }else{
                    var_dump($errores);
                }

            }

        }


    }