<?php

class TesteDois
{
    public function __construct()
    {
        $escola = Escola::getInstance();

        //remove primeiro aluno
        $escola->removeAluno(0);
        echo "</br>Removeu primeiro aluno";
        echo "</br>";
        echo "<pre>";
        print_r($escola->getAlunos());
        echo "</pre>";
    }
}