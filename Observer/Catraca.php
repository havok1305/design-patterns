<?php
namespace DesignPatterns\Observer;

class Catraca extends Observer
{
    public function __construct(Escola $escola)
    {
        $this->escola = $escola;
        $this->escola->vinculaModulo($this);
    }

    public function avisa($motivo)
    {
        echo "<br>Catraca: aluno removido. Motivo: " . $motivo;
    }
}