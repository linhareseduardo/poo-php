<?php

// CONCEITO: Herança
// A herança permite que uma classe (classe filha) herde propriedades e métodos de outra classe (classe pai).
// Isso promove a reutilização de código. A palavra-chave `extends` é usada para isso.
// A classe filha pode adicionar novas propriedades/métodos ou sobrescrever os herdados.

// EXERCÍCIO:
// 1. Crie uma classe `Animal` com as seguintes características:
//    - Propriedade `protected $nome`.
//    - Construtor que define o nome.
//    - Método `public function comer()` que imprime "O animal está comendo.\n".
// 2. Crie uma classe `Cachorro` que herda de `Animal` (`extends Animal`).
// 3. Adicione um método `public function latir()` na classe `Cachorro` que imprime "Au au!\n".
// 4. Crie uma classe `Gato` que também herda de `Animal`.
// 5. Na classe `Gato`, sobrescreva o método `comer()` para que ele imprima "O gato está comendo peixe.\n".
// 6. Crie um objeto da classe `Cachorro` e chame os métodos `comer()` e `latir()`.
// 7. Crie um objeto da classe `Gato` e chame o método `comer()`.

// SOLUÇÃO:
class Animal {
    protected $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function comer() {
        echo "O animal {$this->nome} está comendo.\n";
    }
}

class Cachorro extends Animal {
    public function latir() {
        echo "{$this->nome} diz: Au au!\n";
    }
}

class Gato extends Animal {
    // Sobrescrevendo o método da classe pai
    public function comer() {
        echo "O gato {$this->nome} está comendo peixe.\n";
    }
}

$rex = new Cachorro("Rex");
$rex->comer(); // Método herdado de Animal
$rex->latir(); // Método da própria classe Cachorro

echo "\n";

$garfield = new Gato("Garfield");
$garfield->comer(); // Método sobrescrito na classe Gato

?>