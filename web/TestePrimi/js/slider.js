var slideAtual = 1;
var slider = $('.slide')
var sliderCount = slider.children().length;
var lancamentoAtual = 1
var lancamento = $('.item_container');
var lancamentoCount = lancamento.children().length-4;

$(function(){
	
	setInterval(function(){
		if(slideAtual < 4){
        slider.animate({
            marginLeft: '-=100%'
        },800)
        slideAtual++
    }else if(slideAtual === sliderCount){
        slider.animate({
            marginLeft:'0px'
        },800)
        slideAtual = 1;
		console.log(slideAtual);
    }
		
	},2500);
	
})

$('.arrow_right').click(function(){

    
    if(slideAtual < 4){
        slider.animate({
            marginLeft: '-=100%'
        },800)
        slideAtual++
    }else if(slideAtual === sliderCount){
        slider.animate({
            marginLeft:'0px'
        },800)
        slideAtual = 1;
		console.log(slideAtual);
    }
});

$('.arrow_left').click(function(){
   
    if(slideAtual > 1){
        slider.animate({
            marginLeft: '+=100%'
        },800)
        slideAtual--
    }else if(slideAtual == 1){
        slider.animate({
            marginLeft:'-300%'
        },800)
        slideAtual = 4;
    }
});

$('.arrow_right_is').click(function(){

    if(lancamentoAtual < lancamentoCount){
        lancamento.animate({
            marginLeft: '-=355px'
        },800)
        lancamentoAtual++
    }
});

$('.arrow_left_is').click(function(){
   
    if(lancamentoAtual > 1){
        lancamento.animate({
            marginLeft: '+=355px'
        },800)
        lancamentoAtual--
    }
});