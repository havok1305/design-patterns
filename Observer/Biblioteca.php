<?php
namespace DesignPatterns\Observer;

class Biblioteca extends Observer
{
    public function __construct(Escola $escola)
    {
        $this->escola = $escola;
        $this->escola->vinculaModulo($this);
    }

    public function avisa($motivo)
    {
        echo "<br>Biblioteca: aluno removido. Motivo: " . $motivo;
    }
}