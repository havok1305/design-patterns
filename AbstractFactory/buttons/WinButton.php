<?php
namespace DesignPatterns\AbstractFactory;

class WinButton implements Button
{

    public function paint()
    {
        echo "Botão Windows<br>";
    }
}