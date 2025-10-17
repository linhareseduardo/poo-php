<?php

// Módulo de POO: Catálogo de Mídia

/*
 * CONCEITO: Classe Abstrata
 * Uma classe abstrata serve como um modelo para outras classes, mas não pode ser
 * instanciada diretamente. Ela define métodos que as classes filhas DEVEM implementar.
 */
abstract class Media {
    /*
     * CONCEITO: Encapsulamento (protected) e Propriedade Estática
     * - `protected`: A propriedade só pode ser acessada pela própria classe ou por classes que herdam dela.
     * - `static`: A propriedade pertence à CLASSE, e não a um objeto individual. É compartilhada por todos os objetos.
     */
    protected $titulo;
    protected $status = 'Disponível'; // Valor padrão
    private static $contadorDeMedia = 0;

    /*
     * CONCEITO: Construtor
     * Método especial executado quando um novo objeto é criado (`new`).
     * Usado para inicializar as propriedades do objeto.
     */
    public function __construct($titulo) {
        $this->titulo = $titulo;
        self::$contadorDeMedia++; // `self::` é usado para acessar membros estáticos
    }

    // Métodos para interagir com as propriedades (Getters)
    public function getTitulo() {
        return $this->titulo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function emprestar() {
        if ($this->status === 'Disponível') {
            $this->status = 'Emprestado';
            return true;
        }
        return false;
    }

    public function devolver() {
        $this->status = 'Disponível';
    }

    /*
     * CONCEITO: Método Estático
     * Pode ser chamado diretamente na classe, sem precisar criar um objeto.
     */
    public static function getContadorDeMedia() {
        return self::$contadorDeMedia;
    }

    /*
     * CONCEITO: Polimorfismo com Método Abstrato
     * Um método abstrato não tem implementação na classe mãe. Ele FORÇA as classes filhas
     * a criarem sua própria versão deste método.
     */
    abstract public function getDetalhes();
}

/*
 * CONCEITO: Herança
 * A classe `Livro` herda todas as propriedades e métodos `public` e `protected` da classe `Media`.
 */
class Livro extends Media {
    /*
     * CONCEITO: Encapsulamento (private)
     * A propriedade só pode ser acessada DENTRO desta própria classe (`Livro`).
     */
    private $autor;

    public function __construct($titulo, $autor) {
        // Chama o construtor da classe pai (`Media`) para inicializar o título.
        parent::__construct($titulo);
        $this->autor = $autor;
    }

    public function getAutor() {
        return $this->autor;
    }

    // Implementação obrigatória do método abstrato da classe `Media`
    public function getDetalhes() {
        return "Livro: '{$this->getTitulo()}' por {$this->getAutor()}";
    }
}

class Filme extends Media {
    private $diretor;

    public function __construct($titulo, $diretor) {
        parent::__construct($titulo);
        $this->diretor = $diretor;
    }

    public function getDiretor() {
        return $this->diretor;
    }

    // Implementação obrigatória do método abstrato, mas com um formato diferente da classe `Livro`
    public function getDetalhes() {
        return "Filme: '{$this->getTitulo()}' dirigido por {$this->getDiretor()}";
    }
}


// --- Exemplo de Utilização ---

echo "--- Criando Mídias ---
";
$livro1 = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien");
$filme1 = new Filme("O Poderoso Chefão", "Francis Ford Coppola");

/*
 * CONCEITO: Polimorfismo na prática
 * Chamamos o mesmo método `getDetalhes()` em objetos de tipos diferentes,
 * e cada um responde de acordo com sua própria implementação.
 */
echo $livro1->getDetalhes() . " - Status: " . $livro1->getStatus() . "
";
echo $filme1->getDetalhes() . " - Status: " . $filme1->getStatus() . "
";

echo "
--- Emprestando Mídia ---
";
$livro1->emprestar();
echo $livro1->getDetalhes() . " - Status: " . $livro1->getStatus() . "
";

echo "
--- Devolvendo Mídia ---
";
$livro1->devolver();
echo $livro1->getDetalhes() . " - Status: " . $livro1->getStatus() . "
";

/*
 * CONCEITO: Acessando membro estático
 * Chamamos o método diretamente na classe `Media`, sem precisar de um objeto.
 */
echo "
-----------------------------------
";
echo "Total de mídias no catálogo: " . Media::getContadorDeMedia() . "
";

?>
