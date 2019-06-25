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
<form id="formulario" action="ok.php" method="post">
    <div class="tab">
        <label for="nome">Nome Completo</label>
        <input type="text" name="nome" id="nome" ><br>
        <label for="nome"><label for="nome">Genero</label>
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

        
        <label for="nome"><label for="nome">Estado civil</label>
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

        <label for="pai">Morada actual</label>
        <input type="text" name="morada" id="morada">

        

    </div>

    <div class="tab">

        <label for="tipo">Tipo de funcionario</label>
        <input type="text" name="tipo" id="tipo">
        <label for="nif">NIF</label>
        <input type="text" name="nif" id="nif">
        <label for="pai">Nome do Pai</label>
        <input type="text" name="pai" id="pai">

        <label for="mae">Nome da Mãe</label>
        <input type="text" name="mae" id="mae"><br>

        
    </div>
    
    <div class="tab">
        <label for="filial">Filial</label>
        <select name="filial">
            <option></option>
            <option>Viana</option>
            <option>Luanda</option>
            <option>Cazenga</option>
            <option>Cacuaco</option>
        </select>
        <label for="promocao">Promocao</label>
        <select name="promocao">
            <option></option>
            <option>D.g</option>
            <option>Supervisor</option>
            <option>Administrador</option>
        </select>
        <label for="progressao">Promocao</label>
        <select name="progressao">
            <option></option>
            <option>D.g</option>
            <option>Supervisor</option>
            <option>Administrador</option>
        </select>
        <label for="categoria">Categoria</label>
        <input type="text" name="categoria" id="categoria">
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