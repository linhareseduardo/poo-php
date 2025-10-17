<?php

// Carrega os arquivos na ordem correta de dependência para evitar erros.
require_once __DIR__ . '/../solucao/Logger.php';
require_once __DIR__ . '/../solucao/Midia.php';

// Carrega os arquivos restantes, exceto o index.php.
foreach (glob(__DIR__ . '/../solucao/*.php') as $filename) {
    if (basename($filename) !== 'Logger.php' && basename($filename) !== 'Midia.php' && basename($filename) !== 'index.php') {
        require_once $filename;
    }
}