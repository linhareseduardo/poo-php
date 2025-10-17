<?php

class Cliente {
    use Logger;

    public $nome;
    private $email;

    public function __construct($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
        $this->log("Novo cliente criado: {$this->nome}");
    }

    public function getEmail() {
        return $this->email;
    }
}

?>