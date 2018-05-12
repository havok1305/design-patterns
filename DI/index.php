<?php
namespace DesignPatterns\DI;

require ("ILogger.php");
require ("LoggerArquivo.php");
require ("LoggerConsole.php");
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

$loggerConsole = new LoggerConsole();
$loggerArquivo = new LoggerArquivo();

$escola = new Escola($loggerConsole);
$escola->adicionaAluno($aluno1);

//mudando de logger
$escola->setLogger($loggerArquivo);
$escola->adicionaAluno($aluno2);

$escola->removeAluno(0);
