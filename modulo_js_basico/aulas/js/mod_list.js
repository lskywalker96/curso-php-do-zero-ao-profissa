function adicionarItem() {
    /*Armazenando na variável 'item' o que foi digitado no input.
    item = "o que usuário digitou";*/
    var item = document.getElementById("item").value;
    
    /*Armazenando na variável 'lista_random' todo o conteúdo da lista.
    lista_random =  <ul id="lista_aleatoria">
                        <li>a</li>
                        <li>b</li>
                        <li>c</li>
                    </ul>;*/
    var lista_random = document.getElementById("lista_aleatoria").innerHTML;

    /*Fórmula para armazenar na variável 'lista_random' o código HTML de inserir item. 
    
    lista_random = lista_random + <li>item que o usuário digitou</li>;*/
    lista_random += "<li>"+item+"</li>";

    /*Insere o código que está armazenado na variável lista_random
    lista_random =  <ul id="lista_aleatoria">
                        <li>a</li>
                        <li>b</li>
                        <li>c</li>
                        lista_random = <li>item que o usuário digitou</li>
                    </ul>;*/
    document.getElementById("lista_aleatoria").innerHTML = lista_random;
}