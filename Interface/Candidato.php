<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/estilo.css">
</head>
<body>
<form id="formulario" action="ok.php" method="post">
    <div class="tab">
        <label for="nome">Nome Completo</label>
        <input type="text" name="nome" id="nome" ><br>

        <label for="data">Data de Nascimento</label>
        <input type="date" name="data" id="data" ><br>
        <label for="data">Data de Nascimento</label>
        <select style="width: 50px">
            <option>1</option>
            <option>2</option>
        </select>
        <label for="data">Data de Nascimento</label>
        <select style="width: 50px">
            <option>1</option>
            <option>2</option>
        </select>

    </div>

    <div class="tab">
        <label for="pai">Nome do Pai</label>
        <input type="text" name="pai" id="pai">

        <label for="mae">Nome da Mãe</label>
        <input type="text" name="mae" id="mae"><br>

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email">
    </div>
    
    <div class="tab">
        <label for="pai">Nome do Pai</label>
        <input type="text" name="pai" id="pai">

        <label for="mae">Nome da Mãe</label>
        <input type="text" name="mae" id="mae"><br>

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email">
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
    <script type="text/javascript" src="JavaScript/step.js"></script>
</body>
</html>


