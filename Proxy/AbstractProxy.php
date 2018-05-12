<?php

namespace DesignPatterns\Proxy;


interface AbstractProxy
{
    public function consultaLivro($livro);
    public function retiraLivro($livro);
    public function devolveLivro($livro);
}