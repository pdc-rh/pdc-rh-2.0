<?php
include_once("cabecalho/cabecalho.php");
include_once ("cabecalho/menu.php");
?>
<div class="main">
    <div class="titulo">
        <span>Perfil de Oferta/Activar ou Desactivar Perfil de Oferta</span>
    </div>
</div>
<form method="post" action="Activa_Desativar.php"  id="formulario">


    <label>Selecione o Perfil Codigo de Perfil</label>
    <select name="perfil">
        <option value="1">Perfil 1</option>
        <option value="1">Perfil 1</option>
        <option value="1">Perfil 1</option>
    </select>
    <input type="text" class="Estado" type="text"  placeholder="Estado do Perfil" id="Estado" name="Estado"  >


        <div class="Bottons" name="Bottons">

            <button class="Anular" name="anular" >Alterar Estado</button>
        </div>

</form>
</body>
</html>