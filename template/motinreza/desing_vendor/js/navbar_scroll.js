$(window).on('scroll',function(){
    if ($(window).scrollTop()){
        $('#navbar').addClass('container_dark')
    }
    else{
        $('#navbar').removeClass('container_dark')
    }
});

