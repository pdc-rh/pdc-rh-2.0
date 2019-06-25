var contador = 0;
mostarFomulario(contador);

function mostarFomulario(n) {
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    if (n == 0) {
        document.getElementById("btnVoltar").style.display = "none";
    } else {
        document.getElementById("btnVoltar").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("btnContinuar").innerHTML = "Registar";
    } else {
        document.getElementById("btnContinuar").innerHTML = "Continuar";
    }
    indicador(n)
}


function indicador(n) {
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" actual", "");
    }
    x[n].className += " actual";
    a.characterData
}