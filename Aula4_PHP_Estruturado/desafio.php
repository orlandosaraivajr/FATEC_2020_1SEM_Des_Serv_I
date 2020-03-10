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
print('<br><br>');
$numero1 = $dados['numero1'];
$numero2 = $dados['numero2'];

print($numero1);
echo '<br>';
print(gettype($numero1));
echo '<br>';
echo gettype($numero1);
$numero1 = floatval($numero1);
$numero2 = floatval($numero2);
echo '<br>';
print($numero1 + $numero2);

?>