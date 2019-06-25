<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDC-RH</title>
    <link rel="stylesheet" type="text/css" href="../../personalizacao/css/estilo_candidato.css">
</head> 
<body>
<form id="formulario" action="ok.php" method="post">
    <div class="tab">
        <h3>Habilitação Literaria</h3>
        <label for="instituicao_hab">Instituicao</label>
        <input type="text"  name="instituicao_hab"/>

        <label for="area">Área</label>
        <select name="area">
            <option value="1">Infra estrutura de redes</option>
            <option value="2">Programacao</option>
        </select>

        <label for="nivel">Grau Academico</label>
        <select name="nivel">
            <option value="Bacharel">Bacharel</option>
            <option value="Técnico Médio">Técnico Médio</option>
            <option value="Licenciado">Licenciado</option>
        </select>

        <label for="dataTermino">Data de Término</label>
        <input type="date"   name="dataTermino"/><br /><br />

    </div>


    <div class="tab">

        <h3>Experiencia Profissional</h3>
        <label for="instituicao_exp">Instituicao</label>
        <input type="text" name="instituicao_exp"/>
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
        <input type="text" name="instituicao_exp"/>
        <br /><br />

        <label for="descricao_Qualificacoes">Descrição</label>
        <input type="text" name="descricao_Qualificacoes"/>
        <br /><br />

        <label for="ano_Obtencao">Ano de obtencao</label>
        <input type="date"   name="ano_Obtencao"/><br /><br />

    </div>

    <div class="tab">

        <h3>Publicações</h3>
        <label for="titulo">Título da publicação</label>
        <input type="text" name="titulo"/>
        <br /><br />

        <label for="data_publicacao">Data de publicação</label>
        <input type="date"   name="data_publicacao"/><br /><br />

    </div>

    <div class="tab">

        <h3>Línguas</h3>
        <label for="idioma">Descrição</label>
        <select name="idioma">
            <option value="Portugues">Portugues</option>
            <option value="Ingles">Boa</option>
            <option value="Frances">Média</option>
        </select>
        <br /><br />
        <label for="nivelFala">Nivel de Fala</label>
        <select name="nivelFala">
            <option value="Fluente">Fluente</option>
            <option value="Boa">Boa</option>
            <option value="Media">Média</option>
        </select>
        <label for="nivelEscrita">Nivel de Escrita</label>
        <select name="nivelEscrita">
            <option value="Fluente">Fluente</option>
            <option value="Boa">Boa</option>
            <option value="Media">Média</option>
        </select>

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
        <span class="step"></span>
    </div>
</form>
<script type="text/javascript" src="../../personalizacao/javascript/step.js"></script>
</body>
</html>