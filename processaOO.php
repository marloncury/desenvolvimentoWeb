<?php

    include_once "classes/Produto.class.php";
    $nome = $_REQUEST['vNome'];
    $marca = $_REQUEST['vMarca'];
    $preco = $_REQUEST['vPreco'];
    $quantidade = (int) $_REQUEST['vQuantidade'];


    $produto = new Produto($nome,$marca,$preco,$quantidade);

    session_start();
    
   // $_SESSION['nome'] = $produto->getNome();
    //$_SESSION['marca'] = $produto->marca;
    //$_SESSION['total'] = $produto->calcularTotal();
    $_SESSION['produto'] = $produto;
    header("Location: exibirOO.php")



?>