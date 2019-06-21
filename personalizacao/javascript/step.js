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
    //y = x[contador].getElementsByTagName("input");
    y = x[contador].getElementsByTagName("input");
    for (i = 0; i < y.length; i++) {
        if (y[i].value == "") {
            y[i].className += " invalido";
            valid = false;
        }
    }
    if (valid) {
        document.getElementsByClassName("step")[contador].className += " fim";
    }
    return valid;
}
function indicador(n) {
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" actual", "");
    }
    x[n].className += " actual";
}