<?php

class calculadora{
    public $valorA = 0;
    public $valorB = 0;
    

    public function __construct($valorA,$valorB){
        $this->setvalores($valorA,$valorB);
    }

    public function setValores($valorA,$valorB){
        $this->valorA = $valorA;
        $this->valorB = $valorB;
    }

    public function showValores(){
        return "Valor de A é $this->valorA , Valor de B é $this->valorB. </br>";
    }

    public function soma(){
        return $this->valorA + $this->valorB;
    }
    public function subtracao(){
        return $this->valorA - $this->valorB;
    }
    public function multiplicacao(){
        return $this->valorA * $this->valorB;
    }
    public function divisao(){
        return $this->valorA / $this->valorB;
    }
}



$calculadora = new calculadora(10,20);
echo $calculadora->showValores();
echo $calculadora->soma()."</br>";
echo $calculadora->subtracao()."</br>";
echo $calculadora->multiplicacao()."</br>";
echo $calculadora->divisao()."</br>";

$calculadora->setValores(30,50); 
echo $calculadora->showValores();
echo $calculadora->soma()."</br>";
echo $calculadora->subtracao()."</br>";
echo $calculadora->multiplicacao()."</br>";
echo $calculadora->divisao()."</br>";
