if (document.readyState == "loading"){
    document.addEventListener("DOMContentLoaded", ready)
} else{
    ready()
}

function ready(){
    const remover = document.getElementsByClassName("botao-remover")
    for (var i = 0; i < remover.length; i++){
        remover[i].addEventListener("click", function(event){
            event.target.parentElement.parentElement.remove()
            update()
        })
    }

    const add = document.getElementsByClassName("adicionar")
    for (var i = 0; i < add.length; i++){
        add[i].addEventListener("click", adicionaritem)
    }

    const valorinput = document.getElementsByClassName("quant-input")
    for (var i = 0; i < valorinput.length; i++){
        valorinput[i].addEventListener("change", update)
    }

}

function adicionaritem(event){
    const bot = event.target
    const itenscarrinho = document.getElementsByClassName("itenscarrinho")
    const produto = bot.parentElement.parentElement
    const nome = produto.querySelector(".nome h4").innerText
    const preco = itenscarrinho[0].getElementsByClassName("preco")[0].innerText
    console.log(preco)

    let novoprod = document.createElement("tr")
    novoprod.classList.add("itenscarrinho")

    novoprod.innerHTML = 
        '<td>'
            '<section>'
                '<h4>Cesta de Presente </h4>'
            '</section>'
        '</td>'
        '<td><span class="preco">R$ 200,00</span></td>'
        '<td>'
            '<div class ="qty">'
                '<td>'
                    '<input type = "number" value = "1" min = "0" class = "quant-input">'
                '</td>'
            '</div>'
        '</td>'
        '<td>R$ 300,00</td>'
        '<td>'
            '<button class = "botao-remover">REMOVER</button>'
        '</td>'
        '<br>'
        '<br>'

    const tabbod = document.querySelector(".table tbody")
    tabbod.append(novoprod)

}
function update(){
    let total = 0
    const itenscarrinho = document.getElementsByClassName("itenscarrinho")
    for (var i = 0; i < itenscarrinho.length; i++){
        const preco = itenscarrinho[i].getElementsByClassName("preco")[0].innerText.replace("R$","").replace(",",".")
        const quantidade = itenscarrinho[i].getElementsByClassName("quant-input")[0].value

        total = total + (preco * quantidade)
    }

    total = total.toFixed(2)
    total = total.replace(".", ",")
    document.querySelector(".text-total span").innerText= "R$" + total
}
