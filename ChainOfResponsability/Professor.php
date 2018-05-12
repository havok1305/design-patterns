<?php

namespace DesignPatterns\ChainOfResponsability;


class Professor extends AbstractChain
{
    public function __construct($responsabilidade)
    {
        $this->responsabilidade = $responsabilidade;
    }

    public function quemTratou()
    {
        return "Professor";
    }
}