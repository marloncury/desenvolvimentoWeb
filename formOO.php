<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .campo{
            border-radius: 4px;
            box-shadow: 1px 1px 2px #333;
            border: 1px solid #000;
            height: 1.3rem;
            font-size: large;

        }

        .number{
            width: 3rem;
            font-size: large;
        }

        div{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.5rem;
        }

        #btCalcular{
            border-radius: 4px;
            height: 2.5rem;
            width: 150px;
            font-size: large;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>
<body>

<div align="center">
    <h2>Produto Comprado</h2>
    <p>
    <form action="processaOO.php">
        Nome do produto: <input type="text" size="30" name="vNome" class="campo"><p>
        Marca do produto: <input type="text" size="20" name="vMarca" class="campo"><p>
        Preco: <input type="text" size="10" name="vPreco" class="campo"><p>

        Quantidade Comprada: <input type="number" size="5" name="vQuantidade" value="1" class="campo number"><p>
            <input type="submit" value="Calcular" id="btCalcular">



    </form>
</div>
    
</body>
</html>