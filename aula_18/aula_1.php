<?php
$a = 15;
$b = 2.7;

$soma = $a + $b;
echo $soma."<br>";

$subtracao = $a - $b;
echo $subtracao."<br>";

$divisao = $a / $b;
echo $divisao."<br>";

$multiplicacao = $a * $b;
echo $multiplicacao."<br>";

if($soma < 10){
    echo "soma menos que 10 <br/>";
}else{ 
    echo "soma maior ou igual a 10 <br/>";
}

if($subtracao > 20){
    echo "subtração maior que 20 <br/>";
}elseif($subtracao == 20){
    echo "subtração igual a 20 <br/>";
}else{
    echo "subtração menor que 20 <br/>";
}

$v = 0;

switch($v){
    case 12:
    case 11:
    case 10:
        echo "10";
        break;
    case 9:
        echo "ola";
        break;
    case 8:
        echo "ola";
        break;
    default:
    echo "oi";
}
?>