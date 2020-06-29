<?php

class ExampleAttribute {}

class Bar {}

<<ExampleAttribute>>
class Exemple
{
    <<ExampleAttribute>>
    public const FOO = 'foo';
 
    <<ExampleAttribute>>
    public $x;
 
    <<ExampleAttribute>>
    public function exempleRun(<<ExampleAttribute>> $bar): float|int
    { 
        return 1331;
    }
}

$exemple = new Exemple();
$bar = new Bar();

echo "\n";
echo $exemple->exempleRun($bar);
echo "\n";