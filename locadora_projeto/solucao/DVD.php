<?php

class DVD extends Midia {
    private $anoLancamento;

    public function __construct($titulo, $anoLancamento) {
        parent::__construct($titulo);
        $this->anoLancamento = $anoLancamento;
    }

    public function calcularPrecoAluguel() {
        $precoBase = 3.50;
        if ($this->anoLancamento == date('Y')) {
            $precoBase += 1.50;
        }
        return $precoBase;
    }
}

?>