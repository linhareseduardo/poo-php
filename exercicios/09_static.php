<?php

// CONCEITO: Propriedades e Métodos Estáticos (`static`)
// Membros estáticos (propriedades ou métodos) pertencem à CLASSE, e não a uma instância (objeto) específica.
// - Você não precisa criar um objeto para acessá-los.
// - Eles são acessados usando o Operador de Resolução de Escopo `::` (ex: `MinhaClasse::metodoEstatico()`).
// - Dentro da classe, você usa `self::` para se referir a membros estáticos da própria classe.
// - São úteis para funcionalidades que não dependem do estado de um objeto, como contadores ou métodos utilitários.

// EXERCÍCIO:
// 1. Crie uma classe `Configuracao`.
// 2. Adicione uma propriedade estática e privada `$config` inicializada como um array vazio: `private static $config = [];`.
// 3. Crie um método público e estático `set` que recebe uma `$chave` e um `$valor`.
//    Este método deve adicionar a chave e o valor ao array `$config`. Use `self::$config[$chave] = $valor;`.
// 4. Crie um método público e estático `get` que recebe uma `$chave`.
//    Este método deve retornar o valor correspondente à chave no array `$config`.
// 5. Fora da classe, sem criar nenhum objeto:
//    a. Use o método `set` para definir uma configuração, por exemplo, 'site_url' com o valor 'http://meusite.com'.
//    b. Use o método `set` para definir outra configuração, como 'db_user' com o valor 'admin'.
//    c. Use o método `get` para buscar o valor de 'site_url' e o imprima na tela.
//    d. Use o método `get` para buscar o valor de 'db_user' e o imprima na tela.

// TODO: Escreva seu código aqui

?>