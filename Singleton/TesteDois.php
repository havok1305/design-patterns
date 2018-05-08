<?php

class TesteDois
{
    public function __construct()
    {
        $escola = Escola::instance();

        //remove primeiro aluno
        $escola->removeAluno(0);
        echo "</br>";
        echo "</br>";
        echo "<pre>";
        print_r($escola->getAlunos());
        echo "</pre>";
    }
}