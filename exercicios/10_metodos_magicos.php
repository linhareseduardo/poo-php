<?php

// CONCEITO: Métodos Mágicos (__get, __set, __call)
// Métodos mágicos são métodos especiais que são chamados automaticamente em certas situações.
// Eles permitem "sobrecarregar" o comportamento padrão do PHP.
// - `__set($propriedade, $valor)`: É chamado ao tentar escrever em uma propriedade inacessível (privada ou inexistente).
// - `__get($propriedade)`: É chamado ao tentar ler uma propriedade inacessível.
// - `__call($metodo, $argumentos)`: É chamado ao tentar invocar um método inacessível.

// EXERCÍCIO:
// 1. Crie uma classe `DadosDinamicos`.
// 2. Adicione uma propriedade privada `$dados` inicializada como um array vazio.
// 3. Implemente o método mágico `__set`. Ele deve receber `$propriedade` e `$valor` e
//    armazená-los no array `$dados`. Imprima "Definindo '$propriedade' como '$valor'".
// 4. Implemente o método mágico `__get`. Ele deve receber `$propriedade` e verificar se ela
//    existe no array `$dados`. Se existir, retorne o valor; caso contrário, retorne null.
// 5. Implemente o método mágico `__call`. Ele deve receber `$metodo` e `$argumentos`
//    e imprimir "Tentando chamar o método '$metodo' com os argumentos: " e depois os argumentos.
// 6. Fora da classe:
//    a. Crie um objeto `DadosDinamicos`.
//    b. Atribua valores a propriedades que não existem, como `$objeto->nome = "Ana";` e `$objeto->cidade = "Porto Alegre";`.
//    c. Tente ler e imprimir os valores dessas propriedades.
//    d. Chame um método que não existe, como `$objeto->enviarEmail("assunto do email");`.

// TODO: Escreva seu código aqui

?>