$('button#calcACEScore').click(function () {
    let aceScore = 0;

    $('input.answer-yes:checked').each(function () {
        aceScore += parseInt($(this).val());
    });

    $('section#scoreBox').css('visibility', 'visible');
    $('section#scoreBox #ACEScore').text(aceScore);
});
