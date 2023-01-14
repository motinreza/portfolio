$(window).on('scroll',function(){
    if ($(window).scrollTop()){
        $('.navBar_scroll').addClass('container_dark_sub')
    }
    else{
        $('.navBar_scroll').removeClass('container_dark_sub')
    }
});
