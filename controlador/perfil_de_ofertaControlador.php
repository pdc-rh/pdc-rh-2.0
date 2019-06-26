<?php

require_once '../model/Perfil_de_oferta.php';

$area=$_POST['area'];
$descricao=$_POST['descricao'];
$regalias=$_POST['regalias'];
$local = $_POST['local'];
$preferencia=$_POST['preferencia'];
$Idade_Min=$_POST['Idade_Min'];
$Idade_Max=$_POST['Idade_Max'];
$dataC=$_POST['Data_Cria'];
$dataCri= date('d-M-Y',strtotime($data));
$dataE=$_POST['Data_Exp'];
$dataExp= date('d-M-Y',strtotime($data));
$perf=new Perfil_de_oferta ($area, $pais, $provincia, $muncipio, $bairro, $perfil, $regalias, $habil, $Out_Qual, $Idade_Min, $Idade_Max, $dataC, $dataCri, $dataE, $dataExp);
$perf-> insert();

