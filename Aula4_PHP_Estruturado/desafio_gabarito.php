<?php 
/*
Acessar: http://127.0.0.1/servidores1/aula04/desafio.php?numero1=10&numero2=20
Extrair parâmetros passados via GET
- numero1
- numero2
Somar os dois números.
*/

function somar($dados) {
    if( isset($dados['numero1']) and isset($dados['numero2'])){
        $numero1 = $dados['numero1'];
        $numero2 = $dados['numero2'];
    
        $numero1 = floatval($numero1);
        $numero2 = floatval($numero2);
        if (!$numero1 or !$numero2) {
            throw new Exception('Não foi possível converter.');
        }
        return $numero1+$numero2;
    } else {
        throw new Exception('Dados faltantes.');
    }
}

$dados = $_GET;

try {
    echo somar($dados) . "\n";
} catch (Exception $e) {
    echo 'O que deu ruim: ',  $e->getMessage(), "\n";
}

?>