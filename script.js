// Adicionar e diminuir quantidade de itens no carrinho em v
function updateCarrinho(v){
    let qnt = document.getElementById("qntCarrinho");
    q = Number(qnt.value)
    a = Number(v)
    if (q + v > 0){
        qnt.value = q + v
    }
}

