<?php

    class administradorModel{

        // propiedad que obtiene el codigo auto-incremetal de la bd
        private $codigo;
        private $nombre;
        //calve de la cuenta de admin
        private $clave;


        public function __construct()
        {
            $this->db = Conexion::conectar();
        }

        public function getAdmins(){

            $sql = "SELECT * FROM tbladministrador";
            $admin = $this->db->query("$sql");

            return $admin;

        }

    }