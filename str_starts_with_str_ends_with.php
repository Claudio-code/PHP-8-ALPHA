<?php

$variavel = "ser de direita e honesto, é contraditorio.";


if (str_starts_with($variavel, 'ser')) {
    echo "\n\n identificado o conteudo do inicio da string. \n\n";
}


if (str_ends_with($variavel, 'contraditorio.')) {
    echo "\n\n identificado o conteudo do fim da string. \n\n";
}
