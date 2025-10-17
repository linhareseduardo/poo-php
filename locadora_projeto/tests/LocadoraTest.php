<?php

use PHPUnit\Framework\TestCase;

class LocadoraTest extends TestCase
{
    public function testAluguelBemSucedido()
    {
        // Arrange: Configuração específica para este teste
        $locadora = new Locadora();
        $cliente = new Cliente("Cliente Teste", "teste@email.com");
        $dvd = new DVD("Filme Teste", 2020);
        $locadora->adicionarCliente($cliente);
        $locadora->adicionarMidia($dvd);

        $this->assertTrue($dvd->isDisponivel());

        // Action: Executa a ação e captura a saída
        ob_start();
        $locadora->alugarMidia("Filme Teste", "teste@email.com");
        $output = ob_get_clean();

        // Assert: Verifica o resultado
        $this->assertMatchesRegularExpression('/Cliente Teste alugou Filme Teste/', $output);
        $this->assertFalse($dvd->isDisponivel());
    }

    public function testTentarAlugarMidiaJaAlugada()
    {
        // Arrange
        $locadora = new Locadora();
        $cliente = new Cliente("Cliente Teste", "teste@email.com");
        $dvd = new DVD("Filme Teste", 2020);
        $locadora->adicionarCliente($cliente);
        $locadora->adicionarMidia($dvd);

        // Action 1: Primeiro aluguel
        ob_start();
        $locadora->alugarMidia("Filme Teste", "teste@email.com");
        ob_end_clean(); // Limpa a saída

        // Action 2: Tenta alugar novamente e captura a saída
        ob_start();
        $locadora->alugarMidia("Filme Teste", "teste@email.com");
        $output = ob_get_clean();

        // Assert
        $this->assertMatchesRegularExpression('/ERRO: A mídia Filme Teste não está disponível./', $output);
    }

    public function testTentarAlugarMidiaInexistente()
    {
        // Arrange
        $locadora = new Locadora();
        $cliente = new Cliente("Cliente Teste", "teste@email.com");
        $locadora->adicionarCliente($cliente);

        // Action
        ob_start();
        $locadora->alugarMidia("Filme Inexistente", "teste@email.com");
        $output = ob_get_clean();

        // Assert
        $this->assertMatchesRegularExpression("/ERRO: Mídia com título 'Filme Inexistente' não encontrada./", $output);
    }
}