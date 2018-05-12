<?php
namespace DesignPatterns\Proxy;

class Biblioteca implements AbstractProxy
{

    public function consultaLivro($livro)
    {

    }

    public function retiraLivro($livro)
    {
        echo "<br>O livro {$livro} foi retirado pela biblioteca.";
    }

    public function devolveLivro($livro)
    {
        echo "<br>O livro {$livro} foi devolvido pela biblioteca.";
    }
}