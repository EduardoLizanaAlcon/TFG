<?php

class EquipoModelo{
        private $db;
        public function __construct(){
        $this->db = new Base;
        
        }

        public function obtenerJugadores($id){
            $this->db->query("SELECT * FROM `jugador` WHERE `Equipo`=:id;");
            $this->db->bind(':id', $id);
            return $this->db->registros();
        }
        
        public function obtenerEntrenador($id){
            $this->db->query("SELECT * FROM `entrenador` WHERE `Equipo`=:id;");
            $this->db->bind(':id', $id);
            return $this->db->registros();
        }

        public function obtenerPartidos($id){
            $this->db->query("SELECT * FROM `partido` where `Local`=:id or `Visitante`=:id");
            $this->db->bind(':id', $id);
            return $this->db->registros();
        }

        public function obtenerDatosEquipo($id){
            $this->db->query("SELECT * FROM `equipo` where `id_usuario` = :id");
            $this->db->bind(':id', $id);
            return $this->db->registros();
        }
    }