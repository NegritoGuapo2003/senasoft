<?php

    class CiudadanoModel{

        private $tipo_documento;
        private $documento;
        private $nombre;
        private $apellidos;
        private $telefono_fijo;
        private $celular;
        private $email;
        private $codigo_municipio;
        private $direccion;
        private $codigo_barrio_vereda;
        private $fecha_nacimiento;
        private $codigo_etnia;
        private $codigo_condicion;
        private $estrato;
        private $codigo_nivel_educativo;
        private $acceso_dispositivos;
        private $codigo_tipos_acceso;
        private $acceso_internet;
        private $codigo_regimen;
        private $codigo_validacion;

        //GET Y SET PARA EL TIPO DE DOCUMENTO
        public function getTipoDocumento(){
            $this->tipo_documento;
        }

        public function setTipoDocumento($tipo_documento){
            $this->tipo_documento = $tipo_documento;
        }

        //GET Y SET PARA EL DOCUMENTO
        public function getDocumento(){
            $this->documento;
        }

        public function setDocumento($documento){
            $this->documento = $documento;
        }

        //GET Y SET PARA EL NOMBRE
        public function getNombre(){
            $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        //GET Y SET PARA LOS APELLIDOS
        public function getApellidos(){
            $this->apellidos;
        }

        public function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }

        //GET Y SET PARA EL TELEFONO FIJO
        public function getTelefonoFijo(){
            $this->telefono_fijo;
        }

        public function setTelefonoFijo($telefono_fijo){
            $this->telefono_fijo = $telefono_fijo;
        }

        //GET Y SET PARA EL CELULAR
        public function getCelular(){
            $this->celular;
        }

        public function setCelular($celular){
            $this->celular = $celular;
        }

        //GET Y SET PARA EL EMAIL
        public function getEmail(){
            $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        //GET Y SET PARA EL CODIGO DEL MUNICIPIO
        public function getCodigoMunicipio(){
            $this->codigo_municipio;
        }

        public function setCodigoMunicipio($codigo_municipio){
            $this->codigo_municipio = $codigo_municipio;
        }

        //GET Y SET PARA LA DIRECCION
        public function getDireccion(){
            $this->direccion;
        }

        public function setDireccion($direccion){
            $this->direccion = $direccion;
        }

        //GET Y SET PARA EL CODIGO DEL BARRIO/VEREDA
        public function getCodigoBarrioVereda(){
            $this->codigo_barrio_vereda;
        }

        public function setCodigoBarrioVereda($codigo_barrio_vereda){
            $this->codigo_barrio_vereda = $codigo_barrio_vereda;
        }

        //GET Y SET PARA LA FECHA DE NACIMIENTO
        public function getFechaNacimiento(){
            $this->fecha_nacimiento;
        }

        public function setFechaNacimiento($fecha_nacimiento){
            $this->fecha_nacimiento = $fecha_nacimiento;
        }

        //GET Y SET PARA LA ETNIA
        public function getCodigoEtnia(){
            $this->codigo_etnia;
        }

        public function setCodigoEtnia($codigo_etnia){
            $this->codigo_etnia = $codigo_etnia;
        }

        //GET Y SET PARA EL DOCUMENTO
        public function getCodigoCondicion(){
            $this->codigo_condicion;
        }

        public function setCodigoCondicion($codigo_condicion){
            $this->codigo_condicion = $codigo_condicion;
        }

        //GET Y SET PARA EL ESTRATO
        public function getEstrato(){
            $this->estrato;
        }

        public function setEstrato($estrato){
            $this->estrato = $estrato;
        }

        //GET Y SET PARA EL NIVEL EDUCATIVO
        public function getNivelEducativo(){
            $this->codigo_nivel_educativo;
        }

        public function setNivelEducativo($codigo_nivel_educativo){
            $this->codigo_nivel_educativo = $codigo_nivel_educativo;
        }

        //GET Y SET PARA EL ACCESO A DISPOSITIVOS
        public function getAccesoDispositivos(){
            $this->acceso_dispositivos;
        }

        public function setAccesoDispositivos($acceso_dispositivos){
            $this->acceso_dispositivos = $acceso_dispositivos;
        }

        //GET Y SET PARA LA DIRECCION
        public function getCodigoTiposAcceso(){
            $this->codigo_tipos_acceso;
        }

        public function setCodigoTiposAcceso($codigo_tipos_acceso){
            $this->codigo_tipos_acceso = $codigo_tipos_acceso;
        }

        //GET Y SET PARA LA ACCESO INTERNET
        public function getAccesoInternet(){
            $this->acceso_internet;
        }

        public function setAccesoInternet($acceso_internet){
            $this->acceso_internet = $acceso_internet;
        }

        //GET Y SET PARA LA EL REGIMEN
        public function getCodigoRegimen(){
            $this->codigo_regimen;
        }

        public function setCodigoRegimen($codigo_regimen){
            $this->codigo_regimen = $codigo_regimen;
        }

        //GET Y SET PARA LA EL CODIGO DE VALIDACION
        public function getCodigoValidacion(){
            $this->codigo_validacion;
        }

        public function setCodigoValidacion($codigo_validacion){
            $this->codigo_validacion = $codigo_validacion;
        }



        //FUNCIONES PARA LAS VALIDACIONES DE LOS DATOS QUE SE MANIPULARÁN
        //EN LA BASE DE DATOS
        public function getCiudadanos(){

            $sql = "SELECT * FROM tblciudadano";
            $ciudadano = $this->db->query("$sql");

            return $ciudadano;

        }

    }