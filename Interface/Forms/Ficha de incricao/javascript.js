










var formu=document.getElementsByTagName('input');
function validar(){

var nome=document.getElementById('nome').value;

 if ((nome==" ")||((nome.isNaN)==true)||(!(/^[a-z]|[A-Z]/).test(name.value))) {

 	alert("Insira Um nome Valido (Sem numeros ou outros caracteres)");

 	return false;
 }



}