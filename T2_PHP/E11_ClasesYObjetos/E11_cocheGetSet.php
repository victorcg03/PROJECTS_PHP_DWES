<?php
    class Coche2{
        public $marca;
        public $modelo;
        public $potencia;
        public $precio;
        public function getMarca(){
            return $this->marca;
        }
        public function getModelo(){
            return $this->modelo;
        }
        public function getPotencia(){
            return $this->potencia;
        }
        public function getPrecio(){
            return $this->precio;
        }

        public function setMarca($marca){
            $this->marca = $marca;
        }
        
        public function setModelo($modelo){
            $this->modelo = $modelo;
        }
        
        public function setPotencia($potencia){
            $this->potencia = $potencia;
        }
        
        public function setPrecio($precio){
            $this->precio = $precio;
        }
    }
?>