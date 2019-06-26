<?php
include_once("cabecalho/cabecalho.php");
include_once ("cabecalho/menu.php");
?>
<div class="main">
    <div class="titulo">
        <span>Candidato/ Marcar Entrevista</span>
    </div>
</div>
<form method="post" action="Perfil_de_Oferta.php"   id="formulario">

    <div class="tab">
        <input type="text" placeholder="Digite O B.I do Gestor de R e S" class="Ges_R_S" />

        <input type="text" placeholder="Digite O B.I do Gestor da Área de Responabilidade" class="Gest" />

        <input type="text" placeholder="Digite O B.I do Candidato" class="Candidato" />

        <label class="Pais_text">Pais:</label>
        <select class="Pais">
            <option>Angola</option>
        </select>

        <label class="Provincia_text">Província:
            <select class="Provincia">
                <option>Luanda</option>
                <option>Cabinda</option>
                <option>Benguela</option>
                <option>Huambo</option>
                <option>Namibe</option>
            </select>
        </label>
    </div>

    <div class="tab">

        <label class="Municipio_text" for="Municipio">Município:
            <select class="Municipio">
                <option>Cazenga</option>
                <option>Viana</option>
                <option>Camakupa</option>
                <option>Lubango</option>

            </select>
        </label>

        <input type="text" placeholder="Digite O Bairro, Rua e numero da Casa" class="Ba_Ru_Ca" />

        <label class="Data_Cria_text" for="Data_Cria">Data:</label>
        <input type="date" class="Data" id="Data_Cria" placeholder="Data de Criação" name="Data_Cria" size="20" maxlength="12">

        Hora:<input type="time" class="Data" id="Data_Cria" placeholder="Horas do Encontro" name="Data_Cria" size="20" maxlength="12">

        <textarea type="text" class="Dados" type="text"  placeholder="Dados dos Membros da Reunião" id="Dados" name="Dados"  size="5300" maxlength="5000"></textarea>
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
