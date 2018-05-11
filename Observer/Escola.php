<?php
namespace DesignPatterns\Observer;

class Escola
{
    protected $observers = array();

    protected $alunos = array();
    public function adicionaAluno($aluno) {
        $this->alunos[] = $aluno;
    }

    public function removeAluno($pos, $motivo) {
        $aluno = $this->alunos[$pos];
        echo "<br>Removendo aluno '{$aluno['nome']}'";

        unset($this->alunos[$pos]);
        $this->avisaModulos($motivo);
    }

    public function getAlunos(): array {
        return $this->alunos;
    }

    public function vinculaModulo($modulo) {
        $this->observers[] = $modulo;
    }

    public function avisaModulos($motivo) {
        foreach($this->observers as $observer) {
            $observer->avisa($motivo);
        }
    }
}