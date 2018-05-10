<?php
require ("Graphic.php");
require ("Line.php");
require ("Rectangle.php");
require ("Text.php");
require ("Picture.php");

$picture = new Picture();

$line = new Line();
$rectangle = new Rectangle();
$text = new Text();

$picture->add($line);
$picture->add($rectangle);
$picture->add($text);

$picture->draw();

