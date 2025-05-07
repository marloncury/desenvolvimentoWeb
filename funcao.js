/*
function adicao(a, b =1){
    return a + b;
}

//Arrow function
const mult = (a,b) => a*b;



document.write(adicao(2) + "<br>")
document.write(adicao(2,4)+ "<br>")
document.write(mult(2,4)+ "<br>")

// var - global o codigo inteiro
// let - restringe o escopo ao bloco que a variavel foi criada
//pesquisa o que é hoisting


const produtos = ['Almofada', 'Batedeira', 'Geladeira',
'Televisão']

produtos.forEach(function(nome, indice){
console.log(`${indice+1} - ${nome}`)
})

console.log(" ---- for each com arow function")

produtos.forEach(nome => console.log(nome))

const exibir = produto => document.write(produto + " ")
produtos.forEach(exibir)
*/

const nums = [1, 2, 3, 4, 5]

let resultado = nums.map(function(e){
    return e * 4
})

console.log(resultado)