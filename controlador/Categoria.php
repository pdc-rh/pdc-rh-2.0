<?php
require_once '../model/Categoria.php';

$categoria=_POST['catego'];
$id=1;
$id_avaliacao=0


 $categori= new Categoria( 1,$categoria,0);
 $categori->insert();
 header("location:../index.php?estado=2");


?>