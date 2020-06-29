<?php
class Dinheiro
{
    public function __construct(
        public string $moeda,
        public int $montante,
    ) {}
    
}

$dindin = new Dinheiro("real", 212);

echo $dindin->moeda;
echo "\n\n";

echo $dindin->montante;
echo "\n\n";