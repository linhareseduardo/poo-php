<?php

use PHPUnit\Framework\TestCase;

class MidiaTest extends TestCase
{
    public function testCalculoPrecoAluguelDVDNormal()
    {
        // Teste para um DVD que não é lançamento
        $dvd = new DVD("Filme Antigo", 2020);
        $this->assertEquals(3.50, $dvd->calcularPrecoAluguel());
    }

    public function testCalculoPrecoAluguelDVDLancamento()
    {
        // Teste para um DVD que é lançamento (ano atual)
        $anoAtual = date('Y');
        $dvd = new DVD("Filme Novo", $anoAtual);
        $this->assertEquals(5.00, $dvd->calcularPrecoAluguel());
    }

    public function testCalculoPrecoAluguelBluRayNormal()
    {
        // Teste para um BluRay com resolução padrão
        $bluray = new BluRay("Filme HD", "1080p");
        $this->assertEquals(5.00, $bluray->calcularPrecoAluguel());
    }

    public function testCalculoPrecoAluguelBluRay4K()
    {
        // Teste para um BluRay com resolução 4K
        $bluray = new BluRay("Filme 4K", "4K");
        $this->assertEquals(7.00, $bluray->calcularPrecoAluguel());
    }

    public function testStatusDisponibilidadeAposAlugar()
    {
        $midia = new DVD("Filme para Alugar", 2021);
        $this->assertTrue($midia->isDisponivel()); // Deve estar disponível inicialmente

        $midia->alugar();
        $this->assertFalse($midia->isDisponivel()); // Não deve estar disponível após alugar
    }

    public function testStatusDisponibilidadeAposDevolver()
    {
        $midia = new DVD("Filme para Devolver", 2021);
        $midia->alugar(); // Primeiro aluga
        $this->assertFalse($midia->isDisponivel()); // Confirma que não está disponível

        $midia->devolver();
        $this->assertTrue($midia->isDisponivel()); // Deve estar disponível após devolver
    }
}