<?php
namespace DesignPatterns\AbstractFactory;

class WinScrollBar implements ScrollBar
{

    public function paint()
    {
        echo "ScrollBar Windows<br>";
    }
}