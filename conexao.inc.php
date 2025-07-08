<?php
    $servidor = 'localhost';
    $nomeBanco ='livraria2';
    $user = 'root';
    $senha = '';


    $con = new PDO("mysql:host=$servidor;dbname=$nomeBanco", "$user","$senha");
    

?>