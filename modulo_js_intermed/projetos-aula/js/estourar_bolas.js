function addBola() {
    var bola = document.createElement("div");
    bola.setAttribute("class", "bola");

    var x, y, r, g, b;
    x = Math.floor(Math.random()*500);
    y = Math.floor(Math.random()*400);
    r = Math.floor(Math.random()*255);
    g = Math.floor(Math.random()*255);
    b = Math.floor(Math.random()*255); 


    bola.setAttribute("style", "left:"+x+"px; top:"+y+"px; background-color: rgb("+r+", "+g+", "+b+");");
    //bola.setAttribute("background-color", "rgb ("+r+", "+g+", "+b+");");
    bola.setAttribute("onclick", "estourar(this)");

    document.body.appendChild(bola);
}

function estourar(obj) {
    document.body.removeChild(obj);
}

function iniciar() {
    setInterval(addBola, 1000);
}