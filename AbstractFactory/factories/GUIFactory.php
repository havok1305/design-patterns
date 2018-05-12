<?php

interface GUIFactory
{
    public function createButton(): Button;
    public function createScrollBar(): ScrollBar;
}