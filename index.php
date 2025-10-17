<?php

echo "Olá, mundo!\n";

$numero = 10;
echo $numero . "\n";
$nome = "Eduardo";
echo $nome . "\n";
$valor = 10.5;
echo $valor . "\n";
$verdadeiro = true;
echo $verdadeiro . "\n";
$falso = false;
echo $falso . "\n";
$caracter = 'A';
echo $caracter . "\n";
$array = array(1, 2, 3);
echo $array[0] . "\n";
$null = null;
echo $null . "\n";

$numero1 = 5;
$numero2 = 3;
$soma = $numero1 + $numero2;
echo "A soma de $numero1 e $numero2 é $soma.\n";

if ($soma > 10){
    echo "A soma é maior que 10.\n";
} else {
    echo "A soma é menor ou igual a 10.\n";
}

for ($i = 1; $i <= 10; $i++){
    if ($i % 2 == 0){
        echo "$i é par.\n";
    } else {
        echo "$i é ímpar.\n";
    }
}

$i = 1;
while ($i <= 5){
    if ($i % 2 == 0){
        echo "$i é par.\n";
    } else {
        echo "$i é ímpar.\n";
    }
    $i++;
}       


$frutas = array("maçã", "banana", "laranja");

$pessoa = ["nome" => "Ana", 
           "idade" => 25, 
           "cidade" => "São Paulo"];

count($frutas);
count($pessoa);

foreach ($frutas as $fruta){
    echo "Eu gosto de $fruta.\n";
}

foreach ($pessoa as $chave => $valor){
    echo "A chave é $chave e o valor é $valor.\n";
}

print_r($frutas);
var_dump($pessoa);
//print_r($_SERVER);

$carro = ["marca" => "Toyota",
         "modelo" => "Corolla",
         "cor" => "Azul",
         "ano" => 2020,
         "preco" => 80000.00,
         "disponivel" => true];

foreach ($carro as $chave => $valor){
    if (is_bool($valor)){
        $valor = $valor ? 'true' : 'false';
    }
    echo "$chave: $valor\n";
}

function saudacao($nome){
    return "Olá, $nome!\n";
}

echo saudacao("João");

class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar(){
        return "Olá, meu nome é $this->nome e tenho $this->idade anos.\n";
    }
}

$pessoa = new Pessoa("Maria", 30);
echo $pessoa->apresentar();





?>