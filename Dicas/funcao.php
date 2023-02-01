<?php

// Função são bloco de código que possue um nome
// Realiza uma ação e é reutilizavél
// Ajuda a reduz a duplicidade de seu código
// Melhora a manutenção do código

// Exemplos

// Criação da função
function soma() {
    $a = 4;
    $b = 2;
    echo $a + $b . "<br>";
}

// Invocando minha função
soma();

// Função Própria do PHP
echo strtoupper("testando função") . "<br>";

// Parâmetros são variavéis para moldar sua execução dentro de sua função
// PHP IGNORA PARÂMETROS DESNECESSÁRIOS

function soma2($n1, $n2) {
    $soma = $n1 + $n2;
    echo $n1 . " + " . $n2 . " = " . $soma . "<br>";
}

// Chamando a função com parâmetro
soma2(55,6);

// Retorno de função
// Objetivo é armazenar o resultado desse retorno e reutiliza-lo posteriormente
// Utilizamos a palavra return

function divisao($num1, $num2) {
    return $num1 / $num2;
}

$n1 = 88;
$n2 = 4;
$divisao = divisao($n1, $n2);
echo "O resultado da divisão entre " . $n1 . " e " . $n2 . " é " . $divisao . "<br>";

// Parâmetro Default
// É um parâmetro que entrará em cena caso não for passado o valor do parâmetro na invocação da função
// Boa pratica é deixar os valores default por último 

function subtracao ($n1 = 0, $n2 = -2) {
    return $n1 - $n2;
}

echo subtracao() . "<br>";
echo subtracao(7) . "<br>";

function soma3 ($n1, $n2 = -2) {
    return $n1 + $n2;
}

echo soma3(7,8) . "<br>";
echo soma3(4) . "<br>";

?>