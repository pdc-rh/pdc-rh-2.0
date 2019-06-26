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
        <input class="Perfil" name="descricao" placeholder="Descrição de Oferta de trabalho " type="text"/>
        <label class="Areas_text" for="Areas" autocomplete="off">Area de Responsabilidade:
            <select name="area">
                  <?php  
                        $a1F = oci_connect("pdc-rh-v2", "123","localhost/XE"); 
                        $consulta1F = oci_parse($a1F, "select * from area"); 
                        oci_execute($consulta1F); 
                        while ($row1 = oci_fetch_array($consulta1F)){ 
                            echo"<option value='".$row1['ID']."'>".$row1['NOME']."</option>"; 
                        } 
                        oci_free_statement($consulta1F);
                        oci_close($a1F);
                    ?> 
            </select>
        </label>
   

        <label for="local">Local</label>
        <select name="local">
            <?php  
                $a1 = oci_connect("pdc-rh-v2", "123","localhost/XE"); 
                $consulta1 = oci_parse($a1, "select * from local"); 
                oci_execute($consulta1); 
                while ($row1 = oci_fetch_array($consulta1)){ 
                    echo"<option value='".$row1['ID']."'>".($row1['PROVINCIA']."-".$row1['MUNICIPIO']."-".$row1['BAIRRO']."-".$row1['RUA'])."</option>"; 
                } 
                oci_free_statement($consulta1);
                oci_close($a1);
            ?> 
        </select>
    </div>

    <div class="tab">

        <input class="Perfil" name="preferencia" placeholder="Preferencia do Posto de Trabalho: " type="text"/>

        <textarea type="text" class="Habil" name="regalias"  placeholder="Condições e Regalias" id="Habil"  size="5300" maxlength="5000"></textarea>
    </div>

    <div class="tab">
        <input type="number" class="Idade" id="Idade_Min" name="Idade_Min" placeholder="Idade Minima" name="Idade_Min" size="20" maxlength="12">


        <input type="number" class="Idade" id="Idade_Max" name="Idade_Max" placeholder="Idade Máxima" name="Idade_Max" size="20" maxlength="12">

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
