

// esto deberia ser trabajos-ficha y el de abajo trabajos-ficha-img.
// boton clientes, vuelve a home
$('li.trabajos').on('click',function() {
  window.location.href = '/';
});

 // showea o hidea la desc del trabajo
$('a#show').on('click', function() {
  $('div#desc').toggle();
  $(this).toggleClass('activa_desc');
});


/// Navegador de imagenes.

// añado el active al 1.



if( $('iframe').length ) {
  $('iframe').attr({id: 'media'});
  $iframe_url = $('div#video iframe').attr('src'); 
  // appendeo un objeto para luego decir que si existe
  // modifique la url al volver al video o al ir 
  // a una imagen estando inicialmente en el video:
  $('<p id="video_gal"></p>').appendTo('body');
  
   //.css({'pointer-events':'none'});
}


// if( $('img#media').length ) {
//   $('nav#gallery-nav').show();//.css({'pointer-events':'painted'});
// }



if ($gallery > 1 ) {

  $('ul#gallery li a.img-1').parent().addClass('active').siblings().addClass('noactive');

  $('ul#gallery li a')
    .each(function() {
      var curElem = $(this);
      curElem.attr("data", curElem.attr('href')).removeAttr('href')
  });


  function naveGador() {
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

  function classLiGalleryUl() {
    $('ul#gallery li a').parent().siblings().removeClass('active').addClass('noactive'); 
    $li_a_sig.parent().removeClass('noactive').addClass('active');
  };  

  function replaceImg() { 
    $cambia = "<img id='media' alt='"+$img_alt+"' src='"+$img_src+".jpg'/>";
    $cambia_x = $('#media');
    $cambia_x.replaceWith($cambia);
      // $('#media').fadeOut(10, function(){
      //     var $cambia = "<img id='media' alt='"+$img_alt+"' src='"+$img_src+".jpg'/>";
      //     var $cambia_x = $('#media');
      //     $cambia_x.replaceWith($cambia);
      //     $cambia_x.fadeIn("slow");
      // })

  };  

  function replaceFigureImg(){
    $('div#video').replaceWith("<figure><img id='media' alt='"+$img_alt+"' src='"+$img_src+".jpg'/></figure>"); 
  };

  function replaceDivVideo(){
    $("figure").replaceWith("<div id='video'><iframe id='media' src='"+$iframe_url+"' /></div>");
  };


//alert('next: '+$img_next + 'bef: '+$img_bef);

// $(document).ready(function() {
//    var $referrer =  window.location.pathname;
//    alert($referrer);
// });



$(document).keyup(function (event) {
    event.preventDefault;
    
    naveGador();
    
    if (event.keyCode == 37) {
      if ($img_bef == 0) {
      } else {
        $("#img_bfr").click();
      }
    }

    if (event.keyCode == 39) {
      if ($img_bef == $gallery_limit) {
      } else {
        $("#img_nxt").click();
      }
    }


// if ($img_bef == 0) {
    
//     } else {
//       if (event.keyCode == 37) {
//         $("#img_bfr").click();
//       }
//     }

//     if ($img_bef == $gallery_limit) {
//     } else {
//       if (event.keyCode == 39) {
//         $("#img_nxt").click();
//       }
//     }


    //alert('asdasdaa'+$img_bef)

  });


} // endif
