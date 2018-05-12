<?php
namespace DesignPatterns\AbstractFactory;

class OSXButton implements Button
{

    public function paint()
    {
        echo "Botão OSX<br>";
    }
}