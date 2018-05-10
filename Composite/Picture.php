<?php

class Picture implements Graphic
{
    protected $graphics = array();
    public function draw() {
        echo "Desenhando uma imagem...<br>";
        foreach ($this->graphics as $graphic) {
            $graphic->draw();
        }
    }

    public function add(Graphic $graphic) {
        $this->graphics[] = $graphic;
    }

    public function remove($pos) {
        unset($this->graphics[$pos]);
    }

    public function getChild($pos) {
        return $this->graphics[$pos];
    }
}