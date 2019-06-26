<!DOCTYPE html>
<?php
include_once("cabecalho/cabecalho.php");
include_once ("cabecalho/menu.php");
?>
<div class="main">
    <div class="titulo">
        <span>Registar funcionário</span>
    </div>
</div>
<form id="formulario" action="../../controlador/funcionarioControlador.php" method="post">
    <div class="tab">
        <label for="nome">Nome Completo</label>
        <input type="text" name="nome" id="nome" ><br>
        <label for="genero">Genero</label>
        <select name=genero>
            <option></option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
        <label for="data">Data de Nascimento</label>
        <input type="date" name="data" id="data" ><br>
        <label for="bi">BI número</label>
        <input type="text" name="bi" id="bi"><br>

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email">
        
    </div>

    
    <div class="tab">

        
        <label for="estado_civil">Estado civil</label>
        <select name="estado_civil">
            <option></option>
            <option>Solteiro/a</option>
            <option>Casado/a</option>
            <option>Divorciado/a</option>
            <option>Viuvo/a</option>
        </select>
    
        <label for="carta">Número da carta de condução</label>
        <input type="text" name="carta" id="carta">

        <label for="telefone">Número do telefone</label>
        <input type="tel" name="telefone" id="telefone">

        <label for="morada">Morada actual</label>
        <select name="morada">
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

        <label for="tipo">Tipo de funcionario</label>
        <select name="tipo">
                <option value="Gestor de area">Gestor de outras area</option>
                <option value="Outros funcionarios">Outros</option>
            </select>
        <label for="nif">NIF</label>
        <input type="text" name="nif" id="nif">
        <label for="pai">Nome do Pai</label>
        <input type="text" name="pai" id="pai">

        <label for="mae">Nome da Mãe</label>
        <input type="text" name="mae" id="mae"><br>
        
          <label for="area">Area</label>
        <select name="area">
            <?php  
                $a1 = oci_connect("pdc-rh-v2", "123","localhost/XE"); 
                $consulta1 = oci_parse($a1, "select * from area"); 
                oci_execute($consulta1); 
                while ($row1 = oci_fetch_array($consulta1)){ 
                    echo"<option value='".$row1['ID']."'>".$row1['NOME']."</option>"; 
                } 
                oci_free_statement($consulta1);
                oci_close($a1);
            ?> 
        </select>
         
        
    </div>
    
    <div class="tab">
        <label for="filial">Filial</label>
        <select name="filial">
             <?php  
                $a1F = oci_connect("pdc-rh-v2", "123","localhost/XE"); 
                $consulta1F = oci_parse($a1F, "select * from filial"); 
                oci_execute($consulta1F); 
                while ($row1 = oci_fetch_array($consulta1F)){ 
                    echo"<option value='".$row1['ID']."'>".$row1['DESCRICAO']."</option>"; 
                } 
                oci_free_statement($consulta1F);
                oci_close($a1F);
            ?> 
        </select>
        <label for="promocao">Promocao</label>
        <select name="promocao">
             <?php  
                $a1 = oci_connect("pdc-rh-v2", "123","localhost/XE"); 
                $consulta1 = oci_parse($a1, "select * from promocao"); 
                oci_execute($consulta1); 
                while ($row1 = oci_fetch_array($consulta1)){ 
                    echo"<option value='".$row1['ID']."'>".$row1['CATEGORIA']."</option>"; 
                } 
                oci_free_statement($consulta1);
                oci_close($a1);
            ?> 
        </select>
        <label for="progressao">Promocao</label>
        <select name="progressao">
             <?php  
                $a1 = oci_connect("pdc-rh-v2", "123","localhost/XE"); 
                $consulta1 = oci_parse($a1, "select * from progressao"); 
                oci_execute($consulta1); 
                while ($row1 = oci_fetch_array($consulta1)){ 
                    echo"<option value='".$row1['ID']."'>".$row1['ESCALAO']."</option>"; 
                } 
                oci_free_statement($consulta1);
                oci_close($a1);
            ?> 
        </select>
        <label for="categoria">Categoria</label>
        <input type="text" name="categoria" id="categoria">
    </div>

l    <div style="overflow:auto;">
        <div style="float:right;">
            <button type="button" id="btnVoltar" onclick="continuarVoltar(-1)">Voltar</button>
            <button type="button" id="btnContinuar" onclick="continuarVoltar(1)">Continuar</button>
        </div>
    </div>
    <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
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
