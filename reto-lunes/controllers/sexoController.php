<?php

    require_once "models/sexoModel.php";

    class SexoController{

        public function mostrar(){

            $sexo = new SexoModel();
            $sex = $sexo->getAll();

            require_once 'views/ciudadano/registro.php';

        }

    }