<?php

namespace DesignPatterns\TemplateMethod;

require ("TemplateEscola.php");
require ("Escola.php");

$aluno1 = array(
    'matricula'=>111222,
    'nome'=>'Jonas',
    'telefone'=>'63 3476-6699'
);
$aluno2 = array(
    'matricula'=>111223,
    'nome'=>'Ricardo',
    'telefone'=>'63 3476-5577'
);
$aluno3 = array(
    'matricula'=>111224,
    'nome'=>'Maria',
    'telefone'=>'63 3476-3322'
);

$escola = new Escola();

$escola->adicionaAluno($aluno1);
$escola->adicionaAluno($aluno2);
$escola->adicionaAluno($aluno3);