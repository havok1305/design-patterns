<?php

namespace DesignPatterns\DI;

class Escola
{
    protected $alunos = array();
    public function adicionaAluno($aluno) {
        $this->alunos[] = $aluno;
    }

    public function removeAluno($pos) {
        unset($this->alunos[$pos]);
    }

    public function getAlunos(): array {
        return $this->alunos;
    }

}