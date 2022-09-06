<?php

    require_once "models/ciudadanoModel.php";

    class ciudadanoController {

        public function login(){

            if(isset($_POST)){
                
                

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