<?php

/**
 * operacoes (+ - * /)
 * # = percentual (%)
 * 
 */

 $numero = 100;
 $operador = "-";
 $numero2 = 5 ;

 $resultado = 0;

 if ($operador == "+"){
    $resultado = $numero + $numero2;
    echo "A soma dos numeros $numero + $numero2 é: $resultado";
 }

 if ($operador == "-"){
    $resultado = $numero - $numero2;
    echo "A Subtracao dos numeros $numero - $numero2 é: $resultado";
 }
 if ($operador == "*"){
    $resultado = $numero * $numero2;
    echo "A Multiplicacao dos numeros $numero * $numero2 é: $resultado";
 }
 if ($operador == "/"){
    $resultado = $numero / $numero2;
    echo "A Divisao dos numeros $numero / $numero2 é: $resultado";
 }
 
// fazendo porcentagem
 $numero = 300;
 $numero2 = 30;


 echo $numero - ($numero * $numero2 / 100);

 