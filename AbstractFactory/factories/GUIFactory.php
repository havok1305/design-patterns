<?php
namespace DesignPatterns\AbstractFactory;

interface GUIFactory
{
    public function createButton();
    public function createScrollBar();
}