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

// SOLUÇÃO:
interface Exportavel {
    public function exportarParaCSV();
}

class Usuario implements Exportavel {
    public $nome;
    public $email;

    public function __construct($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
    }

    // Implementação obrigatória do método da interface.
    public function exportarParaCSV() {
        return "{$this->nome},{$this->email}";
    }
}

class Relatorio implements Exportavel {
    public $titulo;
    public $dados;

    public function __construct($titulo, $dados) {
        $this->titulo = $titulo;
        $this->dados = $dados;
    }

    // Implementação obrigatória do método da interface.
    public function exportarParaCSV() {
        return "{$this->titulo},{$this->dados}";
    }
}

$usuario = new Usuario("Ana Silva", "ana@exemplo.com");
echo "CSV do Usuário: " . $usuario->exportarParaCSV() . "\n";

$relatorio = new Relatorio("Vendas Mensais", "15000");
echo "CSV do Relatório: " . $relatorio->exportarParaCSV() . "\n";

?>