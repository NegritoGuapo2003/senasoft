<?php

    class SondeoModel{

        private $codigo;
        private $nombre;
        private $fecha_inicio;
        private $fecha_cierre;
        private $edad;
        private $codigo_sexo;
        private $codigo_etnia;
        private $estrato;
        private $codigo_nivel_academico;
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

        //GET Y SET PARA LA EDAD
        public function getEdad(){
            return $this->edad;
        }

        public function setEdad($edad){
            $this->edad = $this->db->real_escape_string($edad);
        }

        //GET Y SET PARA EL CODIGO_SEXO
        public function getCodigoSexo(){
            return $this->codigo_sexo;
        }

        public function setCodigoSexo($codigo_sexo){
            $this->codigo_sexo = $this->db->real_escape_string($codigo_sexo);
        }

        //GET Y SET PARA EL CODIGO ETNIA
        public function getCodigoEtnia(){
            return $this->codigo_etnia;
        }

        public function setCodigoEtnia($codigo_etnia){
            $this->codigo_etnia = $this->db->real_escape_string($codigo_etnia);
        }

        //GET Y SET PARA EL ESTRATO
        public function getEstrato(){
            return $this->estrato;
        }

        public function setEstrato($estrato){
            $this->estrato = $this->db->real_escape_string($estrato);
        }

        //GET Y SET PARA EL CODIGO
        public function getCodigoNivelAcademico(){
            return $this->codigo_nivel_academico;
        }

        public function setCodigoNivelAcademico($codigo_nivel_academico){
            $this->codigo_nivel_academico = $this->db->real_escape_string($codigo_nivel_academico);
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

        public function getSondeos(){

            $sql = "SELECT * FROM tblsondeo ORDER BY so_codigo DESC LIMIT 5";
            $sondeo = $this->db->query($sql);

            $validado = false;

            if($sondeo){
                $validado = $sondeo;
            }

            return $validado;

        }

        public function guardarSondeo(){

            $sql = "INSERT INTO tblsondeo VALUES({$this->getCodigo()},'{$this->getNombre()}','{$this->getFechaInicio()}','{$this->getFechaCierre()}',{$this->getCodigoTema()},{$this->getEdad()},{$this->getCodigoSexo()},{$this->getCodigoEtnia()},{$this->getEstrato()},{$this->getCodigoNivelAcademico()},'{$this->getUrlImagen()}',{$this->getCodigoAdministrador()})";;
            $guardar = $this->db->query($sql);

            $validado = false;

            if($guardar){
                $validado = $guardar;
            }

            return $validado;

        }

        public function detallesSondeo(){

            $sql = "SELECT so.*, te.te_nombre as 'tema', se.se_nombre as 'sexo', et.et_nombre as 'etnia', na.ne_nombre as 'nivel', adm.adm_nombre as 'administrador' FROM tblsondeo as so"
            ." INNER JOIN tbltema as te "
            ."ON so.te_codigo = te.te_codigo "
            ."INNER JOIN tblsexo as se "
            ."ON so.se_codigo = se.se_codigo "
            ."INNER JOIN tbletnia as et "
            ."ON so.et_codigo = et.et_codigo "
            ."INNER JOIN tblnivel_educativo as na "
            ."ON so.na_codigo = na.ne_codigo "
            ."INNER JOIN tbladministrador as adm "
            ."ON so.adm_codigo = adm.adm_codigo "
            ."WHERE so.so_codigo = {$this->getCodigo()}";

            $detalle = $this->db->query($sql);

            $detalles = false;

            if($detalle){
                $detalles = $detalle->fetch_object();
            }

            return $detalles;

        }

    }