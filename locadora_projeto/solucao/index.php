<?php

// Incluindo todos os arquivos de classe
require_once 'Logger.php';
require_once 'Midia.php';
require_once 'DVD.php';
require_once 'BluRay.php';
require_once 'Cliente.php';
require_once 'Locadora.php';

echo "--- Iniciando Simulação da Locadora ---\n\n";

// 1. Criar uma instância da Locadora
$locadora = new Locadora();

// 2. Criar e adicionar clientes
$cliente1 = new Cliente("João Silva", "joao.silva@email.com");
$cliente2 = new Cliente("Maria Souza", "maria.souza@email.com");
$locadora->adicionarCliente($cliente1);
$locadora->adicionarCliente($cliente2);

echo "\n";

// 3. Criar e adicionar mídias
$dvd1 = new DVD("O Rei Leão", 1994);
$dvd2 = new DVD("Top Gun: Maverick", 2022); // Lançamento no mesmo ano (exemplo)
$bluray1 = new BluRay("O Senhor dos Anéis", "1080p");
$bluray2 = new BluRay("Duna", "4K");

$locadora->adicionarMidia($dvd1);
$locadora->adicionarMidia($dvd2);
$locadora->adicionarMidia($bluray1);
$locadora->adicionarMidia($bluray2);

echo "\n";

// 4. Listar mídias disponíveis
$locadora->listarMidiasDisponiveis();

echo "\n--- Realizando Aluguéis ---\n\n";

// 5. Simular aluguéis
$locadora->alugarMidia("O Rei Leão", "joao.silva@email.com");
$locadora->alugarMidia("Duna", "maria.souza@email.com");

echo "\n";

// 6. Listar mídias novamente para ver a mudança de status
$locadora->listarMidiasDisponiveis();

echo "\n--- Testando Erros ---\n\n";

// 7. Tentar alugar mídia já alugada
$locadora->alugarMidia("Duna", "joao.silva@email.com");

// 8. Tentar alugar com cliente ou mídia inexistente
$locadora->alugarMidia("Matrix", "joao.silva@email.com");
$locadora->alugarMidia("Top Gun: Maverick", "pedro@email.com");


echo "\n--- Fim da Simulação ---\n";

?>