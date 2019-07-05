function validar() {
    var valor = document.getElementById("numero").value;

    if(valor.length > 2){
        alert("Informe um número de 2 algarismos!");
        return false;
    }else{
        return true;
    }
}