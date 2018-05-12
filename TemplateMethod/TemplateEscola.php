<?php

namespace DesignPatterns\TemplateMethod;


abstract class TemplateEscola
{
    protected $alunos = array();

    public function adicionaAluno($aluno) {
        $this->antesAdicionarAluno();

        $this->alunos[] = $aluno;

        $this->depoisAdicionarAluno();
    }

    abstract public function antesAdicionarAluno();
    abstract public function depoisAdicionarAluno();
}