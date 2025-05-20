function mudarFundo(){
    const valor = parseInt(Math.random() * 10)      
    if(valor % 3 == 0){
        document.bgColor = 'lightgreen'
    }
    else{
        document.bgColor = 'lightgray'
    }
}

function trocar(){
    const par = document.getElementById('texto')
    par.innerHTML = 'Modificando o texto'
}

function resetar(){
    window.location.reload()
    // ou  somente location.reload()
}

function carregar(){
    const bt = document.getElementById("reset")
    //bt.bgColor = 'lightcoral'
    // nao existe no html o atributo pra buttom, tem q usar o css
    bt.style.backgroundColor = 'lightcoral'
}

function carregarImagem(){
    const img = document.getElementById('imagem')
    img.src = 'imagens/arquitetura.png'
}

function desaparecerImagem(){
    const img = document.getElementById('imagem')
    img.src = ''
}

function ver(){
    const info = document.getElementById('este')
    info.style.display = 'contents'
}

function desaparecerTexto(){
    const desaparecer = document.getElementById('este')
    desaparecer.style.display = 'none'
}

function tabelar(){
    const tab = document.getElementById('tabela')
    tab.border = "5"
    tab.bgColor = "goldenrod"
    tab.width = "70%"
}


function destacar(){
    const campo = document.querySelector("input[type='text']")
    campo.style.backgroundColor = 'bisque'
}

function limpar(){
    const campo = document.querySelector("input[type='text']")
    campo.style.backgroundColor = ''
}

function estiloTabela(){
    var tab = document.getElementById('tabela')
    tab.className = 'table' // muda parametro class da tabela (nao soma classes)
}


function voltarTabela(){
    var tab = document.getElementById('tabela')
    tab.classList.remove('table') // remove classe 
    tab.classList.add('table2') // adiciona classes 
}

function manipular(){
    const lista = document.getElementById('lista')

    const novoItem = document.createElement('li')
    const novoTexto = document.createTextNode('consegui!!')

    novoItem.appendChild(novoTexto)

    lista.appendChild(novoItem)
}