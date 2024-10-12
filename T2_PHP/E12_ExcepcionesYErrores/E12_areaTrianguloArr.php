<?php
    class E12_areaTrianguloArr{
        public function areaTriangulo($bases, $alturas){
            $output = "";
            for ($i=0; $i < count($bases); $i++) { 
                try {
                    if ($bases[$i] < 0 || $alturas[$i] < 0) {
                        throw new Exception("Debes insertar un número positivo");
                    }
                    $area = ($bases[$i] * $alturas[$i]) / 2;
                    $output .= "El área del triángulo de base " . $bases[$i] . " y altura " . $alturas[$i] . " es: " . $area . "<br>";
                } catch (Exception $e) {
                    $output .= "Ha habido una excepción: " . $e->getMessage() . "<br>";
                }
            }
            return $output;
        }
    }
?>