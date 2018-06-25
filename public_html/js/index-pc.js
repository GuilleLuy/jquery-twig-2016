// Window size
if (document.body && document.body.offsetWidth) {
  var winH = document.body.offsetHeight;
  var winW = document.body.offsetWidth;
}
if (window.innerHeight) {
  var winH = window.innerHeight;
  var winW = window.innerWidth;
}

// Funciones scrolleras:

$(document).ready(function() { 

  $('.link-'+$trab_12).attr('href', $img_trab_url+'hd/'+$trab_12+'.jpg');
  $('.link-'+$trab_11).attr('href', $img_trab_url+'hd/'+$trab_11+'.jpg');
  $('.link-'+$trab_10).attr('href', $img_trab_url+'hd/'+$trab_10+'.jpg');
  $('.link-'+$trab_9).attr('href', $img_trab_url+'hd/'+$trab_9+'.jpg');
  $('.link-'+$trab_8).attr('href', $img_trab_url+'hd/'+$trab_8+'.jpg');
  $('.link-'+$trab_7).attr('href', $img_trab_url+'hd/'+$trab_7+'.jpg');
  $('.link-'+$trab_6).attr('href', $img_trab_url+'hd/'+$trab_6+'.jpg');
  $('.link-'+$trab_5).attr('href', $img_trab_url+'hd/'+$trab_5+'.jpg');
  $('.link-'+$trab_4).attr('href', $img_trab_url+'hd/'+$trab_4+'.jpg');
  $('.link-'+$trab_3).attr('href', $img_trab_url+'hd/'+$trab_3+'.jpg');
  $('.link-'+$trab_2).attr('href', $img_trab_url+'hd/'+$trab_2+'.jpg');
  $('.link-'+$trab_1).attr('href', $img_trab_url+'hd/'+$trab_1+'.jpg');

  // videos hd full
  // LANG:
  var $texto_nav = "Your browser don't support this file / Tu navegador no soporta este formato de vídeos";

  // pronto-express
  var $trab_10_video1 = 'spot';
  $('article.'+$trab_10+'')
  .append('<video controls poster="'+$vid_path+$trab_10+'-'+$trab_10_video1+'.jpg" class="video '+$trab_10+'" id="'+$trab_10+'-'+$trab_10_video1+'" onclick="this.paused ? this.play() : this.pause();"><source src="'+$vid_path+$trab_10+'-'+$trab_10_video1+'.mp4" type="video/mp4">'+ $texto_nav +'</video>');

  // canapina
  var $trab_8_video1 = 'face-1'
  $('article.'+$trab_8+'')
  .append('<video controls poster="'+$vid_path+$trab_8+'-'+$trab_8_video1+'.jpg" class="video '+$trab_8+'" id="'+$trab_8+'-'+$trab_8_video1+'" onclick="this.paused ? this.play() : this.pause();"><source src="'+$vid_path+$trab_8+'-'+$trab_8_video1+'.mp4" type="video/mp4">'+ $texto_nav +'</video>');
  $('.video')
    .prop("volume", 0.05)
  ;

  $('body')
    .keyup(function(e){
      if(e.keyCode == 9) {
        PuntoFn();
        if($('body').hasClass( "body_servs" )) {
          e.preventDefault();
          OpenTrabs();
        } else {
          e.preventDefault();
          OpenServs();
          $btn_trab.unbind( "mouseover" );
        }
      }
    });
  }); // $(document).ready(function()
  

  $('<nav id="sidebar"></nav>').appendTo('#footer');

  var $sidebar = $('#sidebar').css({'top':''}).hide();
  $('<a class="close_nav" id="close_sidebar"></a>').appendTo($sidebar);
  
  $('article')
    .one('mouseover', function () {
        var $id = $(this).attr('id');
        var $letra = $id.replace("work_", "");
        var $siguiente =  parseInt($letra) - 1;
        var $ir_siguiente = '#work_' + $siguiente;

 

        if($ir_siguiente == '#work_11' ) {
          $('<a class="icon-' + $trab_12 +'" title=' + $trab_12 +'><span>' + $trab_12 +'</span></a>').appendTo($sidebar);
        }
        if($ir_siguiente == '#work_10' ) {
          $('<a class="icon-' + $trab_11 +'" title=' + $trab_11 +'><span>' + $trab_11 +'</span></a>').appendTo($sidebar);
        }
        if($ir_siguiente == '#work_9' ) {
          $('<a class="icon-' + $trab_10 +'" title=' + $trab_10 +'><span>' + $trab_10 +'</span></a>').appendTo($sidebar);
        }
        if($ir_siguiente == '#work_8' ) {
          $('<a class="icon-' + $trab_9 +'" title=' + $trab_9 +'><span>' + $trab_9 +'</span></a>').appendTo($sidebar);
        }
        if($ir_siguiente == '#work_7' ) {
          $('<a class="icon-' + $trab_8 +'" title=' + $trab_8 +'><span>' + $trab_8 +'</span></a>').appendTo($sidebar);
        }
        if($ir_siguiente == '#work_6' ) {
          $('<a class="icon-' + $trab_7 +'" title=' + $trab_7 +'><span>' + $trab_7 +'</span></a>').appendTo($sidebar);
        }
        if($ir_siguiente == '#work_5' ) {
          $('<a class="icon-' + $trab_6 +'" title=' + $trab_6 +'><span>' + $trab_6 +'</span></a>').appendTo($sidebar);
        }
        if($ir_siguiente == '#work_4' ) {
          $('<a class="icon-' + $trab_5 +'" title=' + $trab_5 +'><span>' + $trab_5 +'</span></a>').appendTo($sidebar);
        }
        if($ir_siguiente == '#work_3' ) {
          $('<a class="icon-' + $trab_4 +'" title=' + $trab_4 +'><span>' + $trab_4 +'</span></a>').appendTo($sidebar);
        }
        if($ir_siguiente == '#work_2' ) {
          $('<a class="icon-' + $trab_3 +'" title=' + $trab_3 +'><span>' + $trab_3 +'</span></a>').appendTo($sidebar);
        }
        if($ir_siguiente == '#work_1' ) {
          $('<a class="icon-' + $trab_2 +'" title=' + $trab_2 +'><span>' + $trab_2 +'</span></a>').appendTo($sidebar);
        }
        if($ir_siguiente == '#work_0' ) {
          $('<a class="icon-' + $trab_1 +'" title=' + $trab_1 +'><span>' + $trab_1 +'</span></a>').appendTo($sidebar);
        }


        // var $article = $(this).attr('id');
    
        // if($id == $article ) {
        //  $('<a class="icon-' + )) +'" title=' + $trab_+(parseInt(1)) +'><span>' + $trab_+(parseInt(1)) +'</span></a>').appendTo($sidebar);
        // }

        // arrayzar

    //  $trabajos_array = [ $trab_12, $trab_11, $trab_10, $trab_9, $trab_8, $trab_7, $trab_6, $trab_5, $trab_4, $trab_3, $trab_2, $trab_1 ];
    //    $.each( $trabajos_array, function( i, val ) {

    //      if($ir_siguiente == val ) {
    //        $('<a class="icon-' + val +'"><span>' + val +'</span></a>').appendTo($sidebar);
    //      }
    //    });
    //  $( "<p>" + val + "</p>" ).appendTo('.' + val )//( "Mine is " + val + "." );


        




        $('a.icon-'+$trab_12).on('click', function () {
            var x = $('#work_12').offset().top;
            $('html,body').animate({scrollTop: x + 100 }, 600);
        });
        $('a.icon-'+$trab_11).on('click', function () {
            var x = $('#work_11').offset().top;
            $('html,body').animate({scrollTop: x + 100 }, 600);
        });
        $('a.icon-'+$trab_10).on('click', function () {
            var x = $('#work_10').offset().top;
            $('html,body').animate({scrollTop: x + 100 }, 600);
        });
        $('a.icon-'+$trab_9).on('click', function () {
            var x = $('#work_9').offset().top;
            $('html,body').animate({scrollTop: x + 100 }, 600);
        });
        $('a.icon-'+$trab_8).on('click', function () {
            var x = $('#work_8').offset().top;
            $('html,body').animate({scrollTop: x + 100 }, 600);
        });
        $('a.icon-'+$trab_7).on('click', function () {
            var x = $('#work_7').offset().top;
            $('html,body').animate({scrollTop: x + 100 }, 600);
        });
        $('a.icon-'+$trab_6).on('click', function () {
            var x = $('#work_6').offset().top;
            $('html,body').animate({scrollTop: x + 100 }, 600);
        });
        $('a.icon-'+$trab_5).on('click', function () {
            var x = $('#work_5').offset().top;
            $('html,body').animate({scrollTop: x + 100 }, 600);
        });
        $('a.icon-'+$trab_4).on('click', function () {
            var x = $('#work_4').offset().top;
            $('html,body').animate({scrollTop: x + 100 }, 600);
        });
        $('a.icon-'+$trab_3).on('click', function () {
            var x = $('#work_3').offset().top;
            $('html,body').animate({scrollTop: x + 100 }, 600);
        });
        $('a.icon-'+$trab_2).on('click', function () {
            var x = $('#work_2').offset().top;
            $('html,body').animate({scrollTop: x + 100 }, 600);
        });
        $('a.icon-'+$trab_1).on('click', function () {
            var x = $('#work_1').offset().top;
            $('html,body').animate({scrollTop: x + 100 }, 600);
        });
    })

    

    .on('mouseover', function () {
      $(this)
        .css({'z-index':'1'})
        .find('h2').css({'opacity':'1'});
        var $id = $(this).attr('id');
        var $letra = $id.replace("work_", "");
        var $siguiente =  parseInt($letra) - 1;
        var $ir_siguiente = '#work_' + $siguiente;
        var $anterior =  parseInt($letra) + 1;
        var $ir_anterior = '#work_' + $anterior;
      ; // $(this)
      $to_next.attr('href', $ir_siguiente);
      $to_before.attr('href', $ir_anterior); 

        if($ir_anterior == $trab_no_mas) {
          $('.to_before').addClass('como_hideado');
            $sidebar.show();
        }else{
          $('.to_before').removeClass('como_hideado');
        };

        if($ir_siguiente == '#work_0') {
          $('.to_next').addClass('como_hideado');
        }else{
          $('.to_next').removeClass('como_hideado');
        };

        // videos
        if($ir_siguiente == '#work_7') {
          $('#canapina-face-1').get(0).play();
        }else{
          $('#canapina-face-1').get(0).pause();
        };
        if($ir_siguiente == '#work_9') {
          $('#pronto-express-spot').get(0).play();
        }else{
          $('#pronto-express-spot').get(0).pause();
        };

        

        // botones
        $('.to_next, .to_before, .to_top')
          .css({'pointer-events':'painted'})
          .on('click touchstart', function() {
            $(this).css({'pointer-events':'none'});  
          })
          .on('mouseover', function() {
            $(this).css({'pointer-events':'painted'});
        });
      })
    
    .on('mouseout', function () {
      $(this).css({'z-index':'0'})
      $(this).find('h2').css({'opacity':'0'}) 
      if(winW >= 900) {
         $('.video').get(0).pause();
         $('.video').get(1).pause();
      }
    })
    .on('mouseleave', function () {
      $(this).css({'z-index':'1'})
    })

  ; // $(article)


  // botones que terminan de paintear la pointera
  $('.to_next, .to_before, .to_top')
    .css({'pointer-events':'painted'})
    .on('click touchstart', function() {
      $(this).parent().parent().css({'pointer-events':'none'});  
    })
    .on('mouseover', function() {
      $(this).parent().parent().css({'pointer-events':'painted'});
  });
      

  $servicios_links
    .on('mouseover', function() {
      $(this).addClass('zoom');
    })
    .on('mouseleave', function () {
      $(this).removeClass('zoom');
    })
  ;

// lang
  var $close_sidebar = $('#close_sidebar');
  $close_sidebar.on('click', function () {
    $sidebar.appendTo($box_menu);
    $open_sidebar.show();
  });
  $open_sidebar.on('click', function () {
    $open_sidebar.hide();
    $sidebar.appendTo('#footer');
  });

  $close_menu
    .on('click', function() {
      $open_sidebar.appendTo($box_menu);
  });
  $open_menu
    .on('click', function() {
      $open_sidebar.appendTo($footer_nav);
  });

 $document.scroll(function() {
    if($('body').hasClass( "body_servs" )) {
    } else {
      if ($document.scrollTop() >= 100) { 
         $('.video').get(0).pause();
         $('.video').get(1).pause();
      } // no elsea
      else { }
    }
  }); // document.scroll

  $close_text
    .on('click', function() {
      $('article h2').hide();
      $open_text.show();
      $footer_nav.css({'min-width':'340px'});
  });

  $open_text
    .on('click', function() {
      $('article h2').show();
     $(this).hide();
     $footer_nav.css({'min-width':'305px'});
  });

window.onbeforeunload = function () {
   window.scrollTo(0, 0);
   $('html, body').animate({ scrollTop: $(document).css({'top':'0'})}, 1000);
}

$(window).ready(function(){
  $('html, body').animate({ scrollTop: $(document).css({'top':'0'})}, 1000);
  
  // esta sola deberia mudarse a index
  window.history.pushState({}, document.title, "/" + "");
});
