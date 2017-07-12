
/*

$(".onclick").on('click', function () {
    connectdiv.attr('class', 'show');
   
});
window.onclick = function () {
    connectdiv.attr('class', 'hidden');
    console.log('bb');
});
/*
window.onclick = function (event) {
    if (event.target == connectdiv) {
              connectdiv.css("display", "none");
        console.log('ffffb');}
    }*/

/*window.onclick = function(event) {
    if ($(event.target) !== connectdiv) {
        if (connectdiv.attr('class', 'show') == true){
            connectdiv.attr('class', 'hidden');
            console.log('hh');
        }
    }
};
$(document).ready(function(){
    $('window').click(function(){
        if($(this) == $('#connectdiv'))
            {
                alert('touche pas');
            }
        else if ($(this)!== $('#connectdiv'))
            {
             $('.show').classList.remove('#connectdiv');   
            }
    })
})

/*window.onclick = function(event) {
  if (event.target == connectdiv) {
      connectdiv.style.display = "none";
    
  }
}
$(document).ready(function(){
    $('#contactlink').click(function(){
        if ($('#connectdiv').is(':hidden')){

    connectdiv.attr('class', 'show');
        }
        else{
           connectdiv.attr('class', 'show');
           
        }
    });
});

function closeForm(){
    $('#messageSent').show('slow');
    setTimeout('$("#messageSent").hide(); $("#connectdiv").slideUp("slow")', 2000);
}*/

/*
   $(function () {
   $(".close").click();
   
});

$('.onclick').click(function () {
    connectdiv.fadeIn();}


$('#cache').click(function () {

    connectdiv.attr('class', 'hidden');
});
function cac() {
    document.getElementById("connectdiv").style.display = "none";
}

<li><a onclick="window.open('inscription.php','fenetre','with=600px','height=300px');">inscription</a></li>

$(function () {
    $('.cl').click(function () {
        window.open('inscription.php', 'f');
    });
});*/
/*$(function () {
    $('.onclick').click(function () {
        connectdiv.show()

    });
});



connectdiv.bind( "clickoutside", function(event){
$(this).hide();
    console.log('f');
});
*/
// Hide a modal dialog when someone clicks outside of it.
$("#connectdiv").bind( "clickoutside", function(){
    $(this).hide();
});

//fonction qui fait apparaitre et disparaitre la div

/*$(function () {
    $('.onclick').click(function () {
        connectdiv.toggle()

    });
});
*/
/*
window.onclick = function (event) {
    
    if ($(event.currentTarget) ==connectdiv  {
        console.log('th');
    } else {
        console.log(connectdiv);
        console.log(this);
        console.log('g');
        
    }
};   

*/
$(document).ready(function(){
var carrousel = $('#carrousel'),
 img =$('#img'),
$imgderniere=img.length-1,
    i=0;
$imgencours=img.eq(i);
    img.css('display','none');
    $imgencours('display','block');
    $imgderniere
/*<section class="banner">
    <div id="carrousel">
        <ul>
            <li><img src="image/pretty-woman-1509956_1280.jpg" /></li>
            <li><img src="image/architecture-1867772_1280.jpg" /></li>
          
            <li><img src="image/urban-city-1245777_1280.jpg" /></li>
            
            <li><img src="image/sunrise-1634197_1280.jpg" /></li>
            
        </ul>
    </div>

    </section>
    



})