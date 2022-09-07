<?php

    class SondeoModel{

        private $codigo;
        private $nombre;
        private $documento_ciudadano;
        private $filtro_codigo;
        private $fecha_inicio;
        private $fecha_cierre;
        private $url_imagen;
        private $adm_codigo;


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

        //GET Y SET PARA EL DOCUMENTO
        public function getDocumento(){
            return $this->documento_ciudadano;
        }

        public function setDocumento($doc){
            $this->documento_ciudadano = $this->db->real_escape_string($doc);
        }


        //GET Y SET PARA EL CODIGO FILTRO
        public function getFiltroCodigo(){
            return $this->filtro_codigo;
        }

        public function setFiltroCodigo($codigo){
            $this->filtro_codigo = $this->db->real_escape_string($codigo);
        }

        //GET Y SET PARA EL FECHA INICIO
        public function getFecha_Inicio(){
            return $this->fecha_inicio;
        }

        public function setFecha_Inicio($fecha){
            $this->fecha_inicio = $this->db->real_escape_string($fecha);
        }

        //GET Y SET PARA EL FECHA CIERRE
        public function getFecha_Cierra(){
            return $this->fecha_cierre;
        }

        public function setFecha_Cierra($fecha){
            $this->fecha_cierre = $this->db->real_escape_string($fecha);
        }


        //GET Y SET PARA EL URL IMAGEN
        public function getUrl_Imagen(){
            return $this->url_imagen;
        }

        public function setUrl_Imagen($url){
            $this->url_imagen = $this->db->real_escape_string($url);
        }

        //GET Y SET PARA EL CODIGO ADMIN
        public function getAdm_Codigo(){
            return $this->adm_codigo;
        }

        public function setAdm_Codigo($codigo){
            $this->adm_codigo = $this->db->real_escape_string($codigo);
        }


        //Funciones para la base de datos
        public function getAll(){

            $sql = "SELECT * FROM tblsondeo";
            $sondeo = $this->db->query($sql);

            $validado = false;

            if($sondeo){
                $validado = $sondeo;
            }

            return $validado;

        }

    }