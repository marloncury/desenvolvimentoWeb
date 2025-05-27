function mudarFundo(){
    const valor = parseInt(Math.random() * 10)      
    if(valor % 3 == 0){
       // document.bgColor = 'lightgreen'
       $(document).attr('bgColor','lightgray')
    }
    else{
       // document.bgColor = 'lightgray'
       $(document).attr('bgColor','lightgray')
    }
}

// funcao que da uma pausa e espera o DOM carregar, pra depois executar
//$(document).read(function(){
//$(function()){

$(()=>{




    //$('#btTexto').on('click',function(){ identificando com i ID
    $('button:contains("Texto")').on('click',function(){ //pegando a tag button que contem o texto "Texto"

        $('#texto').text('Modificando o texto!')
    });


    $('#reset').click(()=>{ //usando arrow function
        location.reload()  // configurações iniciais antes de modificar meu DOM
    });

    $('button:eq(2)').click(() =>{
        $('#imagem').attr('src', 'imagens/arquitetura.png')
    }

    );

    $('#imagem').dblclick(function(){
        $(this).attr('src', '') //this nao pode ser usado com arrow function
    });


    $('#bt-card').click(function(){
        $('#este').css('display','contents')
    });

    $('#este').dblclick(function(){
        $(this).css('display', 'none')
    });
    

    $('#reset').css('background-color', 'lightcoral')

    $('#botoes>button:eq(3)').click(function(){ //selecionando o quarto botao do pai botoes 
        $('#tabela').attr({
            'bgColor' : 'goldenrod',
            'border' : '10',
            'width' : '70%'    
        })
    });

    $('input[type="text"]').focus(function(){
        $(this).css('background-color', 'bisque')
    });

    $('input[type="text"]').blur(function(){
        $(this).css('background-color', '')
    });

    $('button:last').click(function(){
        $('#lista > li:eq(1)').after('<li>Terceiro</li> ') //pegando o segundo elemento da minha lista
        // $('#lista').prepend('<li>Teste</li>') adicionando li no inicio da lista
        //$('#lista').append('<li>Teste</li>') adicionando li no final da lista
    });

    $('#tabela').mouseover(function(){
        $(this).removeClass()
        $(this).addClass('table')
    });

    $('#tabela').mouseout(function(){
        $(this).removeClass()
        $(this).addClass('table2')
    })


})