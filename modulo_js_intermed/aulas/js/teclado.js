//onkeyup or onkeydown
function apertouTecla(event){
    document.getElementById("logs").innerHTML = "<p>APERTOU A TECLA: "+event.keyCode+"</p>";
}

//onkeypress
function segurouTecla(event) {
    document.getElementById("logs").innerHTML = "<p>SEGUROU A TECLA: "+event.keyCode+"</p>";
}
//key_brd.onkeydown = apertouTecla(e);