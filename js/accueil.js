var connectdiv = $('#connectdiv');



$(function () {
    $('.onclick').click(function () {
        connectdiv.toggle()

    });
});

/*connectdiv.bind( "clickoutside", function(event){
$(this).hide();
    console.log('f');
});*/
$(document).ready(function(){
    $("#connectdiv").bind( "clickoutside", function(){
    $(this).hide();
});
    
});
//bouton pour faire disparaitre la div

$(function () {
    $('.close').click(function () {
        connectdiv.hide();
            
    });
});



/*$(function () {
    $('.cl').click(function () {
       console.log('h');

    });
});
*/
