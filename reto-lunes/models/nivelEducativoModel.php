<?php

    class NivelEducativoModel{

        // propiedad que obtiene el codigo auto-incremetal de la bd
        private $codigo;
        private $nombre;


        public function __construct()
        {
            $this->db = Conexion::conectar();
        }

        // GET Y SET PARA CODIGO
        public function getCodigo(){
            return $this->codigo;
        }

        public function setCodigo($codigo){
            $this->codigo = $this->db->real_escape_string($codigo);
        }

        //GET Y SET PARA NOMBRE
        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->codigo = $this->db->real_escape_string($nombre);
        }

        public function getAll(){

            $sql = "SELECT * FROM tblnivel_educativo ORDER BY ne_nombre ASC";
            $nivel = $this->db->query($sql);

            $validado = false;

            if($nivel){
                $validado = $nivel;
            }

            return $validado;

        }

        

    }


?>