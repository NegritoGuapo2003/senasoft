<?php

    class CertificadoModel{

        // propiedad que obtiene el codigo auto-incremetal de la bd
        private $codigo;
        private $nombre;
        private $ciudadano_documento;
        private $fecha_creacion;


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

        //GET Y SET PARA DOCUMENTO CIUDADANO
        public function getCedula(){
            return $this->ciudadano_documento;
        }

        public function setCedula($documento){
            $this->ciudadano_documento = $this->db->real_escape_string($documento);
        }

        //GET Y SET PARA FECHA
        public function getFecha(){
            return $this->fecha_creacion;
        }

        public function setFecha($fecha){
            $this->fecha_creacion = $this->db->real_escape_string($fecha);
        }






        public function getCertificados(){

            $sql = "SELECT * FROM tblcertificados";
            $certificados = $this->db->query("$sql");

            return $certificados;

        }

        

    }


?>