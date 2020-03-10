<?php
/*
Escreva um script que imprima qual o maior número.
Use IF .. ELSE
*/
$a = 10;
$b = 1;
$c = 40;

if($c > $a && $c > $b){
    print("O maior número é: ");
    print $c;
}elseif($b > $a && $b > $c){
    print("O maior número é: ");
    print $b;
}else{
    print("O maior número é: ");
    print $a;
}

?>