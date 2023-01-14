// Slug create code
function string_to_slug(text){

    $("#slug").val(text.toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,''));

}
