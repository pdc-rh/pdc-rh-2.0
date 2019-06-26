<?php
include_once("cabecalho/cabecalho.php");
include_once ("cabecalho/menu.php");
?>
<div class="main">
    <div class="titulo">
        <span>Perfil de Oferta/Criar Perfil de Oferta</span>
    </div>
</div>
<form method="post" action="Perfil_de_Oferta.php"   id="formulario">

    <div class="tab">
        <label class="Areas_text" for="Areas" autocomplete="off">Area de Responsabilidade:
            <select class="Areas">
                <option>Area Recursos Humanos</option>
                <option>Area Tecnologias de Informação</option>
                <option>Area Comercial</option>
                <option>Area de Producao</option>
                <option>Area de Segurança</option>
                <option>Area de Secretariado Executivo</option>

            </select>
        </label>


        <label class="Pais_text">Pais:
            <select class="Pais">
                <option>Angola</option>
            </select>
        </label>


        <label class="Provincia_text">Província:
            <select class="Provincia">
                <option>Luanda</option>
                <option>Cabinda</option>
                <option>Benguela</option>
                <option>Huambo</option>
                <option>Namibe</option>
            </select>
        </label>


        <label class="Municipio_text" for="Municipio">Município:
            <select class="Municipio">
                <option>Cazenga</option>
                <option>Viana</option>
                <option>Camakupa</option>
                <option>Lubango</option>

            </select>
        </label>
    </div>


    <div class="tab">
        <input type="text" placeholder="Digite O Bairro, Rua e numero da Casa" class="Ba_Ru_Ca" />

        <input class="Perfil" placeholder="Perfil do Posto de Trabalho: " type="text"/>

        <input type="text" placeholder="Condições e Regalias" class="Condicoes_Reg" />

        <textarea type="text" class="Habil" type="text"  placeholder="Habilitações Literarias Requeridas" id="Habil" name="Habil"  size="5300" maxlength="5000"></textarea>

        <textarea  type="text"  class="Out_Qual" type="text"  placeholder="Outras Qualificações Requeridas" required id="Out_Qual" name="Out_Qual" size="2000" maxlength="1400"></textarea>
    </div>

    <div class="tab">
        <input type="number" class="Idade" id="Idade_Min" placeholder="Idade Minima" name="Idade_Min" size="20" maxlength="12">


        <input type="number" class="Idade" id="Idade_Max" placeholder="Idade Máxima" name="Idade_Max" size="20" maxlength="12">

        <input type="number" class="Codigo" id="Codigo" placeholder="Codigo de Perfil" name="Idade_Max" size="20" maxlength="12">

        <label class="Data_Cria_text" for="Data_Cria">Data de Criação
            <input type="date" class="Data" id="Data_Cria" placeholder="Data de Criação" name="Data_Cria" size="20" maxlength="12">
        </label>

        <label class="Data_Exp_text" for="Data_Exp" > Data de Expiração
            <input type="date" class="Data" id="Data_Exp" placeholder="Data de Expiração" name="Data_Exp" size="20" maxlength="12">
        </label>
    </div>

    <div style="overflow:auto;">
        <div style="float:right;">
            <button type="button" id="btnVoltar" onclick="continuarVoltar(-1)">Voltar</button>
            <button type="button" id="btnContinuar" onclick="continuarVoltar(1)">Continuar</button>
        </div>
    </div>
    <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
    </div>
</form>
<script type="text/javascript" src="../../personalizacao/javascript/step.js"></script>
<script>

    function continuarVoltar(n) {
        var x = document.getElementsByClassName("tab");
        if (n == 1 && !validarFormulario()) return false;
        x[contador].style.display = "none";
        contador = contador + n;
        if (contador >= x.length) {
            document.getElementById("formulario").submit();
            return false;
        }
        mostarFomulario(contador);
    }

    function validarFormulario() {
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[contador].getElementsByTagName("input");

        if (valid) {
            document.getElementsByClassName("step")[contador].className += " fim";
        }
        return valid;
    }
</script>
</body>
</html>
