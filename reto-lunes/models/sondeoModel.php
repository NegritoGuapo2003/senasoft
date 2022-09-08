<?php

    class SondeoModel{

        private $codigo;
        private $nombre;
        private $fecha_inicio;
        private $fecha_cierre;
        private $codigo_tema;
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

        //GET Y SET PARA EL FECHA INICIO
        public function getFechaInicio(){
            return $this->fecha_inicio;
        }

        public function setFechaInicio($fecha_inicio){
            $this->fecha_inicio = $this->db->real_escape_string($fecha_inicio);
        }

        //GET Y SET PARA EL FECHA CIERRE
        public function getFechaCierre(){
            return $this->fecha_cierre;
        }

        public function setFechaCierre($fecha_cierre){
            $this->fecha_cierre = $this->db->real_escape_string($fecha_cierre);
        }

        //GET Y SET PARA EL TEMA DEL SONDEO
        public function getCodigoTema(){
            return $this->codigo_tema;
        }

        public function setCodigoTema($codigo_tema){
            $this->codigo_tema = $this->db->real_escape_string($codigo_tema);
        }


        //GET Y SET PARA EL URL IMAGEN
        public function getUrlImagen(){
            return $this->url_imagen;
        }

        public function setUrlImagen($url){
            $this->url_imagen = $this->db->real_escape_string($url);
        }

        //GET Y SET PARA EL CODIGO ADMIN
        public function getCodigoAdministrador(){
            return $this->adm_codigo;
        }

        public function setCodigoAdministrador($codigo){
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

        public function guardarSondeo(){

            $sql = "INSERT INTO tblsondeo VALUES({$this->getCodigo()},{$this->getNombre()},{$this->getFechaInicio()},{$this->getFechaCierre()},{$this->getCodigoTema()},{$this->getUrlImagen()},{$this->getCodigoAdministrador()})";
            $guardar = $this->db->query($sql);

            $validado = false;

            if($guardar){
                $validado = $guardar;
            }

            return $validado;

        }

    }