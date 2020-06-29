<?php

class Objeto 
{
    public function __toString(): string
    {
        return "metodo";        
    }
}

function teste(Stringable $stringable) 
{
    var_dump($stringable);
}

teste(new Objeto());