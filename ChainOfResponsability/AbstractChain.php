<?php
namespace DesignPatterns\ChainOfResponsability;

abstract class AbstractChain
{
    protected $sucessor;
    protected $responsabilidade;

    public function setSucessor($sucessor) {
        $this->sucessor = $sucessor;
    }

    public function lidaComOcorrencia($severidade)
    {
        if ($severidade > $this->responsabilidade) {
            $this->sucessor->lidaComOcorrencia($severidade);
        } else {
            echo "<br>" . $this->quemTratou() . " tratou.";
        }
    }
    abstract public function quemTratou();
}