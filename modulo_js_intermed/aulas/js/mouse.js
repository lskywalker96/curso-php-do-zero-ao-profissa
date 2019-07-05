var btn = document.querySelector('button');

function apertarBotao(){
    document.getElementById("logs").innerHTML = "<p>APERTOU BOTÃO!</p>";
}

function soltarBotao() {
    document.getElementById("logs").innerHTML = "<p>SOLTOU BOTÃO!</p>";
}

function passarPorCima() {
    document.getElementById("logs").innerHTML = "<p>PASSOU POR CIMA DO BOTÃO!</p>";
}

function passarPorFora() {
    document.getElementById("logs").innerHTML = "<p>SAIU DO BOTÃO!</p>";
}

function moverMouse() {
    document.getElementById("logs").innerHTML = "<p>MOVEU O MOUSE NO BOTÃO!</p>";
}

function clicar() {
    document.getElementById("logs").innerHTML = "<p>CLICOU NO BOTÃO!</p>";
}

function botaoDireito() {
    document.getElementById("logs").innerHTML = "<p>BOTÃO DIREITO!</p>";
    return false;
}

btn.onmousedown = apertarBotao;
btn.onmouseup = soltarBotao;
btn.onmouseover = passarPorCima;
btn.onmouseout = passarPorFora;
btn.onmousemove = moverMouse;
btn.onclick = clicar;
btn.oncontextmenu = botaoDireito;