<?php

// Inclui o arquivo com as definições das classes
require_once 'biblioteca.php';

// --- Exemplo de Utilização ---

echo "--- Criando Mídias ---\n";
$livro1 = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien");
$filme1 = new Filme("O Poderoso Chefão", "Francis Ford Coppola");

/*
 * CONCEITO: Polimorfismo na prática
 * Chamamos o mesmo método `getDetalhes()` em objetos de tipos diferentes,
 * e cada um responde de acordo com sua própria implementação.
 */
echo $livro1->getDetalhes() . " - Status: " . $livro1->getStatus() . "\n";
echo $filme1->getDetalhes() . " - Status: " . $filme1->getStatus() . "\n";

$musica1 = new Musica("Bohemian Rhapsody", "Queen");
echo $musica1->getDetalhes() . " - Status: " . $musica1->getStatus() . "\n";

echo "\n--- Emprestando Mídia ---\n";
$livro1->emprestar();
echo $livro1->getDetalhes() . " - Status: " . $livro1->getStatus() . "\n";

echo "\n--- Devolvendo Mídia ---\n";
$livro1->devolver();
echo $livro1->getDetalhes() . " - Status: " . $livro1->getStatus() . "\n";

/*
 * CONCEITO: Acessando membro estático
 * Chamamos o método diretamente na classe `Media`, sem precisar de um objeto.
 */
echo "\n-----------------------------------\n";
echo "Total de mídias no catálogo: " . Media::getContadorDeMedia() . "\n";

?>