<?php

// CONCEITO: Construtores e Destrutores
// - __construct(): É um "método mágico" chamado automaticamente quando um objeto de uma classe é criado.
//   É ideal para inicializar as propriedades do objeto com valores passados na criação.
// - __destruct(): É um "método mágico" chamado automaticamente quando um objeto está prestes a ser destruído
//   (por exemplo, no final do script ou quando `unset()` é chamado). É útil para limpar recursos.

// EXERCÍCIO:
// 1. Crie uma classe `Arquivo` que gerencie um arquivo de log.
// 2. A classe deve ter uma propriedade privada `nomeArquivo`.
// 3. No construtor (`__construct`), a classe deve receber o nome do arquivo, armazená-lo na propriedade
//    e imprimir a mensagem "Arquivo '[nome_do_arquivo]' aberto.\n".
// 4. Crie um método público `escrever` que recebe uma `mensagem` e a anexa ao final da mensagem "Log: [mensagem]\n".
//    Por enquanto, apenas imprima a mensagem formatada na tela.
// 5. No destrutor (`__destruct`), a classe deve imprimir a mensagem "Arquivo '[nome_do_arquivo]' fechado.\n".
// 6. Fora da classe, crie uma instância de `Arquivo` com o nome "log.txt".
// 7. Chame o método `escrever` com a mensagem "Usuário logado com sucesso.".

// TODO: Escreva seu código aqui

?>