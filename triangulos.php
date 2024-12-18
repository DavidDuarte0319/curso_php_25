<?php 

/**
 * dados 3 medidas informadas pelo usuairo
 * diga qual tipo do triangulo:
 * 1 - equilatero 3 lados igual 
 * 2 - isosceles 2 lados iguais 
 * 3 - escaleno quando todos sao diferentes.
 */

 $ladoA = 5;
 $ladoB = 6;
 $ladoC = 7;

 if ($ladoA == $ladoB && $ladoB == $ladoC) {
    echo "As medias informadas forma um triangulo Equilatero";
 }
 if ($ladoA == $ladoB && $ladoB == $ladoA && $ladoC != $ladoA && $ladoB) {
    echo "As medias informadas forma um triangulo Isosceles";
 }
 if ($ladoA != $ladoB && $ladoB != $ladoC) {
    echo "As medias informadas forma um triangulo Escaleno";
 }
