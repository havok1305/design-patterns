<?php
namespace DesignPatterns\AbstractFactory;

class OSXFactory implements GUIFactory
{

    public function createButton()
    {
        return new OSXButton();
    }

    public function createScrollBar()
    {
        return new OSXScrollBar();
    }
}