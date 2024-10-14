<?php
    require_once("./E11_cochePadre.php");
    class CocheHijo extends CochePadre{
        private $color;
        private $extras = [];
        public function __construct($marca, $modelo, $potencia, $precio, $color, $extras){
            parent::__construct($marca, $modelo, $potencia, $precio);
            $this -> color = $color;
            $this -> extras = $extras;
        }
        public function setColor($color){
            $this -> color = $color;
        }
        public function setExtras($extras){
            $this ->extras = $extras;
        }
        public function getColor(){
            return $this -> color;
        }
        public function getExtras(){
            return $this -> extras;
        }
        public function mostrarColor(){
            echo "<h3> $this->color </h3>";
        }
        public function mostrarExtras(){
            echo "Extras:";
            echo "<ul>";
            foreach ($this -> extras as $extra) {
                echo "<li> $extra </li>";
            }
            echo "</ul>";
        }
    }
?>