<?php

    $idade = 1;
    $temCarteira = false;

    if ($idade >= 18 && $temCarteira == true) {
        echo "Pode dirigir";
    }
    else {
        echo "Não pode dirigir";
    }
    echo "<br>";

    $dia = "segunda-feira";

    if ($dia == "sábado" || $dia == "domingo") {
        echo "Final de semana";
    }
    else {
        echo "Dia de semana";
    }
    echo "<br>";

    $nota = 8;

    if ($nota >= 7) {
        echo "Aprovado";
    }
    elseif ($nota >= 5) {
        echo "Recuperação";
    }
    else {
        echo "reprovado";
    }
    echo "<br>";

    #Operador ternário

    $idade1 = 5;
    $mensagem = ($idade1 >= 18) ? "Maior de idade" : "Menor de idade";
    echo $mensagem;


    /*Crie um programa que:
        ● Declare uma temperatura em celsius = 10;
        ● Converta para Fahrenheit;
        ● Exiba o resultado.
        📌 Fórmula:
        F = (C * 1.8) + 32 
    */








?>

