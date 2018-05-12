<?php

namespace DesignPatterns\ChainOfResponsability;

require ("AbstractChain.php");
require ("Monitor.php");
require ("Coordenador.php");
require ("Professor.php");
require ("Diretor.php");

$monitor = new Monitor(1);
$professor = new Professor(2);
$coordenador = new Coordenador(3);
$diretor = new Diretor(4);

$monitor->setSucessor($professor);
$professor->setSucessor($coordenador);
$coordenador->setSucessor($diretor);
$diretor->setSucessor($diretor);


$grau = $_GET['grau'];

if(!$grau) {
    $grau = 1;
}
echo "<br>Ocorrência com grau de severidade {$grau}: ";

$monitor->lidaComOcorrencia($grau);