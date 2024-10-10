<?php

class Car {
    public string $color;
    public int $position;
    public int $speed;

    public function __construct($color, $position, $speed = 0)
    {
        $this->color = $color;
        $this->position = $position;
        $this->speed = $speed ? $speed : rand(10, 200);
    }

    public function show() : void
    {
        echo '<img class="car" src="../images/' . $this->color . '.png" 
                style="top: '. $this->position .'%; 
                animation-duration: calc(500s / '. $this->speed.');">';
    }
}
