<?php
// 
#
/*
Revisao de  PhP dia 28/01/25
*/
// Funções
function calculaIdade($dataNascimento){
    $dataAtual = new Datetime();
    //    echo $dataAtual->format('d/m/Y'); 
          $dataNascimento = datetime::createfromFormat('d/m/Y',$dataNascimento);
    // var_dump($dataNascimento);

          $Idade = $dataNascimento->diff($dataAtual);
    //var_dump($Idade);
       return $Idade->format('%y');
}

function Maioridade ($Idade){
    if($Idade >= 18){
        if ($Idade >= 100){
           $retorno = "Parabéns você é um centenario! </br>";
        }else {
            $retorno="Parabens você é maior de idade! </br>";
        }
        
    }else {
        $retorno = "Poxa, que pena , você e menor de idade! </br>";
    }
    return $retorno;
}
// Variaveis 
$nome = "meu nome completo";
echo "Nome completo: ".$nome."</br>" ;
$aniversario = "13/08/1852";
$Idade = calculaIdade($aniversario);
echo "meu aniversario é: $aniversario e tenho $Idade anos </br>";
echo Maioridade($Idade);


// Calculadora 
$valorA = 10;
$valorB = 20;
$operacao = "/";

if ($operacao == "+"){
    echo "$valorA + $valorB = " .$valorA + $valorB;
}elseif ($operacao == "-"){
    echo "$valorA - $valorB = " .$valorA - $valorB;

}elseif ($operacao == "*"){
    echo "$valorA * $valorB = " .$valorA * $valorB;
}elseif ($operacao == "/"){
    echo "$valorA / $valorB = " .$valorA / $valorB;
}
