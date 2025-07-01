<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        $prod = $_SESSION['produto'];
    ?>
    
    <div align="center">
        <h2>Produto desejado: <?= $prod->getNome()?> <p>
            Marca: <?= $prod->marca?> <p>
            Valor Total: <?= $prod->calcularTotal()?>  <p>

        </h2>
    </div>
</body>
</html>