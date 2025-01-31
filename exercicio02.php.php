<?php
/*Condicionais: se, senão, entao, fimse */

/* Protótipo de Chatbot */
echo "n**** Chatbot da empresa Biribinha Tecnologia ***\n";
echo "Opções disponíveis:\n\n";
echo "1 -> Informações\n";
echo "2 -> Reclamações\n";
echo "3 -> Elogios\n";
echo "4 -> Status\n";

echo "\n";


$opcao = readline ("Digite uma opção: ");

//teste de entrada
//echo "\n".$opcao;

 //Condicional encadeada
switch ($opcao) {
    case 1:
        $acao = "\nLegal, o que deseja saber?";
        break;
    case 2:
        $acao = "\nPuxa, que pena... O que houve?";
        break;
    case 3:
        $acao = "\nBacana! Pode falar!";
        break;
    case 4:
        $acao = "\nOk, um momento...";
        break;
    default:
        $acao = "\nNão entendi... Vou chamar o atendente.";
        break;
}

echo "\n------------------------\n";
echo $acao;
echo "\n------------------------\n";
	 
 
 