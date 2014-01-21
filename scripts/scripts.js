jQuery(document).ready(function($) {

    selectnav('menu-main-menu', {label: 'Menu', indent: '-'});

    swapper();
    $(window).on('resize', swapper);

    getInstagram();

    $('.headerslider').show().bxSlider({
        auto: true,
        autoHover: true,
        pager: false,
        auto: true,
        controls: false,
        preloadImages: 'all'
    });

    $('.brands').bxSlider({
        auto: true,
        slideMargin: 100,
        slideWidth: 250,
        minSlides: 4,
        maxSlides: 4,
        moveSlides: 1,
        randomStart: true,
        autoHover: true,
        pager: false,
        controls: false,
        preloadImages: 'all'
    });

    $('.exercise-steps').bxSlider({
        auto: true,
        autoHover: true,
        pagerCustom: '#exercise-steps-pager'
    });

    $(".gallery a").addClass('fancybox').attr("rel","group");
    $('.fancybox').fancybox();

    $("iframe").each(function(){
        var ifr_source = $(this).attr('src');
        var wmode = "wmode=transparent";
        if(ifr_source.indexOf('?') != -1) $(this).attr('src',ifr_source+'&'+wmode);
        else $(this).attr('src',ifr_source+'?'+wmode);
    });

    $('.faqs dd').hide();
    $('.faqs dt').hover(function(){$(this).addClass('hover')},function(){$(this).removeClass('hover')}).click(function(){
      $(this).next().slideToggle('normal');
    });

    $('ul.tabs').each(function(){
    var $active, $content, $links = $(this).find('a');
    $active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
    $active.addClass('active');
    $content = $($active.attr('href'));

    $links.not($active).each(function () {
      $($(this).attr('href')).hide();
    });

    $(this).on('click', 'a', function(e){
      $active.removeClass('active');
      $content.hide();

      $active = $(this);
      $content = $($(this).attr('href'));

      $active.addClass('active');
      $content.show();

      e.preventDefault();
    });
    });

});

function swapper() {
    var windowsize =  jQuery(window).width();
    if(windowsize < 767) {
        jQuery('.container').insertBefore(jQuery('#sidebar'));
    } else {
        jQuery('#sidebar').insertBefore(jQuery('.container'));
    }
}

function getInstagram() {
        return jQuery.ajax({
            type: "GET",
            url: "https://api.instagram.com/v1/tags/tbtrevolution/media/recent?client_id=adc31ddd1d1b4c63b4c4b0dd1d2df901",
            dataType: "jsonp",
            success: function(response) {
                var limit = 14;
                var ul = jQuery('.instagramslider');
                var caption = '';
                var url = '';
                jQuery.each(response.data, function(i, item) {
                    if(i > limit) return false;
                    url = item.images.thumbnail.url;
                    if(caption === null){
                        caption = '';
                    } else {
                        caption = item.caption.text;
                    }
                    ul.append('<li><img src="' + url + '" alt="' + caption + '" title="' + caption + '" /></li>');
                });
            },
            complete: function(com) {
                jQuery('.instagramslider').bxSlider({
                    slideWidth: 150,
                    minSlides: 2,
                    maxSlides: 5,
                    moveSlides: 1,
                    slideMargin: 20,
                    pager: false,
                    auto: true,
                    controls: false,
                    pause: 2500
                });
            }
        });
    }