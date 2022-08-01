<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescentes';
$categorias[] = 'adulto';

$nome = 'Eduardo';
$idade = 18;

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[1] == 'infantil')
            echo "o nadador ",$nome, "compete na categoria infantil";
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[1] == 'aadulto')
            echo "o nadador ",$nome, "compete na categoria adulto";
    }
}
else
{
    echo 'adulto';
}