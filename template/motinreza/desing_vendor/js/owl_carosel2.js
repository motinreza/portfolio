var owl = $('.owl-carousel');
owl.owlCarousel({
    nav:true,
    loop:true,
    margin:0,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        768:{
            items:2,
            nav:false
        },
        1100:{
            items:3,
            nav:true,
            loop:false
        }
    } 
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})




