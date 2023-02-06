<?php

// Array associativo é um array contendo chave e valor
// Chave entre aspas e uma seta(=>) apontando o valor
// Exemplo $array = ['chave' => 'valor'];

$array = ['nome' => 'Shark', 'patas' => 4, 'cor' => 'marrom'];

print_r($array);
echo "<br>";
echo $array['nome'] . "<br>";

// Adicionando dados no Array associativo manualmente

$array = [];

// Adicionanado três elementos nesse array
$array["carro"] = "Jetta";
$array["moto"] = "Yamaha";
$array["fruta"] = "Maça";

echo "<pre>";
print_r($array);
echo "</pre>";

// Substituindo o array manualmente
$array["carro"] = "BMW"; // Mudei o valor do índice carro

echo "<pre>";
print_r($array);
echo "</pre>";

// Array_keys e Array_values
// Array_keys serve para criar um array SÓ CONTENDO AS CHAVES DE UM ARRAY ASSOCIATIVO
// Array_values serve para criar um array SÓ CONTENDO OS VALORES DE UM ARRAY ASSOCIATIVO
// Exemplo

$carro = [
    "marca" => "BMW",
    "motor" => "2.4",
    "teto_solar" => true,
    "cambio" => "automático",
    "portas" => "4"
];

// Usando as funções
$chaves = array_keys($carro);
$valores = array_values($carro);

// Exibi-las na tela
echo "<pre>";
print_r($chaves);
echo "</pre>";

echo "<pre>";
print_r($valores);
echo "</pre>";

// Função Array_key_exists
// Serve para descobrir se dentro do array existe a chave especificada
// Array_key_exists(qual é chave, array)
// Exemplo

$pessoa = [
    "nome" => "Luis",
    "idade" => 24
];

// Checando se existe a chave "nome" no array
if (Array_key_exists("nome", $pessoa)) { 
    echo "A chave existe <br>";
} else {
    echo "A chave não existe <br>";
}

// Checando se existe a chave "profissao" no array
if (Array_key_exists("profissao", $pessoa)) { 
    echo "A chave existe <br>";
} else {
    echo "A chave não existe <br>";
}

// Função Isset
// Serve para descobrir se existe algo
// isset (o que quer descobrir)
// Retorna um boolean

if (isset($pessoa["idade"])) {
    echo "A chave existe ISSET <br>";
} else {
    echo "A chave não existe ISSET <br>";
}

if (isset($var)) {
    echo "A variável existe ISSET <br>";
} else {
    echo "A variável não existe ISSET <br>";
}

// Função Extract
// Serve para criar variáveis de arrays associativos
// As variáveis será as CHAVES desse array
// Extract(array)
// Se uma variável estiver o mesmo nome de uma outra varável anteriormente usada,
// Irá SOBRESCREVER
// Exemplos

$array = [
    "cor" => "vermelho",
    "forma" => "retangular",
    "material" => "aço"
];

$ver = extract($array); // Usando o extract

echo $cor . "<br>";
echo $forma . "<br>";
echo $material . "<br>";

// Testando para ver como o extract sobrescreve variáveis existentes
$nome = "Mark";

$pessoa = [
    "nome" => "Camila",
    "idade" => 20
];

echo "A variável nome ANTES do extract : " . $nome . "<br>";

extract($pessoa);

echo "A variável nome DEPOIS do extract : " . $nome . "<br>";

// Função Compact
// Serve para criar um array associativo de acordo com várias variáveis
// É o efeito ao contrário da função extract
// Compact(nomes das chaves em string)
// Exemplo

$marca = "BMW";
$motor = "3.0";
$portas = 4;
$cambio = "automático";
$temTetoSolar = true;

$carro = compact("marca", "motor", "cambio", "portas", "temTetoSolar"); // Criando o array e informando as chaves do mesmo

echo "<pre>";
print_r($carro);
echo "</pre>";

?>