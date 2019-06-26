<?php
include_once("cabecalho/cabecalho.php");
include_once ("cabecalho/menu.php");
?>
<div class="main">
    <div class="titulo">
        <span>Funcionário/ Activar ou Desactivar Funcionario</span>
    </div>
</div>
<form method="post" action="Activa_Desativar.php"  id="formulario">
<nav class="Formularios" >

    <label>Seleciona o funcionário</label>
    <select name="funcionario" id="">
        <option value="1">Bernado</option>
        <option value="2">Ricardo</option>
        <option value="3">Diogo Manuel</option>
    </select>
    <input type="text" class="Estado" type="text"  placeholder="Estado do Funcionário" id="Estado" name="Estado"  >

    <input type="text" class="Motivo" type="text"  placeholder="Motivo" id="Estado" name="Estado"  >

    <div class="Bottons" name="Bottons" style="float: right">
        <button class="Anular" name="anular" >Alterar</button>
    </div>
</form>
</body>
</html>
