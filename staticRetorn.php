<?php

class Justica
{
    public function tipo(): static
    {
        return new static();
    }
}

$juticaBrasileira = new Justica();
var_dump($juticaBrasileira->tipo());