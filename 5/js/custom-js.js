$(document).ready(function () {
    var stt;
    var kt;
    duyet();
    function duyet() {
        $('.tabcontent').each(function () {
            if ($(this).is(':visible')) {
                stt = $(this).attr('stt');
                $('.tablet-mobile').eq(stt).addClass('tablet-mobile-active');
                $('.tablet-mobile').eq(stt).find('.fa').addClass('fa-sort-up').removeClass('fa-sort-down');
                $('.responsive-tabs-list li').eq(stt).addClass('list-item-active');
            } else {
                var hide = $(this).attr('stt');
                $('.tablet-mobile').eq(hide).removeClass('tablet-mobile-active');
                $('.tablet-mobile').eq(hide).find('.fa').addClass('fa-sort-down').removeClass('fa-sort-up');
                $('.responsive-tabs-list li').eq(hide).removeClass('list-item-active');
            }
        });

        return stt;
    }
    $('.responsive-tabs-list li').click(function () {
        $('.tabcontent').removeClass('tabcontent-active').addClass('tabcontent-none');
        stt = $(this).attr('stt');
        $('.tabcontent').eq(stt).removeClass('tabcontent-none').addClass('tabcontent-active');
        duyet();
    });

    $('.tablet-mobile').click(function () {
        $('.tabcontent').eq(stt).removeClass('tabcontent-active').addClass('tabcontent-none');
        if (stt == $(this).attr('stt')) {
            if (kt == 0) {
                kt = 1;
                $('.tabcontent').eq(stt).removeClass('tabcontent-none').addClass('tabcontent-active');
            } else if (kt == 1) {
                kt = 0;
                $('.tabcontent').eq(stt).removeClass('tabcontent-active').addClass('tabcontent-none');
            }
        } else {
            
            stt = $(this).attr('stt');
            $('.tabcontent').eq(stt).removeClass('tabcontent-none').addClass('tabcontent-active');
            kt = 1;
        }
        duyet();
    });
});