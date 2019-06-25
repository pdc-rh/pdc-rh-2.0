<!DOCTYPE html>

<?php
include_once("cabecalho/cabecalho.php");
include_once ("cabecalho/menu.php");
?>
<div class="main">
    <div class="titulo">
        <span>Registar candidato</span>
    </div>


</div>

<form id="formulario" action="ok.php" method="post">
    <div class="tab">
        <label for="nome">Nome Completo</label>
        <input type="text" name="nome" id="nome" ><br>
       <label for="nome">Genero</label>
        <select name=genero>
            <option></option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
        <label for="data">Data de Nascimento</label>
        <input type="date" name="data" id="data" ><br>
        <label for="bi">BI número</label>
        <input type="text" name="bi" id="bi"/><br>
            
    </div>

    <div class="tab">
    
        <label for="local">Local de Nascimento</label>
        <input type="text" name="text" id="local" /><br>
        <label for="nome">Estado civil</label>
        <select name="estado_civil">
            <option></option>
            <option>Solteiro/a</option>
            <option>Casado/a</option>
            <option>Divorciado/a</option>
            <option>Viuvo/a</option>
        </select>
        <label for="pai">Morada actual</label>
        <input type="text" name="morada" id="morada"/>

        <label for="email">NIF</label>
        <input type="email" name="nif" id="nif"/>
    </div>
    
    <div class="tab">
            <label for="carta">Número da carta de condução</label>
            <input type="text" name="carta" id="carta"/>
    
            <label for="telefone">Número do telefone</label>
            <input type="tel" name="telefone" id="telefone"/>
        <label for="nacionalidade">Nacionalidade</label>
        <select name="nacionalidade">
            <option value="1">Angolana</option>
        </select><br><br>

        <label for="senha">Palavra passe</label>
        <input type="password" placeholder="palavrapasse" name="senha" /><br><br>
        
       
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
        if(!(/^[A-Z]/).test(y[0].value)){
            y[0].className += " invalido";
            valid = false;
        }
        if (valid) {
            document.getElementsByClassName("step")[contador].className += " fim";
        }
        return valid;
    }
</script>
</body>
</html>
