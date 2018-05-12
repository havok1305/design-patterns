<?php

namespace DesignPatterns\ChainOfResponsability;

class Coordenador extends AbstractChain
{
    public function __construct($responsabilidade)
    {
        $this->responsabilidade = $responsabilidade;
    }

    public function quemTratou()
    {
        return "Coordenador";
    }
}