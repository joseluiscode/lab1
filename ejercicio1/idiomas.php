<?php
    class formIdiomas{
        public $idioma="EN";
        private $titulo;
        private $email;
        private $nombre;
        private $apellido;
        private $botonFormulario;

        public function obtenerTitulo(){
            return $this->titulo;
        }

        public function obtenerEmail(){
            return $this->email;
        }

        public function obtenerNombre(){
            return $this->nombre;
        }

        public function obtenerApellido(){
            return $this->apellido;
        }

        public function obtenerBoton(){
            return $this->botonFormulario;
        }

        public function cambiarIdioma(){
            if($this->idioma=="EN"){
                $this->titulo = "SUBSCRIBE TO OUR MAILING LIST";
                $this->email = "Email Address";
                $this->nombre = "First Name";
                $this->apellido = "Last Name";
                $this->botonFormulario = "Subscribe";
            }else if($this->idioma=="ES"){
                $this->titulo = "SUSCRÍBASE A NUESTRA LISTA DE CORREO";
                $this->email = "Dirección de correo electrónico";
                $this->nombre= "Nombre de pila";
                $this->apellido = "Apellido";
                $this->botonFormulario = "Suscribir";
            }else if($this->idioma=="ITA"){
                $this->titulo = "ISCRIVITI ALLA NOSTRA MAILING LIST";
                $this->email = "Indirizzo email";
                $this->nombre = "Nome di battesimo";
                $this->apellido = "Cognome";
                $this->botonFormulario = "sottoscrivi";
            }
            elseif($this->idioma=="PORT"){
                $this->titulo = "SUBSCREVA A NOSSA LISTA DE CORRESPONDÊNCIA";
                $this->email = "Endereço de e-mail";
                $this->nombre = "Primeiro nome";
                $this->apellido = "Último nome";
                $this->botonFormulario = "Se inscrever";
            }
            else{
                $this->idioma = "EN";
                $this->cambiarIdioma();
            }
        }

    }
?>