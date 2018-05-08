<?php

class Teste
{
    public function __construct()
    {
        $escola = Escola::getInstance();

        $aluno1 = array(
            'matricula'=>111222,
            'nome'=>'Aluno 1',
            'telefone'=>'63 3476-6699'
        );
        $aluno2 = array(
            'matricula'=>111223,
            'nome'=>'Aluno 2',
            'telefone'=>'63 3476-5577'
        );
        $aluno3 = array(
            'matricula'=>111224,
            'nome'=>'Aluno 3',
            'telefone'=>'63 3476-3322'
        );

        $escola->adicionaAluno($aluno1);
        echo "<br>Adicionou aluno 1";
        $escola->adicionaAluno($aluno2);
        echo "<br>Adicionou aluno 2";
        $escola->adicionaAluno($aluno3);
        echo "<br>Adicionou aluno 3";

        echo "<pre>";
        print_r($escola->getAlunos());
        echo "</pre>";
    }
}