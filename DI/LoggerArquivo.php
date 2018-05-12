<?php

namespace DesignPatterns\DI;

class LoggerArquivo implements ILogger
{
    public function log($log)
    {
        echo "<br>Escrevendo log no arquivo.";
    }
}