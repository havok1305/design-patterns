<?php
namespace DesignPatterns\AbstractFactory;

class OSXScrollBar implements ScrollBar
{

    public function paint()
    {
        echo "ScrollBar OSX<br>";
    }
}