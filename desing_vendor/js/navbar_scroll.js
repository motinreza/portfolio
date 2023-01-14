$(window).on('scroll',function(){
    if ($(window).scrollTop()){
        $('#navbar').addClass('container_dark')
    }
    else{
        $('#navbar').removeClass('container_dark')
    }
});
// reload page in state
document.addEventListener("DOMContentLoaded", function(event) {
    var scrollpos = localStorage.getItem('scrollpos');
    if (scrollpos) window.scrollTo(0, scrollpos);
});

window.onbeforeunload = function(e) {
    localStorage.setItem('scrollpos', window.scrollY);
};