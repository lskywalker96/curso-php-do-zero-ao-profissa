var nome = prompt("Qual o seu nome?");

if (nome=="" || nome==null){
    document.writeln("<p>Seja bem-vindo!</p>");
}
else{
    document.writeln("<p>Seja bem-vindo "+nome+"! </p>");
}
document.writeln("<p>O JavaScript escreveu o conteúdo desta página</p>");
document.writeln("<p>E isso não está no HTML!</p>");