<?php

    class SesionControlador extends Controlador{

        
        private $sesion;
        public function __construct(){
            $this->sesion = $this->modelo('SesionModelo');
            session_start();
            
            
        }
        public function index(){
            echo "index";
        }

        public function sesion(){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $u=$_POST['usuario'];
                $c=$_POST['contra'];

                $this->iniciosesion($u, $c);

            }else{
                if (isset($_SESSION["usuarioSesion"]) && !empty($_SESSION["usuarioSesion"])) {
                    
                }
                $this->vista("sesion/login", $this->datos);    
            }  
        }

        public function iniciosesion($u, $c){
            
            // Asegúrate de que comprobacion() devuelva un objeto o un array, no un stdClass
                $usuarios = $this->sesion->comprobacion($u, $c);

            
            // Imprime el contenido de $usuarios para depurar
               // print_r($usuarios);

            // Verifica si $usuarios es un objeto stdClass
                if (is_object($usuarios)) {
                    // Convierte el objeto stdClass a un array asociativo
                    $usuarios = json_decode(json_encode($usuarios), true);
                }

            // Asigna el arreglo de usuarios a $this->datos
                $this->datos["usuarios"] = $usuarios;

                

            // Obtén el valor de "tipo_usuario" del arreglo, o asigna un valor predeterminado si no está definido
                $tipo_usuario = $this->datos["usuarios"]["TipoUsuario"];
                
            //Redireccionar a la pagina de inicio correspondiente
                
                switch ($tipo_usuario) {
                    case 'equipo':
                            redirecionar('/EquipoControlador/mostrarplantilla');
                        break;
                    case 'aficionado':
                        echo "Seleccionaste la opción 2";
                        break;
                    case 'admin':
                        echo "Seleccionaste la opción 3";
                        break;
                    default:
                        echo "Opción no válida";
                }

            if(isset($usuarios) && !empty($usuarios)){
                Sesion::crearSesion($usuarios);
            }else{

            }
            exit;
            
        }

        public function registro(){
    
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            }else{
                $this->vista("registrar/registrar");
            }  
        }

        public function cerrar(){
            Sesion::cerrarSesion();
            redirecionar("/");
        }
    }