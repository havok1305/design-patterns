<?php
namespace DesignPatterns\Iterator;

require ("Iterator.php");
require ("Aggregate.php");
require ("EscolaIterator.php");
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

$escola->add($aluno1);
$escola->add($aluno2);
$escola->add($aluno3);

$iterator = $escola->createIterator();

while(!$iterator->isDone()) {
    echo "<pre>";
    print_r($iterator->next());
    echo "</pre><br>";

}
