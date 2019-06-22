<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDC-RH</title>
    <link rel="stylesheet" href="personalizacao/css/estilo.css">
</head>
<body>
<!-- Inicio-->
<header id="inicio">
    <menu id="menu">
        <div class="logotipo">
            <img src="personalizacao/img/logotipo.png" alt="LOGO" class="logo">
        </div>
        <ul>
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#oferta">Oferta de Trabalho</a></li>
            <li><a href="#sobre">Sobre</a></li>
        </ul>
        <div class="outro-menu">
            <li class="verde"><a id="entrar" >Entrar</a></li>
            <li class="azul"><a id="entrar" >Criar Conta</a></li>
        </div>
    </menu>
    <section class="descricao">
        <div class="titulo">
            <h1 class="titulo-1">PDC-RH</h1>
            <span class="slogan">Encontre o seu espaço.</span>
        </div>
    </section>
</header>

<!-- Oferta de Trabalho-->
<div id="oferta">
    <div class="conteudo-oferta">
        <div class="titulo">
            <h4>Oferta de Trabalho</h4>
            <hr>
        </div>

    </div>
</div>

<footer>
    <!-- Contacto -->
    <div id="sobre">

    </div>
</footer>

<div id="Modal" class="modal">
    <div class="modal-conteudo">
        <span class="fechar">&times;</span>
        <h3>Login</h3>
        <input type="text" name="telefone" placeholder="numero de telefone">
        <input type="password" name="senha" placeholder="Senha">
        <a href="#" class="botao">Entrar</a>
    </div>
</div>


<script >
    //mudar estilo do menu quando o eixo Y for maios ou igual a 200
    window.onscroll = function(event){
        var menu = document.getElementById("menu");
        if (window.scrollY >= 200){
            //menu.style.backgroundColor = "#fff";
            menu.classList = "corMenu";
        }else {
            menu.classList = "";
        }
    }

    //modal
    var modal = document.getElementById("Modal");
    var btn = document.getElementById("entrar");
    var fechar = document.getElementsByClassName("fechar")[0];

    btn.onclick = function(){
        modal.style.display = "block";
    }

    fechar.onclick = function(){
        modal.style.display = "none";
    }
    //////////////////////////
</script>
</body>
</html>