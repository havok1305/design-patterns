<?php

namespace DesignPatterns\ChainOfResponsability;

class Diretor extends AbstractChain
{

    public function __construct($responsabilidade)
    {
        $this->responsabilidade = $responsabilidade;
    }

    public function quemTratou()
    {
        return "Diretor";
    }
}