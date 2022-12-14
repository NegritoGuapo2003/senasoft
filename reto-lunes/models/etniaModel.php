<?php

    class EtniaModel{

        private $codigo;
        private $nombre;
        private $db;


        public function __construct()
        {
            $this->db = Conexion::conectar();
        }

        //GET Y SET PARA EL CODIGO

        public function getCodigo(){
            return $this->codigo;
        }

        public function setCodigo($codigo){
            $this->codigo = $this->db->real_escape_string($codigo);
        }
        //GET Y SET PARA EL NOMBRE

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $this->db->real_escape_string($nombre);
        }

        //Funciones para la base de datos
        public function getAll(){

            $sql = "SELECT * FROM tbletnia  ORDER BY et_nombre ASC";
            $etnia = $this->db->query($sql);

            $validado = false;

            if($etnia){
                $validado = $etnia;
            }

            return $validado;

        }

    }
