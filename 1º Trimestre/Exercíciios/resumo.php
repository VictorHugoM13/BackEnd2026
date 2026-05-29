<?php



    $nome = "Jão"; //String
    $idade = 10; //integer
    $altura = 1.73; //float ou double
    $ativo = false; //boolean

    echo gettype($nome);
    echo "<br>";
    echo gettype($idade);
    echo "<br>";
    echo gettype($altura);
    echo "<br>";
    echo gettype($ativo);
    echo "<br>";

    $numero = 10;

    echo $numero === "10";  
    echo $numero !== "10"; //true = 1


    class Pessoa {
        public $nome;
        public $idade;
        public $altura;
        public $peso;

        public function apresentarNome() {
            echo "Meu nome é $this->nome";
        }
        public function apresentarIdade() {
            echo "Minha idade é $this->idade";
        }
        public function apresentarAltura() {
            echo "Meu peso é $this->altura";
        }
        public function apresentarPeso() {
            echo "Meu peso é $this->peso";
        }
    }
    
    
    


?>