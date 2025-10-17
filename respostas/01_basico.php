<?php

// CONCEITO: O Básico de Classes, Propriedades e Métodos
// Uma classe é um modelo para criar objetos. Ela agrupa dados (propriedades) e funções (métodos) relacionados.
// - Propriedades: São as variáveis de uma classe. Elas armazenam os dados do objeto.
// - Métodos: São as funções de uma classe. Elas definem o comportamento do objeto.

// EXERCÍCIO:
// 1. Crie uma classe `Carro`.
// 2. Adicione as seguintes propriedades públicas: `marca`, `modelo`, `ano`.
// 3. Crie um método público chamado `exibirInfo` que retorna uma string com as informações do carro,
//    no formato: "Marca: [marca], Modelo: [modelo], Ano: [ano]".
// 4. Fora da classe, crie um objeto (instância) da classe `Carro`.
// 5. Defina os valores para as propriedades do objeto.
// 6. Chame o método `exibirInfo` e imprima o resultado.

// SOLUÇÃO:
class Carro {
    public $marca;
    public $modelo;
    public $ano;

    public function exibirInfo() {
        return "Marca: {$this->marca}, Modelo: {$this->modelo}, Ano: {$this->ano}";
    }
}

// Criando o objeto
$meuCarro = new Carro();

// Definindo os valores das propriedades
$meuCarro->marca = "Ford";
$meuCarro->modelo = "Mustang";
$meuCarro->ano = 2022;

// Chamando o método e imprimindo o resultado
echo $meuCarro->exibirInfo();
echo "\n";

?>