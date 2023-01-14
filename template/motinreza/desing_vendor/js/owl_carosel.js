var owl = $('.carusel_one');
owl.owlCarousel({
    items:1,
    nav:true,
    loop:true,
    margin:0,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})