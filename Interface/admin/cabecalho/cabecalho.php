<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../personalizacao/img/logotipo.png" />
    <title>PDC-RH</title>
    
    <link rel="stylesheet" type="text/css" href="../../personalizacao/css/admin.css">
    <link rel="stylesheet" href="../../personalizacao/css/estilo_candidato.css">
</head>
<body>
<header class="cabecalho">
    <div class="logo">
         <img style="float: left;margin-left: 30px" src="../../personalizacao/img/logotipo.png"><span style="float: right;margin:auto; margin-right: 90px">PDC-RH</span>
    </div>
    <div class="dados" >
        <ul style="float: right">
            <li>
                <img src="../../personalizacao/img/avatar.png">
                <a href="#"><?php session_start(); echo $bi=$_SESSION['login']['NOME'];?></a>
                <ul class="corSubmenu">
                    <li><a href="index.php">sair</a></li>
                </ul>
            </li>
        </ul>
    </div>
</header>