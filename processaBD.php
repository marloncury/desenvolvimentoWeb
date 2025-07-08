<?php
    include_once 'conexao.inc.php';
    $op = $_REQUEST['opcao'];

    if($op == 1){ //inclusao
        $con -> query("insert into autores (autor_id, nome, email, dt_nasc) values(5','user teste2', 'teste2@email.com', '1990-10-20' )");
        //echo 'Inserção realizada com sucesso!';
        header('Location: processaBD.php?opcao=4');

    }
    else{
        if($op == 2){ //atualizacao
            $con -> query("update autores  set nome = 'Novo nome teste 2', email='novoemail2@email.com' where autor_id=48");
            //echo 'Atualização realizada com sucesso';
            header('Location: processaBD.php?opcao=4');
        }
        else{
            if($op == 3){ //delete
                $con -> query("delete from autores where autor_id=50");
                //echo "Exclusao realizada";
                header('Location: processaBD.php?opcao=4');

            }
            else{
                if($op == 4){ //selecao
                    $rs = $con->query("select * from autores");
                    while($registro = $rs->fetch(PDO::FETCH_OBJ)){
                        echo "<p>$registro->autor_id - $registro->nome - $registro->email";
                    }
                }
                else{
                    if($op ==5){
                        $email = $_REQUEST['busca'];
                        $rs = $con->prepare("select * from autores where email = :em");
                        $rs -> bindValue(":em", $email);
                        $rs -> execute();

                        if($rs->rowCount() > 0){ //encontrei um autor
                            $registro = $rs->fetch(PDO::FETCH_ASSOC);
                            echo "<p> Autor Encontrado:". $registro['autor_id'] . ' - ' . $registro['nome'];

                        }
                    }
                }
            }
        }
    }
?>