<?php

$idade = 17;
$numeroPessoas = 2;

echo "Você entra com 18 anos ou mais ou a partir de 16 acompanhado de maior." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho!";
} elseif ($idade >= 16 && $numeroPessoas > 1) {
    echo "Você tem $idade anos, está acompanhado, pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar.";
}

echo PHP_EOL;
echo "Adeus";