<?php

    function url($controlador,$accion){

            $url = "?controlador=$controlador&accion=$accion";
            return $url;

    }

    function error404(){

            $error = "La pagina que buscas no existe";

            return $error;

    }

