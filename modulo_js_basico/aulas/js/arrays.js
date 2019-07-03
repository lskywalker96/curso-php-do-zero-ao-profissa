var lista = ["relógio", "macarrão", "bagunça", 22];

//var op = parseInt(prompt("Insira um número: "));

//alert("Item: "+lista[op]+"Quantidade de itens: "+lista.length);

//document.getElementById("lista").innerHTML = lista.join(", ");
document.getElementById("exibir").innerHTML = lista.toString();

/*
outros comandos para manipulação de arrays:


-- array.indexOf("Item do array");
-retorna a posição do item no array (0, 1, 9, etc.), e caso não exista o item, o valor do retorno é -1.

--array.pop();
-remove o último item do array.

--array.shift();
-remove o primeiro item do array.

--array.push("novo item");
-adiciona um novo item no array.

*/