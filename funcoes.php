<?php

function soma($num1, $num2){
    return($num1 + $num2);
}
function subtrair($num1, $num2){
    return($num1 - $num2);
}
function divisao($num1, $num2){
    if($num2 != 0) return($num1 / $num2);
    else return("ERRO: Não pode dividir por zero!");
}
function multiplicar($num1, $num2){
    return($num1 * $num2);
}

?>