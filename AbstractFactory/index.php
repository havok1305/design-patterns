<?php
namespace DesignPatterns\AbstractFactory;

require("buttons/Button.php");
require("scrollbars/ScrollBar.php");
require("factories/GUIFactory.php");
require("buttons/WinButton.php");
require("scrollbars/WinScrollBar.php");
require("scrollbars/OSXScrollBar.php");
require("buttons/OSXButton.php");
require("factories/OSXFactory.php");
require("factories/WinFactory.php");

$factory = new WinFactory();
$botao = $factory->createButton();
$scrollbar = $factory->createScrollBar();
$botao->paint();
$scrollbar->paint();

$factory = new OSXFactory();
$botao = $factory->createButton();
$scrollbar = $factory->createScrollBar();
$botao->paint();
$scrollbar->paint();