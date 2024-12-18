<?php 

/**
 * dados 3 medidas informadas pelo usuairo
 * diga qual tipo do triangulo:
 * 1 - equilatero 3 lados igual 
 * 2 - isosceles 2 lados iguais 
 * 3 - escaleno quando todos os lados sao diferentes.
 */

 $ladoA = 10;
 $ladoB = 10;
 $ladoC = 7;

 if ($ladoA == $ladoB && $ladoB == $ladoC) {
    echo "As medias informadas forma um triangulo Equilatero";
 }
else  if ($ladoA == $ladoB || $ladoB == $ladoC || $ladoA == $ladoC) {
    echo "As medias informadas forma um triangulo Isosceles";
 }
   else if ($ladoA != $ladoB && $ladoB != $ladoC) {
    echo "As medias informadas forma um triangulo Escaleno";
 }
