<?php
namespace DesignPatterns\Decorator;

require ('EscolaInterface.php');
require ('Escola.php');
require ('EscolaDecorator.php');
require ('BuscaPorNomeDecorator.php');
require ('ListaInvertidaDecorator.php');


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

echo "Lista de alunos original<br>";
echo "<pre>";
print_r($escola->getAlunos());
echo "</pre><br>";

$pornome = new BuscaPorNomeDecorator($escola);

$letra = 'J';

if(isset($_GET['letra'])) {
    $letra = $_GET['letra'];
}

$alunos = $pornome->getAlunosByNome($letra);
echo "Alunos começando com '{$letra}'<br>";
echo "<pre>";
print_r($alunos);
echo "</pre><br>";

$listainversa = new ListaInvertidaDecorator($escola);
$alunos = $listainversa->getAlunosListaInvertida();
echo "Alunos em ordem inversa<br>";
echo "<pre>";
print_r($alunos);
echo "</pre>";