<?php
    $host = "localhost";
    $bd = "AulaVanessa";
    $usuario = "root";
    $port = "3306";
    $senha = "";

    try{
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$bd;", $usuario, $senha);
        if($pdo){
            echo "Conexão realizada com sucesso";
        }else{
            echo "Conexão negada";
        }
    }catch(Exception $e){
        echo "Erro: ".$e->getMessage();
    }

   // criando um objeto em php
    // $c = new Classe();
    // $c->acao();

?>