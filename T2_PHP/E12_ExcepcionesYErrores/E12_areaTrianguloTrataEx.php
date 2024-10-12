<?php
    class E12_areaTrianguloTrataEx{
        public function areaTriangulo($a, $b){
            if ($a < 0 || $b < 0) {
                throw new Exception("No puede haber un número negativo.");
            }
            return $a * $b / 2;
        }
    }
?>