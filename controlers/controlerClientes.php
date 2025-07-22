<?php
    require_once '../dao/ClienteDao.inc.php'; //caregando a definicao do cliente dao

    $op = $_REQUEST['pOpcao']; // primeira coisa que pega é a intencao (esta no campo ocult do forms de login)
    if($op==1){ //autenticar

        $email = $_REQUEST['pEmail'];
        $senha = $_REQUEST['pSenha'];
        
        $dao = new ClienteDao();
        $cliente = $dao -> autenticar($email, $senha);

        if($cliente != NULL){//achou o cliente
            session_start();
            $_SESSION['cliente'] = $cliente;
            header("Location: ../views/exibirProdutos.php");            
        } 
        else{
            header("Location: ../views/formLogin.php?erro=1");
        }
        
    }
    if($op==2){//logout
        session_start();
        unset($_SESSION['cliente']);
        header("Location: ../views/index.php");

    }
?>