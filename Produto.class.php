<?php
    class Produto{
        private string $nome;
        public string $marca;
        private float $preco;
        private int $quantidade;

        function __construct($n,$m,$p,$q)
        {
            $this -> nome= $n;
            $this -> marca = $m;
            $this -> preco = $p;
            $this -> quantidade = $q;
            
        }
    // function __construct(string $nome, string $marca, float $preco, int $quantidade){} - utilizando o construtor para reduzir o codigo - versao superior a 8.2

    function getNome(){
        return $this->nome;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function calcularTotal(){
        if($this -> quantidade >0){
            return $this -> preco * $this -> quantidade;
        }
        else
            return $this -> preco;

    }
}
?>