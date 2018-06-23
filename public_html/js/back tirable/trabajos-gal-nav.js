var  $img_actual = '';
var  $img_dame = '';
var  $img_orig = '';
var  $img_bef = '';
var  $img_next ='';
var  $img_alt = '';


$('ul#gallery li a.img-1')
  .parent().addClass('active')
    .siblings().addClass('noactive');
    

 // lo que tiene que ocurrir es que al apretar siguiente estando en iframe tiene que reemplazar por img, y al estar en img pero volviendo al 1, tiene que reemplazar por el iframe

if( $('iframe').length ) {
  $(this).attr({id: 'media'});
  $img_iframe_alt = ''; // pasar el title de trabajo o algo.
  $iframe_url = $('div#video iframe').attr('src'); 
  // appendeo un objeto para luego decir que si existe
  // modifique la url al volver al video o al ir 
  // a una imagen estando inicialmente en el video:
  $('<p id="video_gal"></p>').appendTo('body');
}




if( $('#video_gal').length ) {
  $('ul#gallery li a')
    .each(function() {
      var curElem = $(this);
      curElem.attr("data", curElem.attr('href')).removeAttr('href')
    })
    .on('click', function(e) {
      e.preventDefault;
      $('#media').attr({src: $(this).attr('data')});
      $(this).parent().removeClass('noactive').addClass('active').siblings().removeClass('active').addClass('noactive');
      //$(this).parent();
      $("figure").replaceWith("<div id='video'><iframe id='media' src='"+iframe_url+"' /></div>");

    })
    .not('.img-1')
    .on('click', function() {
    var img_src = $(this).attr("data");
    var img_alt = $(this).attr("title");
      $('div#video').replaceWith("<figure><img id='media' alt='"+img_alt+"' src='"+img_src+"'/></figure>");
    });



} else {


// cambia imágenes
$('ul#gallery li a')
  .each(function() {
    var curElem = $(this);
    curElem.attr("data", curElem.attr('href')).removeAttr('href')
  })

  .on('click', function(e) {
    e.preventDefault;
    $('#media').attr({src: $(this).attr('data')});
    $(this).parent().siblings().removeClass('active').addClass('noactive'); 
    $(this).parent().removeClass('noactive').addClass('active'); 

    var img_src = $(this).attr("data");
    var img_alt = $(this).attr("title");
 

    $('#media').fadeOut(10, function(){
        var $cambia = "<img id='media' alt='"+img_alt+"' src='"+img_src+"'/>";
        var $cambia_x = $('#media');
        $cambia_x.replaceWith($cambia);
        $cambia_x.fadeIn("slow");
    })
    
  });



}





function naveGador(){
  $img_actual = $('ul#gallery li.active a img').attr('rel');
  $img_dame = $('ul#gallery li.active a').attr("data");
  $img_orig = $img_dame.substr(0, $img_dame.length-5);   
  $img_bef = parseFloat($img_actual) - parseInt(1);
  $img_next = parseFloat($img_actual) + parseInt(1);
  $img_alt = $('img#media').attr("alt");
};  

naveGador();

if ($img_bef == 0) {
  $('#img_bfr').addClass('como_hideado');
} else {
  $('#img_bfr').removeClass('como_hideado')
}

var $no_son = $('ul#gallery li:first-child a, ul#gallery li:last-child a');
$('ul#gallery li a').not($no_son).on('click', function () {
  $('#img_bfr').removeClass('como_hideado');
  $('#img_nxt').removeClass('como_hideado_2');
});
$('ul#gallery li:first-child a').on('click', function () {
  $('#img_bfr').addClass('como_hideado');
  $('#img_nxt').removeClass('como_hideado_2');
});
$('ul#gallery li:last-child a').on('click', function () {
  $('#img_nxt').addClass('como_hideado_2');
  $('#img_bfr').removeClass('como_hideado');
});

var $gallery_limit =  parseInt($gallery) - parseInt(1);
$('nav#gallery-nav a').css({'height':$('#media').height()})


function classLiGalleryUl(){
  $('ul#gallery li a').parent().siblings().removeClass('active').addClass('noactive'); 
  $li_a_sig.parent().removeClass('noactive').addClass('active');
};  

function replaceImg(){
  $cambia = "<img id='media' alt='"+$img_alt+"' src='"+$img_src+".jpg'/>";
  $cambia_x = $('#media');
  $cambia_x.replaceWith($cambia);
};  

function replaceFigureImg(){
  $('div#video').replaceWith("<figure><img id='media' src='"+$img_src+".jpg'/></figure>"); // alt='"+img_iframe_alt+"' 
};

function replaceDivVideo(){
  $("figure").replaceWith("<div id='video'><iframe id='media' src='"+$iframe_url+"' /></div>");
};


$(function (){

  $('#img_nxt')
    .on('click', function(e) {
      e.preventDefault;
      naveGador();
      $img_src = $img_orig + $img_next;
      $li_a_sig = $('.img-' + $img_next);
      classLiGalleryUl();
      if ( $img_next == $gallery ) {
        $(this).addClass('como_hideado_2');
      }
      if ( $img_next == 2 ) {
        $('#img_bfr').removeClass('como_hideado');
        if( $('#video_gal').length ) {
          replaceFigureImg(); 
        } else {
          replaceImg();
        }
      } else {
        replaceImg();
      }
  })
  ;


  $('#img_bfr')
    .on('click', function(e) {
      e.preventDefault;
      naveGador();
      $img_src = $img_orig + $img_bef;
      $li_a_sig = $('.img-' + $img_bef);
      classLiGalleryUl();
      if ( $img_bef == $gallery_limit) {
        $('#img_nxt').removeClass('como_hideado_2');
      }
      if ( $img_bef == 1) {
        $(this).addClass('como_hideado');

        if( $('#video_gal').length ) {
          replaceDivVideo();
        } else {
          replaceImg();
        }
      } else {
        replaceImg();
      }
    });
}); 


$(document).ready(function(){});
  $('body').keyup(function (event) {
    event.preventDefault;
    naveGador();
    if ($img_bef == 0) {
    } else {
      if (event.keyCode == 37) {
        $("#img_bfr").click();
      }
    }
    if ($img_bef == $gallery_limit) {
    } else {
    if (event.keyCode == 39) {
      $("#img_nxt").click();
      }
    }
  });