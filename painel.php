<?php
    //session_start();
    include("verificar_user.php"); //puxando o verificador de sessão

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .mensagem{

            height: 100px;
            width: 100%;
            background-color: green;
        }
        h1{
            padding-top: 25px;
            text-align: center;
            color: white;
        }
        .sair{
            text-align: center;
            margin-top: 60px;
        }
        .sair a{
            text-decoration: none;
            font-size: 25px;
            color: black;
        }
        .sair a:hover{
            background-color: #03a9f4;
            padding: 10px 10px 10px 10px;
            border-radius: 5px;
            color: white;
        }
    </style>
</head>
<body>
    <div class = "container">
        <div class= "mensagem">
            <h1>Parabéns pelo acesso ao painel!!!!</h1>
        </div>
    </div>
    <div class="sair">
        <a href="logout.php">SAIR</a>
    </div>
    
</body>
</html>