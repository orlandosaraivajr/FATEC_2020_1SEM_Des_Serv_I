<?php 
/*
Acessar: http://127.0.0.1/servidores1/aula04/desafio.php?numero1=10&numero2=20
Extrair parâmetros passados via GET
- numero1
- numero2
Somar os dois números.
*/
$dados = $_GET;
print(gettype($dados));
print(var_dump($dados));


?>