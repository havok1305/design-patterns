<?php

namespace DesignPatterns\Decorator;

class ListaInvertidaDecorator extends EscolaDecorator
{
    public function getAlunosListaInvertida(): array {
        return array_reverse($this->getAlunos());
    }
}