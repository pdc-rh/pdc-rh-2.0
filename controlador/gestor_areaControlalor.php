<?php
    require_once '../model/Gestor_area.php';
    
    $area=$_POST['area'];
    $bi_pessoa=$_POST['bi'];
    $tipo=$_POST['tipo'];
    $filial=$_POST['filial'];
    $funcionarioG= new Gestor_area($bi_pessoa,$tipo,$area,$filial);
    $funcionarioG->insert();
    header("location:../interface/admin/registar_gestor.php");
    
    

