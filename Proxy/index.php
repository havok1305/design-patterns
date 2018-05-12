<?php
namespace DesignPatterns\Proxy;

require ("AbstractProxy.php");
require ("AssistenteBiblioteca.php");
require ("Biblioteca.php");

$biblioteca = new Biblioteca();
$assistente = new AssistenteBiblioteca($biblioteca);

$livro = "O Senhor dos Anéis";

$assistente->consultaLivro($livro);
$assistente->retiraLivro($livro);
$assistente->devolveLivro($livro);