<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDC-RH</title>
    <link rel="stylesheet" type="text/css" href="../../personalizacao/css/estilo_candidato.css">
</head>
<body>
    <form id="formulario" action="../../controlador/curriculumControlador.php" method="post">
    <div class="tab">
        <h3>Habilitação Literaria</h3>
        <label for="instituicao_hab">Instituicao</label>
        <input type="text"  name="instituicao"/>

        <label for="area">Área</label>
        <select name="area">
        <?php  
                $a1 = oci_connect("pdc-rh-v2", "123","localhost/XE"); 
                $consulta1 = oci_parse($a1, "select * from area"); 
                oci_execute($consulta1); 
                while ($row1 = oci_fetch_array($consulta1)){ 
                    echo"<option value='".$row1['ID']."'>".($row1['NOME'])."</option>"; 
                } 
                oci_free_statement($consulta1);
                oci_close($a1);
            ?>
        </select>

        <label for="nivel">Grau Academico</label>
        <select name="nivel">
            <option value="Técnico Base">Técnico Base</option>
            <option value="Técnico Médio">Técnico Médio</option>
            <option value="Bacharel">Bacharel</option>
            <option value="Licenciado">Licenciado</option>
            <option value="Mestre">Mestre</option>
            <option value="PhD">PhD</option>
        </select>

        <label for="dataTermino">Data de Término</label>
        <input type="date"   name="dataTermino"/><br /><br />

    </div>


    <div class="tab">

        <h3>Experiencia Profissional</h3>
        <label for="instituicao_exp">Instituicao</label>
        <input type="text" name="instituicaoExp"/>
        <br /><br />

        <label for="funcao">Função Desempenhada</label>
        <input type="text" name="funcao"/>
        <br /><br />

        <label for="dataTerminoVinculo">Data de Término</label>
        <input type="date"   name="dataTerminoVinculo"/><br /><br />


    </div>

    <div class="tab">

        <h3>Outras Qualificações</h3>
        <label for="instituicao_exp">Instituicao</label>
        <input type="text" name="instituicaoQual"/>
        <br /><br />

        <label for="descricao_Qualificacoes">Descrição</label>
        <input type="text" name="descricaoQualificacoes"/>
        <br /><br />

        <label for="ano_Obtencao">Ano de obtencao</label>
        <input type="number"   name="anoObtencao"/><br /><br />

    </div>

    <div class="tab">

        <h3>Publicações</h3>
        <label for="titulo">Título da publicação</label>
        <input type="text" name="titulo"/>
        <br /><br />

        <label for="data_publicacao">Data de publicação</label>
        <input type="date"   name="dataPublicacao"/><br /><br />

    </div>

    <div class="tab">

        <h3>Línguas (1)</h3>
        <label for="idioma">Descrição</label>
        <select name="idioma1">
            <option value="Portugues">Portugues</option>
            <option value="Ingles">Ingles</option>
            <option value="Frances">Frances</option>
            <option value="Mandarim ">Mandarim </option>
            <option value="Espanhol ">Espanhol </option>
            <option value="Russo ">Russo </option>
            <option value="Japones ">Japones </option>
            <option value="Coreano  ">Coreano </option>
            <option value="Alemão ">Alemão </option>
        </select>
        <br /><br />
        <label for="nivelFala">Nivel de Fala</label>
        <select name="nivelFala1">
            <option value="Fluente">Fluente</option>
            <option value="Boa">Boa</option>
            <option value="Media">Média</option>
        </select>
        <label for="nivelEscrita">Nivel de Escrita</label>
        <select name="nivelEscrita1">
            <option value="Fluente">Fluente</option>
            <option value="Boa">Boa</option>
            <option value="Media">Média</option>
        </select>
        
        <label for="nivelEscrita">Nivel de Leitura</label>
        <select name="nivelLeitura1">
            <option value="Fluente">Fluente</option>
            <option value="Boa">Boa</option>
            <option value="Media">Média</option>
        </select>

    </div>

        
    <div class="tab">

        <h3>Línguas (2)</h3>
        <label for="idioma">Descrição</label>
        <select name="idioma2">
            <option value="Portugues">Portugues</option>
            <option value="Ingles">Ingles</option>
            <option value="Frances">Frances</option>
            <option value="Mandarim ">Mandarim </option>
            <option value="Espanhol ">Espanhol </option>
            <option value="Russo ">Russo </option>
            <option value="Japones ">Japones </option>
            <option value="Coreano  ">Coreano </option>
            <option value="Alemão ">Alemão </option>
        </select>
        <br /><br />
        <label for="nivelFala">Nivel de Fala</label>
        <select name="nivelFala2">
            <option value="Fluente">Fluente</option>
            <option value="Boa">Boa</option>
            <option value="Media">Média</option>
        </select>
        <label for="nivelEscrita">Nivel de Escrita</label>
        <select name="nivelEscrita2">
            <option value="Fluente">Fluente</option>
            <option value="Boa">Boa</option>
            <option value="Media">Média</option>
        </select>
        
        <label for="nivelEscrita">Nivel de Leitura</label>
        <select name="nivelLeitura2">
            <option value="Fluente">Fluente</option>
            <option value="Boa">Boa</option>
            <option value="Media">Média</option>
        </select>

    </div>



    <div class="tab">

        <h3>Línguas (3)</h3>
        <label for="idioma">Descrição</label>
        <select name="idioma3">
            <option value="Portugues">Portugues</option>
            <option value="Ingles">Ingles</option>
            <option value="Frances">Frances</option>
            <option value="Mandarim ">Mandarim </option>
            <option value="Espanhol ">Espanhol </option>
            <option value="Russo ">Russo </option>
            <option value="Japones ">Japones </option>
            <option value="Coreano  ">Coreano </option>
            <option value="Alemão ">Alemão </option>
        </select>
        <br /><br />
        <label for="nivelFala">Nivel de Fala</label>
        <select name="nivelFala3">
            <option value="Fluente">Fluente</option>
            <option value="Boa">Boa</option>
            <option value="Media">Média</option>
        </select>
        <label for="nivelEscrita">Nivel de Escrita</label>
        <select name="nivelEscrita3">
            <option value="Fluente">Fluente</option>
            <option value="Boa">Boa</option>
            <option value="Media">Média</option>
        </select>
        
        <label for="nivelEscrita">Nivel de Leitura</label>
        <select name="nivelLeitura3">
            <option value="Fluente">Fluente</option>
            <option value="Boa">Boa</option>
            <option value="Media">Média</option>
        </select>

    </div>        
        
        
    <div style="overflow:auto;">
        <div style="float:left">
            <button type="button" onclick="cancelar()" style="background-color: red">Cancelar</button>
        </div>
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
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
    </div>
</form>
<script type="text/javascript" src="../../personalizacao/javascript/step.js"></script>
<script>
    function cancelar() {
        location.href = "http://localhost/pdc-rh-2.0/interface/candidato/";
    }

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