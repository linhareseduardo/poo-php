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

// TODO: Escreva seu código aqui

?>