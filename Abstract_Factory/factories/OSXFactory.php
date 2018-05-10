<?php

class OSXFactory implements GUIFactory
{

    public function createButton(): Button
    {
        return new OSXButton();
    }

    public function createScrollBar(): ScrollBar
    {
        return new OSXScrollBar();
    }
}