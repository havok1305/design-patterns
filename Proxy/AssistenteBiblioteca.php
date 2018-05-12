<?php

namespace DesignPatterns\Proxy;


class AssistenteBiblioteca implements AbstractProxy
{
    protected $biblioteca = null;

    public function __construct(Biblioteca $biblioteca)
    {
        $this->biblioteca = $biblioteca;
    }

    public function consultaLivro($livro)
    {
        echo "<br>O livro {$livro} foi consultado pela Assistente.";
    }

    public function retiraLivro($livro)
    {
        $this->biblioteca->retiraLivro($livro);
    }

    public function devolveLivro($livro)
    {
        $this->biblioteca->devolveLivro($livro);
    }
}