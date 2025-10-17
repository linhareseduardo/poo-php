<?php

class Locadora {
    use Logger;

    private $midias = [];
    private $clientes = [];

    public function adicionarMidia(Midia $midia) {
        $this->midias[] = $midia;
        $this->log("Mídia adicionada ao acervo: " . $midia->getTitulo());
    }

    public function adicionarCliente(Cliente $cliente) {
        $this->clientes[] = $cliente;
    }

    public function listarMidiasDisponiveis() {
        echo "--- Mídias Disponíveis ---\n";
        foreach ($this->midias as $midia) {
            if ($midia->isDisponivel()) {
                $preco = number_format($midia->calcularPrecoAluguel(), 2, ',', '.');
                echo "Título: {$midia->getTitulo()} | Preço: R$ {$preco}\n";
            }
        }
        echo "-------------------------\n";
    }

    public function alugarMidia($tituloMidia, $emailCliente) {
        $midiaEncontrada = null;
        $clienteEncontrado = null;

        foreach ($this->midias as $midia) {
            if ($midia->getTitulo() === $tituloMidia) {
                $midiaEncontrada = $midia;
                break;
            }
        }

        foreach ($this->clientes as $cliente) {
            if ($cliente->getEmail() === $emailCliente) {
                $clienteEncontrado = $cliente;
                break;
            }
        }

        if ($midiaEncontrada && $clienteEncontrado) {
            if ($midiaEncontrada->alugar()) {
                $this->log("{$clienteEncontrado->nome} alugou {$midiaEncontrada->getTitulo()}");
            } else {
                $this->log("ERRO: A mídia {$midiaEncontrada->getTitulo()} não está disponível.");
            }
        } else {
            if (!$midiaEncontrada) {
                $this->log("ERRO: Mídia com título '{$tituloMidia}' não encontrada.");
            }
            if (!$clienteEncontrado) {
                $this->log("ERRO: Cliente com email '{$emailCliente}' não encontrado.");
            }
        }
    }
}

?>