<?php
include_once("cabecalho/cabecalho.php");
include_once ("cabecalho/menu.php");
?>
<div class="main">
    <div class="titulo">
        <span>Funcionário/ Registar Gestor</span>
    </div>
</div>
<form method="post" action="Gestor.php"  id="formulario">
            <input type="text" class="Codigo" id="Codigo" placeholder="Insira o Código do Bilhete" name="Idade_Max" size="20" maxlength="12">

            <input type="text" class="Nome" id="Nome" placeholder="Nome do Gestor" name="nome" size="20" maxlength="12">

            <label>Área:</label>
                <select class="Areas">
                    <option>Director de Recursos Humanos</option>
                    <option>Director de Tecnologias de Informação</option>
                    <option>Director Comercial</option>
                    <option>Director de Producao</option>
                    <option>Chefe do Departamento de Segurança</option>
                    <option>Chefe de Secção de Secretariado Executivo</option>

                </select>

            <label>Filial:</label>
                <select class="Filial">
                    <option>Sede-Luanda</option>
                    <option>Martires</option>
                    <option>Kwanza-Sul</option>
                    <option>Lubango</option>
                    <option>Namibe</option>
                    <option>Cabinda</option>

                </select>

        <div>


            <button class="Anular" name="anular" >Cancelar</button>
            <button class="Alterar" name="Alterar" >Registar</button>

        </div>
</form>
</body>
</html>