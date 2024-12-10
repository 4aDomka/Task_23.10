<?php

interface AutoInterface {
    public function drive();
    public function honk ();
    public function WipersOn ();
}

class Auto implements AutoInterface
{
    public function drive() {}
    public function honk () {}
    public function WipersOn () {}
}

class Automobile extends Auto
{
    protected function nitro () {}
    protected $facing = 'Кожа'; 
}

class Tank extends Auto 
{
    protected $facing = 'Металл';
}

class Bulldozer extends Auto
{
    protected function Ladle() {}
    protected $facing = 'Ткань';
}

$auto = new Auto ();

function testAuto (AutoInterface $auto) {
    $auto -> drive();
}
