<?php
// Entradas interativas usando readline()
$curso = readline("Informe seu curso: ") ;
$cargahoraria = readline("Informe a Carga Horária: ");

$faltaspermitidas = $cargahoraria / 4;


echo "Seu curso é: ".$curso;
echo "\nSua carga Horaria é: ".$cargahoraria;
echo "\nA quantidade de faltas permitidas é de: ".$faltaspermitidas;
