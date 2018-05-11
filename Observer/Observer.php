<?php
namespace DesignPatterns\Observer;

abstract class Observer
{
    protected $escola;
    abstract public function avisa($motivo);
}