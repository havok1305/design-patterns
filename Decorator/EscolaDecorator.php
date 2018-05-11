<?php
namespace DesignPatterns\Decorator;

abstract class EscolaDecorator implements EscolaInterface
{
    protected $escola;
    public function __construct(EscolaInterface $escola)
    {
        $this->escola = $escola;
    }

    public function adicionaAluno($aluno)
    {
        $this->escola->adicionaAluno($aluno);
    }
    public function removeAluno($pos)
    {
        $this->escola->removeAluno($pos);
    }
    public function getAlunos(): array
    {
        return $this->escola->getAlunos();
    }

}