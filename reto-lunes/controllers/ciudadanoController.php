<?php

    require_once "models/ciudadanoModel.php";

    class ciudadanoController {

        public function login(){

            var_dump($_POST);
            die();
            
        }

        public function index(){

            $ciudadano = new CiudadanoModel();
            $ciudadanos = $ciudadano->getCiudadanos();

            var_dump($_POST);
            die();

            require_once 'views/ciudadano.php';

        }

    }