<?php 
/* Loop WHILE (ENQUANTO)*/ 

//Exemplo 1: contagem de 1 até 10 

//$i = 1; //variável de control de iteração/repetição

//while ($contador <= 10) {
	//echo $i."\n";
	//$i = $i + 1;
	//$i++; //operador de incremento ++
//}

//echo "\n\n";

//Exemplo 2: obter/exibir nome e idade de 3 pessoas 
$contador = 1;
while ($contador <= 3) {
	//ENTRADAS
$nome = readline("Nome?: ") ;
$idade = readline("Idade: ");

	//SAÍDAS
echo "\n";
echo $nome. " tem ".$idade. " anos.\n\n";


$contador++;
}