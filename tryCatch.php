<?php

function runCatch(): void
{
    try {
        throw new Exeption("errro");
    } catch (Throwable) {
        var_dump("Exeção capturada");
    }
}

runCatch();