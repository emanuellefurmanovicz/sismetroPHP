<?php
$numero_sorteado = rand(1,99);

echo $numero_sorteado. "<br>";

switch($numero_sorteado){
case 17:
    echo "joao ganhou";
    break;
case 67:
    echo "leonardo ganhou";
    break;
case 21:
    echo "esdras ganhou";
    break;
case 33:
    echo "igor ganhou";
    break;
case 12:
    echo "manu ganhou";
    break;
case 7:
    echo "vini ganhou";
    break;
case 4:
    echo "macullan ganhou";
    break;
case 69:
    echo "thales ganhou";
    break;
case 60:
    echo "caua ganhou";
    break;
case 75:
    echo "ju ganhou";
    break;
default:
echo "ninguem ganhou";
}


?>