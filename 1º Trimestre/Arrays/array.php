<?php
        // Array Indexado - Acesso pelo índice
        $frutas = ["Abacaxi", "Maçã", "limão", "Laranja"];
        echo $frutas[2];
        $frutas[1] = "Manga";
        $frutas[] = "Jabuticaba";
        echo "<br>";
        print_r($frutas);
        echo "<br>";

        // Array Associativo - Acesso pelo chave: key=>value

        $pessoa = [
            "nome" => "Victor",
            "idade" => 23,
            "altura" => 1.73
        ];
        $pessoa["nome"] = "Joana";
        echo $pessoa["nome"];
        echo "<br>";

        // Array Numérico Multidimensional

        $vendas = [
            ["Camiseta", 15, 30.5],
            ["Tênis", 45, 50.5],
            ["Calça", 18, 150.5]
        ];

        print_r($vendas[1][2]);
        echo "<br>";

         // Array Associativo Multidimensional

         $alunos = [
            "pessoa1" => [
                "nome" => "Jão",
                "idade" => 66,
                "altura" => 1.8
            ],
            "pessoa2" => [
                "nome" => "Carlos",
                "idade" => 6,
                "altura" => 1.78
            ],
            "pessoa3" => [
                "nome" => "Maria",
                "idade" => 10,
                "altura" => 1.6
            ]
         ];

         echo $alunos["pessoa2"]["idade"];




?>