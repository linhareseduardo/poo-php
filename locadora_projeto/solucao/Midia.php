<?php

abstract class Midia {
    use Logger;

    protected $titulo;
    protected $disponivel = true;
    private static $contadorMidias = 0;
    protected $id;

    public function __construct($titulo) {
        $this->titulo = $titulo;
        self::$contadorMidias++;
        $this->id = self::$contadorMidias;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function isDisponivel() {
        return $this->disponivel;
    }

    public function alugar() {
        if ($this->disponivel) {
            $this->disponivel = false;
            return true;
        }
        return false;
    }

    public function devolver() {
        $this->disponivel = true;
    }

    abstract public function calcularPrecoAluguel();
}

?>