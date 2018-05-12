<?php
namespace DesignPatterns\Iterator;

class EscolaIterator implements Iterator
{
    protected $position;
    protected $array;

    public function __construct($array)
    {
        $this->first();
        $this->array = $array;
    }

    public function first()
    {
        $this->position = 0;
    }

    public function next()
    {
        $item = null;
        if(!$this->isDone()) {
            $item = $this->currentItem();
            $this->position++;
        }
        return $item;
    }

    public function isDone()
    {
        return $this->position >= count($this->array);
    }

    public function currentItem()
    {
        return $this->array[$this->position];
    }
}