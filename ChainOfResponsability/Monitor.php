<?php

namespace DesignPatterns\ChainOfResponsability;


class Monitor extends AbstractChain
{
    public function __construct($responsabilidade)
    {
        $this->responsabilidade = $responsabilidade;
    }

    public function quemTratou()
    {
        return "Monitor";
    }
}