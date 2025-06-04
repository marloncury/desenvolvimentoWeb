var estoque = [];



$(()=>{

    let conteudo = {};

    $.getJSON('meuJson.json', function(data){
        conteudo = data
    })

    $('#btCarregar').click(function(){
        $.getJSON('meuJson.json',function(data){
            $('#area').text(JSON.stringify(data))
        })
    });

    $('#btInserir').click(function(){

        let codigo = $('#vCodigo').val();
        let nome = $('#vNome').val();
        let valor = $('#vValor').val();

        produto = { codigo, nome, valor}
        estoque.push(produto);

        $('#area').text(JSON.stringify(estoque))
    });

    $('#btConsultar').click(function(){
        let resultado = ""
        conteudo.produtos.forEach(produto => {
            resultado += `<p> $(produtos.nome) : $(produtos.preco) </p>`       
        });

        $('#area').html(resultado)
    })
})