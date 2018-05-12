<?php

namespace DesignPatterns\DI;

class Escola
{
    protected $alunos = array();
    protected $logger;

    public function __construct(ILogger $logger)
    {
        $this->logger = $logger;
    }

    public function setLogger($logger) {
        $this->logger = $logger;
    }

    public function adicionaAluno($aluno) {
        $this->alunos[] = $aluno;
        $this->logger->log("Aluno {$aluno['nome']} adicionado");
    }

    public function removeAluno($pos) {
        $aluno = $this->alunos[$pos];
        unset($this->alunos[$pos]);
        $this->logger->log("Aluno {$aluno['nome']} removido");
    }

    public function getAlunos(): array {
        return $this->alunos;
    }

}