<?php
    
    class CiudadanoModel{

        private $tipo_documento;
        private $documento;
        private $nombre;
        private $apellidos;
        private $sexo;
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
        private $acceso_internet;
        private $codigo_regimen;
        private $codigo_validacion;
        private $db;



        public function __construct()
        {
            $this->db = Conexion::conectar();
        }

        //GET Y SET PARA EL TIPO DE DOCUMENTO
        public function getTipoDocumento(){
            $this->tipo_documento;
        }

        public function setTipoDocumento($tipo_documento){
            $this->tipo_documento = $this->db->real_escape_string($tipo_documento);
        }

        //GET Y SET PARA EL DOCUMENTO
        public function getDocumento(){
            $this->documento;
        }

        public function setDocumento($documento){
            $this->documento = $this->db->real_escape_string($documento);
        }

        //GET Y SET PARA EL NOMBRE
        public function getNombre(){
            $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $this->db->real_escape_string($nombre);
        }

        //GET Y SET PARA LOS APELLIDOS
        public function getApellidos(){
            $this->apellidos;
        }

        public function setApellidos($apellidos){
            $this->apellidos = $this->db->real_escape_string($apellidos);
        }

        //GET Y SET PARA EL SEXO
        public function getSexo(){
            $this->sexo;
        }

        public function setSexo($sexo){
            $this->sexo = $this->db->real_escape_string($sexo);
        }

        //GET Y SET PARA EL TELEFONO FIJO
        public function getTelefonoFijo(){
            $this->telefono_fijo;
        }

        public function setTelefonoFijo($telefono_fijo){
            $this->telefono_fijo = $this->db->real_escape_string($telefono_fijo);
        }

        //GET Y SET PARA EL CELULAR
        public function getCelular(){
            $this->celular;
        }

        public function setCelular($celular){
            $this->celular = $this->db->real_escape_string($celular);
        }

        //GET Y SET PARA EL EMAIL
        public function getEmail(){
            $this->email;
        }

        public function setEmail($email){
            $this->email = $this->db->real_escape_string($email);
        }

        //GET Y SET PARA EL CODIGO DEL MUNICIPIO
        public function getCodigoMunicipio(){
            $this->codigo_municipio;
        }

        public function setCodigoMunicipio($codigo_municipio){
            $this->codigo_municipio = $this->db->real_escape_string($codigo_municipio);
        }

        //GET Y SET PARA LA DIRECCION
        public function getDireccion(){
            $this->direccion;
        }

        public function setDireccion($direccion){
            $this->direccion = $this->db->real_escape_string($direccion);
        }

        //GET Y SET PARA EL CODIGO DEL BARRIO/VEREDA
        public function getCodigoBarrioVereda(){
            $this->codigo_barrio_vereda;
        }

        public function setCodigoBarrioVereda($codigo_barrio_vereda){
            $this->codigo_barrio_vereda = $this->db->real_escape_string($codigo_barrio_vereda);
        }

        //GET Y SET PARA LA FECHA DE NACIMIENTO
        public function getFechaNacimiento(){
            $this->fecha_nacimiento;
        }

        public function setFechaNacimiento($fecha_nacimiento){
            $this->fecha_nacimiento = $this->db->real_escape_string($fecha_nacimiento);
        }

        //GET Y SET PARA LA ETNIA
        public function getCodigoEtnia(){
            $this->codigo_etnia;
        }

        public function setCodigoEtnia($codigo_etnia){
            $this->codigo_etnia = $this->db->real_escape_string($codigo_etnia);
        }

        //GET Y SET PARA EL DOCUMENTO
        public function getCodigoCondicion(){
            $this->codigo_condicion;
        }

        public function setCodigoCondicion($codigo_condicion){
            $this->codigo_condicion = $this->db->real_escape_string($codigo_condicion);
        }

        //GET Y SET PARA EL ESTRATO
        public function getEstrato(){
            $this->estrato;
        }

        public function setEstrato($estrato){
            $this->estrato = $this->db->real_escape_string($estrato);
        }

        //GET Y SET PARA EL NIVEL EDUCATIVO
        public function getNivelEducativo(){
            $this->codigo_nivel_educativo;
        }

        public function setNivelEducativo($codigo_nivel_educativo){
            $this->codigo_nivel_educativo = $this->db->real_escape_string($codigo_nivel_educativo);
        }

        //GET Y SET PARA EL ACCESO A DISPOSITIVOS
        public function getAccesoDispositivos(){
            $this->acceso_dispositivos;
        }

        public function setAccesoDispositivos($acceso_dispositivos){
            $this->acceso_dispositivos = $this->db->real_escape_string($acceso_dispositivos);
        }

        //GET Y SET PARA LA ACCESO INTERNET
        public function getAccesoInternet(){
            $this->acceso_internet;
        }

        public function setAccesoInternet($acceso_internet){
            $this->acceso_internet = $this->db->real_escape_string($acceso_internet);
        }

        //GET Y SET PARA LA EL REGIMEN
        public function getCodigoRegimen(){
            $this->codigo_regimen;
        }

        public function setCodigoRegimen($codigo_regimen){
            $this->codigo_regimen = $this->db->real_escape_string($codigo_regimen);
        }

        //GET Y SET PARA LA EL CODIGO DE VALIDACION
        public function getCodigoValidacion(){
            return $encrypt = password_hash($this->codigo_validacion, PASSWORD_BCRYPT, ['cost' => 4]);

        }

        public function setCodigoValidacion($codigo_validacion){
            $this->codigo_validacion = $this->db->real_escape_string($codigo_validacion);
        }

        //Funciones para bases de datos
        public function getCiudadanos(){

            $sql = "SELECT * FROM tblciudadano";
            $ciudadano = $this->db->query("$sql");

            return $ciudadano;

        }

        public function guardarCiudadano(){

            $sql = "INSERT INTO tblciudadano VALUES('{$this->tipo_documento}','{$this->documento}','{$this->nombre}','{$this->apellidos}',{$this->sexo},'{$this->telefono_fijo}','{$this->celular}','{$this->email}',{$this->codigo_municipio},'{$this->direccion}',{$this->codigo_barrio_vereda},'{$this->fecha_nacimiento}',{$this->codigo_etnia},{$this->codigo_condicion},{$this->estrato},{$this->codigo_nivel_educativo},'{$this->acceso_dispositivos}','{$this->acceso_internet}',{$this->codigo_regimen},'{$this->getCodigoValidacion()}')";
            echo $sql;
            $guardar = $this->db->query($sql);
            var_dump($this->db->error);
            
            $validado = false;
            
            if($guardar){
                $validado = true;
            }

            return $validado;

        }

        public function login(){

            // $sql = "SELECT * FROM ciudadanos WHERE ciu_email = {$this->getEmail()} AND  ciu_codigo_validacion = {$this->getCodigoValidacion}";
            

        }

    }