<?php

    class ciudadanoModel{

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

        public function __construct()
        {
            $this->db = Conexion::conectar();
        }

        public function getCiudadanos(){

            $sql = "SELECT * FROM tblciudadano";
            $ciudadano = $this->db->query("$sql");

            return $ciudadano;

        }

    }