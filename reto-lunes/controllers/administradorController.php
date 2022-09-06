<?php

    require_once "models/administradorModel.php";

    class administradorController {

        public function login(){

            if(isset($_POST)){

                

            }

        }

        public function index(){

            $admin = new CiudadanoModel();
            

            var_dump($_POST);
            die();

            require_once 'views/ciudadano.php';

        }

    }

?>