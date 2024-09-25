<?php
    function fibonacci($n){
        $fibonacci = array(0,1);
        for($i = 1; $i <= $n-2; $i++){
            array_push($fibonacci, ($fibonacci[$i]+$fibonacci[$i-1]));
        }
        return $fibonacci;
    }
    echo implode(",", fibonacci(12));
?>