<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTE - BANCO DE DADOS EM PHP</title>
</head>
<body>
    <div align='center'>
        <a href="processaBD.php?opcao=1">Incluir</a><p>
        <a href="processaBD.php?opcao=2">Atualizar</a><p>
        <a href="processaBD.php?opcao=3">Excluir</a><p>
        <a href="processaBD.php?opcao=4">Selecionar</a><p>

        <form action="processaBD.php">
            Buscar autor (e-mail):<br>
            <input type="text" size="20" name="busca" >
            <p>
                <input type="submit" value="Buscar">
            </p>
            <input type="hidden" value="5" name="opcao">
        </form>

    </div>
</body>
</html>