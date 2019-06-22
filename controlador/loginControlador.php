<?php
    require_once '../model/loginModel.php';
    $telefone=$_POST['telefone'];
    $senha=$_POST['senha'];
    $login = new loginModel($telefone, $senha);
    $login->efectuarLogin($telefone, $senha);
?>
