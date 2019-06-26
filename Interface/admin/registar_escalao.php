<?php
include_once("cabecalho/cabecalho.php");
include_once ("cabecalho/menu.php");
?>
<div class="main">
    <div class="titulo">
        <span>CAtegoria e Escalão/ Criar Escalão</span>
    </div>
</div>
<form method="post" action="Perfil_de_Oferta.php"   id="formulario">
    <label class="Cat_text" for="Categ" autocomplete="off">Categória:
        <select class="Categ">
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
            <option>E</option>
            <option>F</option>

        </select>
    </label>


    <label class="Escalão_text" for="Escalao" autocomplete="off">Escalão:
        <select class="Escalao">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </label>


    <label class="Cat_text"  >
        <input class="Cat" placeholder="Valor de remuneração" type="text"/>

    </label>

    <div class="Bottons" name="Bottons" style="float: right">
        <button class="Criar" name="criar" >Criar</button>
    </div>
</form>
</body>
</html>