<?php

    class PreguntasModel{

        private $codigo;
        private $nombre;
        private $codigo_pregunta;
        private $codigo_sondeo;
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

        //GET Y SET PARA EL NOMBRE
        public function getCodigoPregunta(){
            return $this->codigo_pregunta;
        }

        public function setCodigoPregunta($codigo_pregunta){
            $this->codigo_pregunta = $this->db->real_escape_string($codigo_pregunta);
        }

        //GET Y SET PARA EL NOMBRE
        public function getCodigoSondeo(){
            return $this->codigo_sondeo;
        }

        public function setCodigoSondeo($codigo_sondeo){
            $this->codigo_sondeo = $this->db->real_escape_string($codigo_sondeo);
        }

        //Funciones para la base de datos
        public function getAll(){

            $sql = "SELECT * FROM tblpreguntas ORDER BY pr_nombre ASC";
            $sexo = $this->db->query($sql);

            $validado = false;

            if($sexo){
                $validado = $sexo;
            }

            return $validado;

        }

        public function insertarPreguntas(){

            $sql = "INSERT INTO tblpreguntas VALUES({$this->getCodigo()},'{$this->getNombre()}')";
            $pregunta = $this->db->query($sql);

            $validado = false;

            if($pregunta){
                $validado = true;
            }

            return $validado;

        }

        public function insertarSondeoPregunta(){

            $sql = "INSERT INTO tblsondeo_pregunta VALUES({$this->getCodigoPregunta()},{$this->getCodigoSondeo()},null)";
            $sondeo = $this->db->query($sql);

            $validado = false;

            if($sondeo){
                $validado = true;
            }

            return $validado;

        }

    }