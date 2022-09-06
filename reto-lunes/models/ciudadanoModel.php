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

        //GET Y SET PARA EL DOCUMENTO
        public function getFechaNacimiento(){
            $this->fecha_nacimiento;
        }

        public function setFechaNacimiento($fecha_nacimiento){
            $this->fecha_nacimiento = $fecha_nacimiento;
        }



        //FUNCIONES PARA LAS VALIDACIONES DE LOS DATOS QUE SE MANIPULARÁN
        //EN LA BASE DE DATOS
        public function getCiudadanos(){

            $sql = "SELECT * FROM tblciudadano";
            $ciudadano = $this->db->query("$sql");

            return $ciudadano;

        }

    }