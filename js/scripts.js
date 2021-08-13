/* Return the visibility of the top menu in wide screens, if it is hidden */
function topMenuReturn() {
    $(window).on("resize", function(){
        var windowWidth = $(window).width();
        if((windowWidth > 1000)) {
            $(".top-menu  ul").show();
        }
        else{
            $(".top-menu  ul").hide();
        }
    });
}

$(document).ready(function(){
    topMenuReturn(); 
});