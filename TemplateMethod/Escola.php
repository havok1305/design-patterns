<?php
namespace DesignPatterns\TemplateMethod;

class Escola extends TemplateEscola
{

    public function antesAdicionarAluno()
    {
        echo "<br>Adicionando aluno.";
    }

    public function depoisAdicionarAluno()
    {
        echo "<br>Aluno adicionado.";
        echo "<pre>";
        print_r($this->alunos);
        echo "</pre>";
    }
}