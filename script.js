// Adicionar e diminuir quantidade de itens no carrinho em v
function updateCarrinho(v){
    let qnt = document.getElementById("qntCarrinho");
    q = Number(qnt.value)
    a = Number(v)
    if (q + v > 0){
        qnt.value = q + v
    }
}

// Coloca a navbar antes do do div de classe conteudo
function navbarPraCima(){
    let navs = document.getElementsByTagName('nav');
    let bodies = document.getElementsByTagName('body');
    var contents = document.getElementsByClassName('conteudo');

    bodies[0].insertBefore(navs[0], contents[0])
}

// Fazer coisas quando a página termianr de carregar
window.addEventListener('load', (event) => {
    navbarPraCima()
});
