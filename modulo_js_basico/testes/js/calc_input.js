function somar() {
    var campo1 = parseInt(document.getElementById("campo1").value);
    var campo2 = parseInt(document.getElementById("campo2").value);

    if (verificarVazio(campo1, campo2) == true) {
        document.getElementById("resultado").innerHTML = "<p>O(s) campo(s) está(ão) vazio(s), preencha-o(s)!</p>";
    } else {
        var soma = campo1+campo2;
        document.getElementById("resultado").innerHTML = "<p>O resultado é: "+soma+"</p>";
    }    
}

function subtrair() {
    var campo1 = parseInt(document.getElementById("campo1").value);
    var campo2 = parseInt(document.getElementById("campo2").value);

    if (verificarVazio(campo1, campo2) == true) {
        document.getElementById("resultado").innerHTML = "<p>O(s) campo(s) está(ão) vazio(s), preencha-o(s)!</p>";
    } else {
        var sub = campo1-campo2;
        document.getElementById("resultado").innerHTML = "<p>O resultado é: "+sub+"</p>";
    }    
}

function multiplicar() {
    var campo1 = parseInt(document.getElementById("campo1").value);
    var campo2 = parseInt(document.getElementById("campo2").value);

    if (verificarVazio(campo1, campo2) == true) {
        document.getElementById("resultado").innerHTML = "<p>O(s) campo(s) está(ão) vazio(s), preencha-o(s)!</p>";
    } else {
        var mult = campo1*campo2;
        document.getElementById("resultado").innerHTML = "<p>O resultado é: "+mult+"</p>";
    }
}

function divisao() {
    var campo1 = parseInt(document.getElementById("campo1").value);
    var campo2 = parseInt(document.getElementById("campo2").value);

    if (verificarVazio(campo1, campo2) == true || verificaZero(campo2) == true) {
        document.getElementById("resultado").innerHTML = "<p>O(s) campo(s) está(ão) vazio(s) ou tem zero(s)!</p>";
    } else {
        var div = campo1/campo2;
        document.getElementById("resultado").innerHTML = "<p>O resultado é: "+div+"</p>";
    }   
}

function verificarVazio(n1, n2) {    
    if (Boolean (n1) == false || Boolean (n2) == false) {
        return true;
    } else {
        return false;
    } 
}

function verificaZero(z) {
    if (z === 0) {
        return true;
    } else {
        return false;
    } 
}