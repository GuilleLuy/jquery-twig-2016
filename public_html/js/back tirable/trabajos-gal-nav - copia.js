var $img_actual = $('ul#gallery li.active a img').attr('rel');
var $img_bef = parseFloat($img_actual) - parseInt(1);
if ($img_bef == 0) {
  $('#img_bfr').addClass('como_hideado')
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


$(function (){
//Aquí puedo hacer cualquier cosa con el DOM
}); 


$('#img_nxt')
  .on('click', function(e) {
    e.preventDefault;
    var $img_actual = $('ul#gallery li.active a img').attr('rel');
    var $img_dame = $('ul#gallery li.active a').attr("data");
    var $img_orig = $img_dame.substr(0, $img_dame.length-5);
    var $img_bef = parseFloat($img_actual) - parseInt(1);
    var $img_next = parseFloat($img_actual) + parseInt(1);
    var $img_src = $img_orig + $img_next;
    var $img_alt = $('#media').attr("alt");
    var $li_a_sig = $('.img-' + $img_next);

    $('ul#gallery li a').parent().siblings().removeClass('active').addClass('noactive'); 
    $li_a_sig.parent().removeClass('noactive').addClass('active');

    $('#media').fadeOut(10, function(){
      var $cambia = "<img id='media' alt='"+$img_alt+"' src='"+$img_src+".jpg'/>";
      var $cambia_x = $('#media');
      $cambia_x.replaceWith($cambia);
      $cambia_x.fadeIn("slow");
    });

    if ( $img_next == $gallery ) {
      $(this).addClass('como_hideado_2');
    }

    if ( $img_next == 2 ) {
      $('#img_bfr').removeClass('como_hideado');
    }

    

  });



$('#img_bfr')
  .on('click', function(e) {
    e.preventDefault;
    var $img_actual = $('ul#gallery li.active a img').attr('rel');
    var $img_dame = $('ul#gallery li.active a').attr("data");
    var $img_orig = $img_dame.substr(0, $img_dame.length-5);
    var $img_bef = parseFloat($img_actual) - parseInt(1);
    var $img_next = parseFloat($img_actual) + parseInt(1);
    var $img_src = $img_orig + $img_bef;
    var $img_alt = $('#media').attr("alt");
    var $li_a_sig = $('.img-' + $img_bef);

    $('ul#gallery li a').parent().siblings().removeClass('active').addClass('noactive'); 
    $li_a_sig.parent().removeClass('noactive').addClass('active');

    $('#media').fadeOut(10, function(){
      var $cambia = "<img id='media' alt='"+$img_alt+"' src='"+$img_src+".jpg'/>";
      var $cambia_x = $('#media');
      $cambia_x.replaceWith($cambia);
      $cambia_x.fadeIn("slow");
    });

    if ( $img_bef == 1) {
      $(this).addClass('como_hideado');
    }
    if ( $img_bef == $gallery_limit) {
      $('#img_nxt').removeClass('como_hideado_2');
    }
  });


$(document).ready(function(){
  $('body').keyup(function (event) {
    var $img_actual = $('ul#gallery li.active a img').attr('rel');
    var $img_dame = $('ul#gallery li.active a').attr("data");
    var $img_orig = $img_dame.substr(0, $img_dame.length-5);
    var $img_bef = parseFloat($img_actual) - parseInt(1);
    var $img_next = parseFloat($img_actual) + parseInt(1);  
    var $img_src = $img_orig + $img_bef;
    var $img_alt = $('#media').attr("alt");
    var $li_a_sig = $('.img-' + $img_bef);
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
});
