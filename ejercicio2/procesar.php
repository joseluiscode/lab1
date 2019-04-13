<?php
    class Datos {   
        protected $valorPizza;
        protected $masa;
        protected $pagoMetodo;
        protected $cantidadPizza;
        protected $TipoCliente;
        protected $R;
        protected $ResulMasPago;
        protected $ResulMasPizza;

        public function RecogerDatos($valorPizza, $masa, $pagoMetodo, $cantidadPizza, $TipoCliente){

            $this->valorPizza = $valorPizza;
            $this->masa = $masa;
            $this->pagoMetodo = $pagoMetodo;
            $this->cantidadPizza = $cantidadPizza;
            $this->TipoCliente = $TipoCliente;

            //Condicon: ValorPizza
            if($this->valorPizza == "Personal" ){
                $this->valorPizza = 5;
            }elseif ($this->valorPizza == "Grande") {
                $this->valorPizza = 12;
            }else {
                $this->valorPizza = 16;
            }

            //Condicon: Tipo de masa
            if ($this->masa == "PanPizza"){
                $this->masa = 2;
            }else{
                $this->masa = 3;
            }

            //Condicon: Metodo de Pago
            if ($this->pagoMetodo == "ViaTelefono"){
                $this->pagoMetodo = 0.15;
            }elseif ($this->pagoMetodo == "ViaInternet") {
                $this->pagoMetodo = 0.17;
            }else{
                $this->pagoMetodo = 0.13;
            } 

            //Condicon: Cantidad pizzas
            if ($this->cantidadPizza == "DosPiezzas"){
                $this->cantidadPizza = 0.25;
            }elseif($this->cantidadPizza == "TresPiezzas"){
                $this->cantidadPizza = 0.30;
            }else{
                $this->cantidadPizza = 0.35;
            }

            //Condicion: Tipo de cliente
            if($this->TipoCliente == "ClFrecuente"){
                $this->TipoCliente = 0.05;
            }elseif ($this->TipoCliente == "ClGrande") {
                $this->TipoCliente = 0.07;
            }else{
                $this->TipoCliente = 0.09;
            }

        }   
            //Funciones retornandome el valor segun la condicion
            public function RetornarValorPizza(){

                return $this->valorPizza;
            }

            public function RetornarValorMasa(){

                return $this->masa;
            }

            public function RetornarMetodoPago(){

                return $this->pagoMetodo;
            }

            public function RetornarCantidadPizza(){
                return $this->cantidadPizza;
            }

            public function RetornarTipoCliente(){

                return $this->TipoCliente;
            }
    }
            //Esta clase la creo porque quiero :v
    class Operacion extends Datos{
            //Funcion que me retornara el Valor a pagar
        public function RetorCuenta_A_Pagar(){
                $this->R = $this->valorPizza + $this->masa;
                $this->ResulMasPago = $this->R * $this->pagoMetodo;
                $this->R = $this->R - $this->ResulMasPago;
                $this->ResulMasPizza = $this->R * $this->cantidadPizza;
                $this->R = $this->R - $this->ResulMasPizza;
                $this->ResulMasT_Clien = $this->R * $this->TipoCliente;
                $this->R = $this->R  - $this->ResulMasT_Clien;
                return $this->R;
            }
    }
 ?>