<?php

trait TestTrait {
    abstract public function test(int $value): int;
}

class UsandoTrait
{
    use TestTrait;

    public function test(int $value): int
    {
        return $value;
    }
}

$usando = new UsandoTrait();

echo "\n\n";
echo $usando->test(21);
echo "\n\n";