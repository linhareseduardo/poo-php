<?php

// CONCEITO: Interfaces
// Uma interface é um "contrato" que define quais métodos uma classe DEVE implementar.
// Ela apenas especifica os nomes dos métodos e seus parâmetros, sem nenhuma implementação.
// Uma classe pode implementar múltiplas interfaces, o que não é possível com herança de classes (herança múltipla).
// A palavra-chave `implements` é usada.

// EXERCÍCIO:
// 1. Crie uma interface `Exportavel` com um método `exportarParaCSV()`.
// 2. Crie uma classe `Usuario` com propriedades `nome` e `email`.
// 3. Faça a classe `Usuario` implementar a interface `Exportavel`.
// 4. Implemente o método `exportarParaCSV()` na classe `Usuario`. Ele deve retornar uma string
//    com os dados do usuário no formato "nome,email" (ex: "Ana Silva,ana@exemplo.com").
// 5. Crie uma classe `Relatorio` com propriedades `titulo` e `dados`.
// 6. Faça a classe `Relatorio` também implementar a interface `Exportavel`.
// 7. Implemente o método `exportarParaCSV()` na classe `Relatorio`. Ele deve retornar uma string
//    com os dados do relatório no formato "titulo,dados" (ex: "Vendas Mensais,15000").
// 8. Crie um objeto `Usuario` e um objeto `Relatorio`.
// 9. Chame o método `exportarParaCSV()` de cada objeto e imprima os resultados.

// TODO: Escreva seu código aqui

?>