<?php

class Objeto {}

function virgulaAdireita(
    int $dinheiros,
    string $banco,
    Objeto $obj,
) {
    var_dump($banco);
    var_dump($dinheiros);
    var_dump($obj);
}

$ob = new Objeto();

virgulaAdireita(122, "bradesco", $ob);
