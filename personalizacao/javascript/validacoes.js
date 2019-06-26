function validarModalLogin(){
    var modal=document.getElementById("Modal");
    if(!(/[a-z]|[A-Z]/).test(modal[0].value)){
        modal.submit();
    }else{
        setTimeout(erro.style.display = "block",500);
    }
}