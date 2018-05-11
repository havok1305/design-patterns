<?php
namespace DesignPatterns\Decorator;

interface EscolaInterface
{
    public function adicionaAluno($aluno);
    public function removeAluno($pos);
    public function getAlunos(): array;
}