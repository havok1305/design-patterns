<?php

class WinFactory implements GUIFactory
{

    public function createButton()
    {
        return new WinButton();
    }

    public function createScrollBar()
    {
        return new WinScrollBar();
    }
}