/**
 * Подвал прижатый к внизу экрану
 */
$(function() {

    $("body").css({padding:0,margin:0});
    var f = function() {
        $(".ndra-container").css({position:"relative"});
        var h1 = $("body").height();
        var h2 = $(window).height();
        var d = h2 - h1;
        var h = $(".ndra-container").height() + d;
        var ruler = $("<div>").appendTo(".ndra-container");
        h = Math.max(ruler.position().top,h);
        ruler.remove();
        $(".ndra-container").height(h);
    };
    setInterval(f,1000);
    $(window).resize(f);
    f();

});
/**
 * Меню фикстровать повверх контента при скролле
 */
$(function($) {
    $(window).scroll(function(){
        if($(this).scrollTop()>0){
            $('.header').addClass('fixed');
        }
        else if ($(this).scrollTop()<0){
            $('.header').removeClass('fixed');
        }
    });
});

function main_right() {
    var item_first = $('#carousel-one').find('.carousel-item');
    item_first.removeClass('carousel-item').css('display', 'none');
    var item_second = $('#carousel-three').find('.carousel-item');
    item_second.removeClass('carousel-item').css('display', 'none');
    $('.carousel-main').on('slide.bs.carousel', function () {
      var active_slide = $('#carousel-main').find('.main-item.active');
      if(active_slide.hasClass('second')) {
        var item = $('#carousel-three').find('.three-inner');
        item.addClass('carousel-item').css('display', '');
      }
      else if (active_slide.hasClass('third')) {
        var item = $('#carousel-one').find('.first-inner');
        item.addClass('carousel-item').css('display', '');
      }
    })
}
function main_left() {
    var item_first = $('#carousel-one').find('.carousel-item');
    item_first.removeClass('carousel-item').css('display', 'none');
    var item_second = $('#carousel-three').find('.carousel-item');
    item_second.removeClass('carousel-item').css('display', 'none');
    $('.carousel-main').on('slide.bs.carousel', function () {
      var active_slide = $('#carousel-main').find('.main-item.active');
      if(active_slide.hasClass('second')) {
        var item = $('#carousel-one').find('.first-inner');
        item.addClass('carousel-item').css('display', '');
      }
      else if (active_slide.hasClass('first')) {
        var item = $('#carousel-three').find('.three-inner');
        item.addClass('carousel-item').css('display', '');
      }
    })
}
