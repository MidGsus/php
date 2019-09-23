<?php
regrading('12345');

function regrading($string){
    for($i=1;$i<=strlen($string)-1;$i++){
        $auxiliar=$string[$i];//auxiliar = b
        $string[$i] =$string[-1];//2 posicion = ultimo
        $string[-1]=$auxiliar;//ultimo = 2da posicion
    }
    echo $string;
}
