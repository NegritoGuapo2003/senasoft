<?php

    class Conexion{

        public static function conectar(){
            
            $conexion = new mysqli("localhost","root","","participacion_ciudadana");
            $conexion->query("SET NAMES 'utf8'");

            return $conexion;

        }

    }