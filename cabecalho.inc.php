<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loja virtual Des Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
<?php
  session_start();
  $tipo = 'C';
  if(isset($_SESSION['cliente'])){ //logado
    $cliente = $_SESSION['cliente'];
    $tipo = $cliente->tipo;
  }
    // tratamento do menu para cada usuário!
    require_once "menu$tipo.inc.php"; //concatenando o tipo do cliente com o menu  (A ou C)

?>          