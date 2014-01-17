jQuery(document).ready(function($) {

    selectnav('menu-main-menu', {label: 'Menu', indent: '-'});

    
    $('.instagramslider').bxSlider({
        slideWidth: 150,
        minSlides: 5,
        maxSlides: 5,
        moveSlides: 1,
        slideMargin: 20,
        pager: false,
        auto: true,
        controls: false,
    });
    

    $('.headerslider').bxSlider({
        auto: true,
        autoHover: true,
        pager: false,
        auto: true,
        controls: false,
    });


    $('.exercise-steps').bxSlider({
        auto: true,
        autoHover: true,
        pagerCustom: '#exercise-steps-pager'
    });

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