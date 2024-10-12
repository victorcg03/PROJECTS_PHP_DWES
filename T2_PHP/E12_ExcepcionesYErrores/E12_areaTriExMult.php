<?php
    class  E12_areaTriExMult{
        public function areaTriangulo($a, $b){
            if($a < 0){
                throw new Exception("Altura Negativa: " . $a);
            }
            if($b < 0){
                throw new Exception("Base Negativa: " . $b);
            }
            if($a > 5000){
                throw new Exception("Altura fuera de límite superior: " . $a);
            }
            if($b > 5000){
                throw new Exception("Base fuera de límite superior: " . $b);
            }
            return $a * $b / 2;
        }
    }
?>