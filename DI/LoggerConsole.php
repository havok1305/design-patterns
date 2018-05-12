<?php

namespace DesignPatterns\DI;

class LoggerConsole implements ILogger
{
    public function log($log)
    {
        echo "<br>Escrevendo log na tela: {$log}";
    }
}