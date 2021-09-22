
var particlesBg = document.querySelector('#particles-bg');

if($('body').find('#particles-bg') && particlesBg){
    particlesJS.load('particles-bg', '/local/templates/.default/js/particles.json', function() {});
}


$('.slider-scroll-button').on('click', function (e) {
    e.preventDefault();
    document.querySelector( $(this).attr('href')).scrollIntoView({ behavior: 'smooth' });
});


// На главной разворачиваем секции категорий
function changeViewSection(section) {
    //
    $('.section-' + section + ' .btn.btn-primary.section-btn-view').on('click', function () {

        if($('.section-' + section + '-view').hasClass('section-' + section + '-view')){
            $('.section-' + section).removeClass('section-' + section + '-view');
            $(this).css({
                display: 'block'
            })
        }else {
            $('.section-' + section + '').addClass('section-' + section + '-view');
            $(this).css({
                display: 'none'
            })
        }

    });
}

changeViewSection('equipment');
changeViewSection('components');


$('.tab-content .tab-pane').each(function (i, item) {
    if(i === 0 && !$(item).hasClass('active')){
        $(item).addClass('active');
    }
});