<?php

// CONCEITO: Traits
// Traits são um mecanismo para reutilização de código em linguagens de herança única como o PHP.
// Um Trait permite que você "importe" métodos para dentro de uma classe. É como "copiar e colar" código
// de forma estruturada. Uma classe pode usar múltiplos Traits.

// EXERCÍCIO:
// 1. Crie um Trait chamado `Log`.
// 2. Dentro do Trait `Log`, crie um método público `registrarLog` que recebe uma `$mensagem`
//    e imprime "LOG: [data e hora] - [mensagem]\n". Use `date('Y-m-d H:i:s')` para a data/hora.
// 3. Crie uma classe `Produto`.
// 4. Dentro da classe `Produto`, use o Trait `Log` com a instrução `use Log;`.
// 5. Crie um método na classe `Produto` chamado `salvar` que chama o método `registrarLog`
//    com a mensagem "Produto salvo com sucesso.".
// 6. Crie uma classe `Usuario`.
// 7. Faça a classe `Usuario` também usar o Trait `Log`.
// 8. Crie um método na classe `Usuario` chamado `login` que chama o método `registrarLog`
//    com a mensagem "Usuário fez login.".
// 9. Crie um objeto de `Produto` e chame o método `salvar()`.
// 10. Crie um objeto de `Usuario` e chame o método `login()`.

// SOLUÇÃO:
trait Log {
    public function registrarLog($mensagem) {
        $dataHora = date('Y-m-d H:i:s');
        echo "LOG: {$dataHora} - {$mensagem}\n";
    }
}

class Produto {
    // Importando os métodos do Trait para esta classe.
    use Log;

    public function salvar() {
        // Agora, a classe Produto "tem" o método registrarLog.
        $this->registrarLog("Produto salvo com sucesso.");
    }
}

class Usuario {
    // Reutilizando o mesmo Trait em outra classe.
    use Log;

    public function login() {
        $this->registrarLog("Usuário fez login.");
    }
}

$produto = new Produto();
$produto->salvar();

$usuario = new Usuario();
$usuario->login();

?>