<?php
//tipos primitivos.

$idade = 21;
echo gettype($idade);
echo "\n";

$salario = 1000.30;
echo gettype($salario);
echo "\n";

$divisao = 10 / 30;
echo gettype($divisao);
echo "\n{$divisao}";

$texto = "olá mundo";
echo "\n{$texto}\n";
echo gettype($texto);
echo "\n";

$verdadeiro = true;
$false = false;
echo gettype($verdadeiro);
echo "\n";
echo gettype($false);
