<?php

class Food {}

class Bar {}

interface testeInterface {
    public function runTest(Food|Bar $input): int|float;
    public function runTestParametroNulo(?Bar $input): void;
}

class Run implements testeInterface {
    public function runTest(Food|Bar $input): int|float
    {
        return 213.21;
    }

    public function runTestParametroNulo(?Bar $input): void
    {
        echo "okk";
    }
}

$run = new Run();
$bar = new Bar();
$food = new Food();

echo $run->runTest($bar);
echo "\n\n";

echo $run->runTest($food);
echo "\n\n";

echo $run->runTestParametroNulo($bar);