<?php

$lista = array(
array("BD",10),
array("analise",10),
array("cc",10),
array("frontend",10),
array("prog.mobile",10),
array("pt",10),
array("mat",10),
array("hist",10),
array("geo",10),
array("quim",10),
array("bio",10),
array("socio",10),
array("proj",10),
array("ed.finan",10),

);

echo"<br/><br/><br/>";


foreach($lista as $posicao => $item){
    echo $item[0]." - ".$item[1]."<br/>";
}
?>    

