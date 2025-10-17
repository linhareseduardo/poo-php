# Plano de Estudos PHP

Este é um guia de estudos para aprender PHP, desde a configuração inicial até os conceitos de Orientação a Objetos.

### Módulo 1: Preparando o Ambiente

1.  **Instalação do PHP (Windows):**
    *   **Recomendado para iniciantes:** Use um pacote como o [XAMPP](https://www.apachefriends.org/index.html). Ele instala o PHP, um servidor web (Apache) e um banco de dados (MariaDB/MySQL) de uma só vez.
    *   **Alternativa (manual):**
        1.  Baixe o PHP para Windows na [página oficial](https://windows.php.net/download/).
        2.  Extraia os arquivos para uma pasta (ex: `c:\php`).
        3.  Adicione `c:\php` à variável de ambiente `PATH` do seu sistema.

2.  **Verificando a Instalação:**
    *   Abra seu terminal (CMD ou PowerShell) e digite: `php -v`

3.  **Exercício: "Olá, Mundo!"**
    *   Crie um arquivo chamado `index.php`.
    *   Dentro dele, escreva o seguinte código:
        ```php
        <?php
        echo "Olá, Mundo!";
        ?>
        ```
    *   Para executar, navegue até a pasta do arquivo pelo terminal e rode: `php index.php`

### Módulo 2: Fundamentos do PHP

1.  **Sintaxe Básica:**
    *   Tags do PHP: `<?php ... ?>`.
    *   Comentários: `//` e `/* ... */`.

2.  **Variáveis e Tipos de Dados:**
    *   Declaração com `$`.
    *   Tipos: `string`, `integer`, `float`, `boolean`, `array`, `object`, `null`.

3.  **Operadores:**
    *   Aritméticos (`+`, `-`, `*`, `/`), Atribuição (`=`), Comparação (`==`, `===`), Lógicos (`&&`, `||`).

4.  **Exercício:**
    *   Crie um script que declare duas variáveis numéricas, some os valores e mostre o resultado. Verifique se o resultado é maior que 10 e exiba uma mensagem.

### Módulo 3: Estruturas de Controle

1.  **Condicionais:**
    *   `if`, `else`, `elseif`.

2.  **Loops (Laços de Repetição):**
    *   `for`, `while`, `foreach`.

3.  **Exercício:**
    *   Escreva um script que use um loop `for` para contar de 1 a 10 e, para cada número, verifique se é par ou ímpar, exibindo a informação na tela.

### Módulo 4: Arrays

1.  **Arrays Indexados:** `$frutas = ["Maçã", "Banana", "Laranja"];`
2.  **Arrays Associativos:** `$pessoa = ["nome" => "Carlos", "idade" => 30];`
3.  **Funções Úteis:** `count()`, `print_r()`, `var_dump()`.

4.  **Exercício:**
    *   Crie um array associativo para um `carro` (marca, modelo, ano, cor) e use `foreach` para exibir suas características.

### Módulo 5: Funções

1.  **Declaração:** `function nomeDaFuncao($parametro) { ... }`
2.  **Parâmetros e Retorno:** Uso da palavra-chave `return`.

3.  **Exercício:**
    *   Crie uma função `saudacao` que recebe um `nome` como parâmetro e retorna a string "Olá, [nome]! Bem-vindo(a)!". Chame a função e exiba o resultado.

### Módulo 6: Introdução à Programação Orientada a Objetos (POO)

1.  **Classes e Objetos:**
    *   `class MinhaClasse { ... }`
    *   `$objeto = new MinhaClasse();`

2.  **Propriedades e Métodos:**
    *   Propriedades (variáveis) e Métodos (funções) de uma classe.

3.  **Construtor:**
    *   O método `__construct()` é executado na criação de um novo objeto.

4.  **Exercício:**
    *   Crie uma classe `Produto` com propriedades `nome` e `preco`.
    *   Adicione um método `exibirDetalhes()` que mostra as informações do produto.
    *   Crie um objeto `Produto`, defina seus valores e chame o método.
