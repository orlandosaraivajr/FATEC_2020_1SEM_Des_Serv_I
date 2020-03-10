<?php
/*
Escreva um script que imprima qual o maior número.
Use IF
*/
$a = 10;
$b = 1;
$c = 40;

if($a > $b and $a > $c){
    echo "o Maior valor foi: ";
    echo $a;
}
if($b > $a and $b > $c){
    echo "o Maior valor foi: ";
    echo $b;
}
if($c > $a && $c > $b){
    echo "o Maior valor foi: ";
    echo $c;
}

?>