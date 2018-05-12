<?php
namespace DesignPatterns\Iterator;

interface Iterator
{
    public function first();
    public function next();
    public function isDone();
    public function currentItem();
}