<?php

// CONCEITO: Constantes de Classe
// Constantes são valores que não podem ser alterados uma vez definidos. Elas pertencem à classe,
// não a um objeto específico. São declaradas com a palavra-chave `const`.
// Para acessá-las, usa-se o nome da classe seguido por `::` e o nome da constante (ex: `MinhaClasse::MINHA_CONSTANTE`).

// EXERCÍCIO:
// 1. Crie uma classe `Matematica`.
// 2. Defina uma constante de classe chamada `PI` com o valor `3.14159`.
// 3. Crie um método público e estático (veremos `static` em detalhes depois) chamado `calcularAreaCirculo`.
// 4. O método deve receber um `$raio` como parâmetro.
// 5. Dentro do método, calcule a área do círculo usando a fórmula: area = PI * raio^2.
//    Para acessar a constante `PI` de dentro da classe, use `self::PI`.
// 6. O método deve retornar o resultado do cálculo.
// 7. Fora da classe, chame o método `calcularAreaCirculo` passando um raio (ex: 10) e imprima o resultado.
//    Para chamar o método estático, use `Matematica::calcularAreaCirculo(10)`.

// TODO: Escreva seu código aqui

?>