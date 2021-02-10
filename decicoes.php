<?php

$idade = 17;
$nome = 'Alex';

echo "Você pode entrar se tiver mais que 18 anos" . PHP_EOL;

if ($idade == 18 || $idade > 18) 
{
    echo "Você tem $idade anos." . PHP_EOL; 
    echo "Pode entrar";
}
else
{
    echo "você não pode entrar";
}


if ($idade == 18 && $nome == 'Alex') 
{
    echo "Você tem $idade anos." . PHP_EOL; 
    echo "Pode entrar";
}
else
{
    echo "você não pode entrar";
}