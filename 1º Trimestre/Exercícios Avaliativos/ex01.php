<?php
    //EX01
    $nomes = ["Ana", "Carlos", "Pedro", "Lucas"];
    echo array_search("Pedro", $nomes);
    echo "<br>";
    //EX02
    $frutas = ["maça", "maça", "maça", "maça", "maça"];
    echo count($frutas);
    echo "<br>";
    //EX03
    $numeros = [5, 10, 1, 15];
    echo array_sum($numeros);
    echo "<br>";
    //EX04
    $nomes1 = ["João", "Maria", "Pedro"];
    array_shift($nomes1);
    print_r($nomes1);
    echo "<br>";
    //EX05
    $numeros2 = [3, 5, 7, 9];
    if (in_array(1, $numeros2)) {
        echo "Existe";
    }
    else {
        echo "Não existe";
    }

    echo "<br>";
    //EX06
    $cores = ["Vermelho", "Preto"];
    array_push($cores, "Verde");
    print_r($cores);

    echo "<br>";
    //EX07

    $numeros3 = [10, 20, 30, 40];
    array_pop($numeros3);
    print_r($numeros3);

    echo "<br>";
    //EX08

    $nomes4 = ["Carlos", "Beatriz"];
    array_unshift($nomes4, "Victor");
    print_r($nomes4);

    echo "<br>";
    //EX09
    $valores = [8, 3, 1, 6];
    sort($valores);
    print_r($valores);

    echo "<br>";
    //EX10
    $a = [1, 2, 3];
    $b = [4, 5];

    $resultado = array_merge($a, $b);

    print_r($resultado);













?>