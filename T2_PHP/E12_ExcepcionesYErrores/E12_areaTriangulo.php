<?php
    class E12_areaTriangulo{
        public function areaTriangulo($base, $altura){
            if ($base < 0 || $altura < 0) {
                throw new Exception("Uno de los numeros es negativo.");
            }
            return $base * $altura / 2;
        }
    }
?>