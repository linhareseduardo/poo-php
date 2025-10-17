<?php

trait Logger {
    public function log($mensagem) {
        $dataHora = date('Y-m-d H:i:s');
        echo "[{$dataHora}] - {$mensagem}\n";
    }
}

?>