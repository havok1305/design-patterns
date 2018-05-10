<?php

class WinFactory implements GUIFactory
{

    public function createButton(): Button
    {
        return new WinButton();
    }

    public function createScrollBar(): ScrollBar
    {
        return new WinScrollBar();
    }
}