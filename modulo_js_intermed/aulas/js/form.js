function mudouOpcao(objeto) {
    document.getElementById("logs").innerHTML = "<p>Selecionou: "+objeto.value+"</p>";
}

function focou() {
    document.getElementById("logs").innerHTML = "<p>Focou!</p>";
}

function desfocou() {
    document.getElementById("logs").innerHTML = "<p>Desfocou!</p>";
}