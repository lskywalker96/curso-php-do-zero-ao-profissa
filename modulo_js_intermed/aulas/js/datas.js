var dt = new Date();
var dia_semana = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];

document.getElementById("logs").innerHTML += "<p>Hora atual: "+dt.getHours();
document.getElementById("logs").innerHTML += "<p>Minutos atual: "+dt.getMinutes();
document.getElementById("logs").innerHTML += "<p>Segundos atual: "+dt.getSeconds();
document.getElementById("logs").innerHTML += "<p>Dia atual: "+dt.getDate();
document.getElementById("logs").innerHTML += "<p>Dia da semana: "+dia_semana[dt.getDay()];
document.getElementById("logs").innerHTML += "<p>Ano atual: "+dt.getFullYear();
document.getElementById("logs").innerHTML += "<p>Data atual (formato brasileiro): "+dt.getDate()+"/"+(dt.getMonth()+1)+"/"+dt.getFullYear();

/*Há mais comandos de manipulção de datas

*As datas em Js são resultados de conversões em milissegundos.
*Para obter qualquer data em ms:
----->Date.parse("MM dd, AAAA");

*No comando new Date() eu posso guardar em variáves qualquer data passando os valores nos parâmetros da função       new Date().
-obs: no parâmetro só aceita valores em milissegundos, por isso foi utilizada uma função de conversão
-obs: se nenhum valor for passado no parâmetro, ele retorna a data atual
----->var x = new Date(Date.parse("MM dd, AAAA"));

*Eu posso adicionar horas, minutos, segundos, dias, meses, etc., à minha data (seja atual ou pré-definida)
----->x.setDate(getDate()+valor); 
----->x.setHours(getDate()+valor);
-obs: em setDate, o valor é em dias. Exemplo adicionar mais 60 dias, 40 dias, 100 dias; e em setHour é em horas.

*/