function ativaContador(e) {

    $('.contador').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 8000,
            easing: 'swing',
            step: function(now) {

                $(this).text(Math.ceil(now));
            },
            complete: function() {
                $(this).stop(true, true)
            },
        });

    });
}

$(window).scroll(function(e) {

    var alturaBody = $(window).height();
    var distanciaElemento = $('.contador').offset().top;
    var posicaoScroll = $(this).scrollTop();
    var alturaElemento = $('.contador').outerHeight();

    if (posicaoScroll > (distanciaElemento + alturaElemento - alturaBody)) {
        ativaContador();
    }

});