<?php

class BluRay extends Midia {
    private $resolucao;

    public function __construct($titulo, $resolucao) {
        parent::__construct($titulo);
        $this->resolucao = $resolucao;
    }

    public function calcularPrecoAluguel() {
        $precoBase = 5.00;
        if ($this->resolucao === '4K') {
            $precoBase += 2.00;
        }
        return $precoBase;
    }
}

?>