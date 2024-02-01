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
    }