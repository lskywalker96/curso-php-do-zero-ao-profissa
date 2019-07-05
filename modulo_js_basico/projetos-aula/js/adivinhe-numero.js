function verificar() {
    var n1 = document.getElementById("n1").innerHTML;    
    var n2 = document.getElementById("n2").value;    
    if (n1 == n2){        
        alert("Você acertou!");
    } else{
        alert("Você errou!");
    }
    resetar();
}

function resetar() {
    document.getElementById("n2").value = "";
    var r = Math.floor(Math.random()*10);
    document.getElementById("n1").innerHTML = r;

    //if (document.getElementById("n1").style.visibility == "visible"){
        document.getElementById("n1").style.visibility = "hidden";
    //}
}


function revelar(){
    //if (document.getElementById("n1").style.visibility == "hidden"){
        document.getElementById("n1").style.visibility = "visible";
    //}
}