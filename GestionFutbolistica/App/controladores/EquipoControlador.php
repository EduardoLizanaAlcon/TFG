<?php

    class EquipoControlador extends Controlador{
        var $modelequipo;

        public function __construct(){
            session_start();
            $this->modelequipo = $this->modelo('EquipoModelo');
        }
        public function index(){   
            
        }


        public function perfil(){

            $this->vista("equipo/perfil", $this->datos);
        }

        public function mostrarplantilla(){
            $id_usuario = $_SESSION["usuarioSesion"]["id_usuario"];
            $this->datos['jugadores'] = $this->modelequipo->obtenerJugadores($id_usuario);
            //$this->datos['entrenador'] = $this->modelequipo->obtenerEntrenador($id_usuario);
            //$this->datos['entrenador']['id_Entrenador];
            //$this->datos['staff'] = $this->modelequipo->obtenerSTAFF($id_entrenador);
            
            $this->vista("equipo/plantilla", $this->datos);

        }

        public function editarPlantillaJugador(){

        }

        public function editarPlantillaEntrenador(){

        }

        public function editarPlantillaSTAFF(){

        }


        public function cesion(){

        }

        public function traspaso(){

        }

    }