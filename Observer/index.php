<?php
namespace DesignPatterns\Observer;

require ('Observer.php');
require ('Escola.php');
require ('Biblioteca.php');
require ('Catraca.php');

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

new Catraca($escola);
new Biblioteca($escola);

$escola->adicionaAluno($aluno1);
$escola->adicionaAluno($aluno2);
$escola->adicionaAluno($aluno3);

echo "Lista de alunos matriculados<br>";
echo "<pre>";
print_r($escola->getAlunos());
echo "</pre><br>";

$escola->removeAluno(0, "Aluno desistiu da escola");

echo "Lista de alunos após remoção<br>";
echo "<pre>";
print_r($escola->getAlunos());
echo "</pre><br>";

