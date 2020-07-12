$('button#calcACEScore').click(function () {
    let aceScore = 0;

    $('input.answer-yes:checked').each(function () {
        aceScore += parseInt($(this).val());
    });

    $('section#scoreBox').css('visibility', 'visible');
    $('section#scoreBox #ACEScore').text(aceScore);

    // From: https://stackoverflow.com/a/1891142/430062
    $("html, body").animate({ scrollTop: $(document).height() }, "slow");
});
