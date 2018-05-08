<?php

class Escola
{
    protected static $_instance = null;
    protected $alunos = array();

    public static function instance() {

        if ( !isset( self::$_instance ) ) {

            self::$_instance = new Escola();

        }

        return self::$_instance;
    }

    public function adicionaAluno($aluno) {
        $this->alunos[] = $aluno;
    }

    public function removeAluno($pos) {
        unset($this->alunos[$pos]);
    }

    public function getAlunos() {
        return $this->alunos;
    }
}