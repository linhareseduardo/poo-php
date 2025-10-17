<?php

// CONCEITO: Classes e Métodos Abstratos
// - Uma classe abstrata é uma classe que não pode ser instanciada. Ela serve como um modelo base para outras classes.
// - Um método abstrato é um método declarado em uma classe abstrata, mas sem implementação (sem corpo).
// - Qualquer classe que herda de uma classe abstrata é OBRIGADA a implementar todos os métodos abstratos da classe pai.
// Isso garante que as classes filhas terão uma estrutura mínima comum.

// EXERCÍCIO:
// 1. Crie uma classe abstrata `FormaGeometrica`.
// 2. Adicione um método abstrato `calcularArea()`.
// 3. Crie uma classe `Retangulo` que herda de `FormaGeometrica`.
// 4. Adicione as propriedades `largura` e `altura` na classe `Retangulo` e inicialize-as no construtor.
// 5. Implemente o método `calcularArea()` na classe `Retangulo` para retornar a área (largura * altura).
// 6. Crie uma classe `Circulo` que também herda de `FormaGeometrica`.
// 7. Adicione a propriedade `raio` na classe `Circulo` e inicialize-a no construtor.
// 8. Implemente o método `calcularArea()` na classe `Circulo` para retornar a área (pi * raio^2). Use `3.14` para pi.
// 9. Crie um objeto `Retangulo` e um objeto `Circulo`.
// 10. Chame o método `calcularArea()` de cada objeto e imprima os resultados.

// TODO: Escreva seu código aqui

?>