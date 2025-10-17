<?php

// CONCEITO: Visibilidade (public, protected, private)
// A visibilidade controla onde as propriedades e métodos de uma classe podem ser acessados.
// - public: Pode ser acessado de qualquer lugar (fora da classe, na própria classe e em classes filhas).
// - protected: Pode ser acessado apenas dentro da própria classe e em classes que herdam dela.
// - private: Pode ser acessado apenas dentro da própria classe onde foi definido.

// EXERCÍCIO:
// 1. Crie uma classe `Funcionario`.
// 2. Adicione as seguintes propriedades:
//    - `nome` (public)
//    - `salario` (protected)
//    - `cpf` (private)
// 3. No construtor, inicialize todas as propriedades.
// 4. Crie um método público `getSalario` que retorna o valor da propriedade `salario`.
// 5. Crie um método público `getCPF` que retorna o valor da propriedade `cpf`.
// 6. Fora da classe, crie um objeto `Funcionario`.
// 7. Tente acessar e imprimir a propriedade `nome` diretamente. (Deve funcionar)
// 8. Tente acessar e imprimir o salário usando o método `getSalario`. (Deve funcionar)
// 9. Tente acessar e imprimir o CPF usando o método `getCPF`. (Deve funcionar)
// 10. Tente acessar diretamente as propriedades `salario` e `cpf` e observe o erro. (Comente essas linhas para o script rodar)

// TODO: Escreva seu código aqui

?>