# Desafio: Sistema de Gerenciamento de Locadora

## Objetivo

Construir um sistema simples de gerenciamento de locadora via linha de comando, aplicando todos os principais conceitos de Programação Orientada a Objetos em PHP.

## Conceitos a serem aplicados

- Classes e Objetos
- Visibilidade (`public`, `protected`, `private`)
- Herança
- Classes Abstratas
- Interfaces
- Traits
- Membros Estáticos (`static`)
- Construtores

## Passo a Passo do Desafio

### Passo 1: Estrutura Básica e Log

1.  **Crie um Trait `Logger`**:
    - Este trait deve ter um método `log($mensagem)` que exibe a data/hora atual seguida pela mensagem.
    - Ex: `[2023-10-27 10:30:00] - Mensagem de log.`

### Passo 2: Modelando as Mídias

1.  **Crie uma Classe Abstrata `Midia`**:
    - Deve ter as propriedades `protected $titulo` e `protected $disponivel = true`.
    - Deve ter uma propriedade `private static $contadorMidias = 0` para gerar IDs únicos.
    - Deve ter uma propriedade `protected $id`.
    - No construtor, deve aceitar o `$titulo`, incrementar o contador estático e atribuir o novo valor ao `$id`.
    - Deve ter um método público `getTitulo()` para retornar o título.
    - Deve ter um método público `isDisponivel()` que retorna o status da disponibilidade.
    - Deve ter métodos públicos `alugar()` e `devolver()` que alteram a propriedade `$disponivel`.
    - Deve ter um **método abstrato** `public function calcularPrecoAluguel()`.

2.  **Crie as Classes `DVD` e `BluRay`**:
    - Ambas devem herdar de `Midia`.
    - **DVD**:
        - Adicione uma propriedade `private $anoLancamento`.
        - O construtor deve receber o título e o ano de lançamento.
        - Implemente o método `calcularPrecoAluguel()`:
            - O preço base é R$ 3.50.
            - Se o ano de lançamento for igual ao ano atual, some R$ 1.50 (lançamento).
            - Deve retornar o preço final.
    - **BluRay**:
        - Adicione uma propriedade `private $resolucao` (ex: "1080p", "4K").
        - O construtor deve receber o título e a resolução.
        - Implemente o método `calcularPrecoAluguel()`:
            - O preço base é R$ 5.00.
            - Se a resolução for "4K", some R$ 2.00.
            - Deve retornar o preço final.

### Passo 3: Modelando os Clientes

1.  **Crie uma classe `Cliente`**:
    - Propriedades: `public $nome` e `private $email`.
    - Use o trait `Logger` nesta classe.
    - O construtor deve aceitar nome e email.
    - Crie um método `get_email()` para acessar o email.
    - Ao ser instanciado, deve usar o método `log()` do trait para registrar "Novo cliente criado: [nome do cliente]".

### Passo 4: A Locadora

1.  **Crie a classe `Locadora`**:
    - Propriedades: `private $midias = []` e `private $clientes = []`.
    - Use o trait `Logger`.
    - Crie um método `adicionarMidia(Midia $midia)` para adicionar uma mídia ao acervo. Use o log para registrar a adição.
    - Crie um método `adicionarCliente(Cliente $cliente)` para cadastrar um novo cliente.
    - Crie um método `listarMidiasDisponiveis()` que percorre o acervo e exibe o título e o preço do aluguel de cada mídia disponível.
    - Crie um método `alugarMidia($tituloMidia, $emailCliente)`:
        - Deve encontrar a mídia pelo título e o cliente pelo email.
        - Se a mídia estiver disponível, deve chamar o método `alugar()` da mídia e registrar no log: "[Cliente] alugou [Mídia]".
        - Se não estiver disponível, ou se a mídia/cliente não for encontrado, deve registrar um log de erro.

### Passo 5: Simulação

1.  **Crie um arquivo `index.php`**:
    - Inclua todos os arquivos de classe.
    - Crie uma instância da `Locadora`.
    - Crie e adicione alguns clientes.
    - Crie e adicione alguns DVDs e BluRays.
    - Use o método `listarMidiasDisponiveis()` para ver o acervo.
    - Simule o aluguel de uma ou duas mídias.
    - Liste as mídias disponíveis novamente para ver a mudança de status.
    - Simule o aluguel de uma mídia que já está alugada para testar a mensagem de erro.