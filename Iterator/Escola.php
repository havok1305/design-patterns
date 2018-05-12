<?php
namespace DesignPatterns\Iterator;

class Escola implements Aggregate
{
    protected $alunos = array();

    public function add($aluno)
    {
        $this->alunos[] = $aluno;
    }
    public function remove($pos)
    {
        unset($this->alunos[$pos]);
    }

    public function createIterator()
    {
        $iterator = new EscolaIterator($this->alunos);
        return $iterator;
    }
}