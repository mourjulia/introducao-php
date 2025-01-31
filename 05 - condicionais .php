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
 if($opcao == 1){
	$acao =  "\nLegal, oque deseja saber?";
 } elseif ($opcao == 2) {
	$acao =  "\nPuxa, que pena... O que houve?";
 } elseif ($opcao == 3) {
	$acao = "\nBacana! Pode falar!";
 } elseif ($opcao == 4) {
	$acao = "\nOk, um momento...";
 } else {
	$acao = "\nNão entendi... Vou chamar o atendente.";
 }
 
 echo "\n------------------------\n";
 echo $acao;
 echo "\n------------------------\n";
 
	 
 
 