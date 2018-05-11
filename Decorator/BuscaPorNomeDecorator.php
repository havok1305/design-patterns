<?php
namespace DesignPatterns\Decorator;

class BuscaPorNomeDecorator extends EscolaDecorator
{
    public function getAlunosByNome($letra): array {
        $alunos = $this->getAlunos();
        $novo_alunos = array();
        $letra = strtolower(trim($letra));
        foreach($alunos as $aluno) {
            $nome = $aluno['nome'];
            $nome = strtolower(trim($nome));
            $inicial = substr($nome, 0, strlen($letra));
            if($inicial == $letra) {
                $novo_alunos[] = $aluno;
            }
        }
        return $novo_alunos;
    }
}