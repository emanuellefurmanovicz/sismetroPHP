<?php
function numero_primo($posicao){
    $primos = array(2);

    $n = 3;
    while(count($primos) < $posicao){
        foreach($primos as $primo){
            if($n%$primo == 0){
                $e_primo = false;

            }
        }
        if($primo){
            $primos[] = $n;
        }
        $n++;
    }
    return $primos[$posicao - 1];
}

echo numero_primo($_GET["posicao"]);

echo numero_primo(10);
?>