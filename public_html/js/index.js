  var $document = $(document),
    $body_home = $("body"),
    $trabajos = $('#works'),
    $servicios = $('#services'),
    $servicios_texto = $('#texto_init'),
    $servicios_links = $('#servs_links'),
    $servicios_los_links  = $('#servs_links div#links'),
    $btn_serv = $('li.servicios'),
    $btn_trab = $('li.trabajos'),
    $btn_works = $('li.portfolio'),
    $punto = $('#punto'),
    $menu = $('nav#menu ul'),
    $rotate = $('li.rotate'), 
    $scroll = $('li.scroll'), 
    $title = $('#h1-title'),
    $footer = $('footer'),
    $footer_nav = $('#footer_nav'),
    $to_next = $('.to_next'),
    $to_before = $('.to_before').addClass('como_hideado'),
    $to_top = $('.to_top').addClass('como_hideado'),
    $btn_cel = $('#btn_cel'),
    $header_home = $('#header_home'),
    $link_web = $('.link_web'),
    $link_3d = $('.link_3d'),
    $link_vid = $('.link_vid'),
    $link_red = $('.link_red'),
    $link_impr = $('.link_impr'),
    $link_todos = $('.link_todos'),
    $lugar_todos = $('.link_3d, .link_vid, .link_red, .link_impr'),
    $pst = $('<span class="che" id="pst">pst..</span> <span class="che" id="aca">< '+ $aca +'</span> <span class="che" id="apalalala">!</span>'),
    $start_stage = $("<div id='pres-orange'></div><div id='pres-black'></div>"),
    $pres_black = $('#home-pres div#pres-black'),
    $open_menu = $('#open-menu').hide(),
    $titulo_loco = '<span class="h1_1">Guill<span>ermo</span></span><span class="h1_2">Luy</span><span class="h1_3">'+ $title_diseno +' &amp;</span><span class="h1_4">'+ $title_progra +'</span></h1>'
  ;

  $start_stage.prependTo('#home-pres');
  $footer_nav.append('<div id="hidden-menu"></div>');
  $box_menu = $('#hidden-menu').hide();

  $('<em class="close_text"></em>').prependTo('article h2');
  $('<a class="close_nav" id="close-menu"></a>').appendTo($footer_nav);
  $('<a class="open_sidebar"><span>Menu trabajos</span></a>').appendTo($footer_nav);
  $('<a class="open_text">Tt</a>').appendTo($footer_nav);

  var $close_text = $('.close_text');
  var $close_menu = $('#close-menu');
  var $open_text = $('.open_text').hide();
  var $open_sidebar = $('.open_sidebar').hide();
  var $flags = $('.flags');
  var $mail = $('.mail');
  var $messenger = $('.messenger');
  var $skype = $('.skype');

  function ocultaMenu() {
    $btn_serv.appendTo($box_menu);
    $btn_works.appendTo($box_menu);
    $to_before.appendTo($box_menu);
    $to_next.appendTo($box_menu);
    $to_top.appendTo($box_menu);
    $close_menu.appendTo($box_menu);
    $open_sidebar.appendTo($box_menu);
    $open_text.appendTo($box_menu);
    $flags.appendTo($box_menu);
    $mail.appendTo($box_menu);
    $messenger.appendTo($box_menu);
    $skype.appendTo($box_menu);
    $footer_nav.addClass('hided');
  }

  function muestraMenu() {
    $btn_serv.appendTo($menu);
    $btn_works.appendTo($menu);
    $to_before.appendTo($footer_nav);
    $to_next.appendTo($footer_nav);
    $to_top.appendTo($footer_nav);
    $close_menu.appendTo($footer_nav);
    $open_sidebar.appendTo($footer_nav);
    $open_text.appendTo($footer_nav);
    $flags.appendTo($menu);
    $mail.appendTo($menu);
    $messenger.appendTo($menu);
    $skype.appendTo($menu);
    $footer_nav.removeClass('hided');
  }

  $close_text.on('click', function() {
      $('article h2').hide();
      $open_text.show();
      $footer_nav.css({'min-width':'265px'});
  });
  $open_text.on('click', function() {
      $('article h2').show();
     $(this).hide();
     $footer_nav.css({'min-width':'220px'});
  });

  $close_menu.on('click', function() {
      ocultaMenu();
      $open_menu.show();
  });
  $open_menu.on('click', function() {
      muestraMenu();
      $(this).hide();
  });

  $('article')
    .on('mouseover', function () {
      $(this).find('h2').css({'pointer-events':'painted'})
    })
    .on('mouseout', function () {
      $(this).find('h2').css({'pointer-events':'none'})
    })
  ;
  
  $title.html($titulo_loco);
  $pst.appendTo($header_home);

function shinealo($donde) {
  $donde.addClass('shine').css({'float':'none', 'clear':'none'});
  function explode(){
    $donde.removeClass('shine').css({'float':'left', 'clear':'both'});
  }
  setTimeout(explode, 2000);
  window.history.pushState({}, document.title, "/" + "");
}
$link_todos.on('click touchstart', function(){shinealo($lugar_todos);});
$link_web.on('click touchstart', function(){shinealo($('#dis_web a'));});
$link_3d.on('click touchstart', function(){shinealo($('#dis_3d *'));});
$link_red.on('click touchstart', function(){shinealo($('#dis_red a'));});
$link_vid.on('click touchstart', function(){shinealo($('#dis_vid a'));});
$link_impr.on('click touchstart', function(){shinealo($('#dis_impr a'));});

$("a").on('click touchstart', function(event) {
  if (this.hash !== "") {
    event.preventDefault();
    var hash = this.hash;
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 800, function(){
      window.location.hash = hash;
      history.replaceState({}, '', '/');
    });
  } 
});

function PuntoFn() {
  $pst.hide();
  $servicios.hide();
  $punto.removeClass().addClass('neg');
  $('#home-pres, #menu').css({'display':'block'});
  $body_home.css({'overflow-y':'visible'});
  $btn_serv.addClass('rotate');
  $btn_trab
    .addClass('scroll') 
    .on('touchstart mouseover', function() {
      trab_Scroll();
    });
  }

function OpenServs() {
  $('html, body').animate({ scrollTop: $(document).css({'top':'0'})}, 1000);
  $('body').addClass('body_servs');
  $trabajos.hide();
  $servicios.show();
  $pres_black.addClass('negro_100');
  $punto.removeClass('neg').addClass('quieto nar');
  var $title_position = $('#pres-orange').css("width");
  $title
    .addClass('h1_header').html($title_home)
    .css({'left':$title_position})
  ;
  $btn_serv.removeClass('rotate').addClass('quieto');
  $btn_trab
    .removeClass('scroll').addClass('quieto')

    .unbind('touchstart mouseover')
    .on('click', function() {
        OpenTrabs();
    });
  }

function OpenTrabs() {
  $('html, body').animate({ scrollTop: $(document).css({'top':'0'})}, 1000);
  $('body').removeClass('body_servs');
  $trabajos.show();
  $servicios.hide();
  $pres_black.removeClass('negro_100');
  $punto.removeClass('quieto nar').addClass('neg');
  $title
    .removeClass('h1_header').html($titulo_loco)
    .css({'left':'0'})
    ;
  $btn_serv.removeClass().addClass('servicios rotate');
  $btn_trab.
    removeClass().addClass('trabajos scroll')
    .unbind('click')
    .on('touchstart mouseover', function() {
        trab_Scroll();
    });
}

  // Funciones scrolleras:
  var trab_Scroll = function () {
    var x = $('#work_12').offset().top;
    $('html,body').animate({scrollTop: x + 100 }, 600);
  }

  var emp_Scroll = function () {
    var x = $('html,body').offset().top;
    $('html,body').animate({scrollTop: x + 100 }, 600);
  }

 $punto
  .addClass('rotate_point')
  .one('mouseover', function() {
    PuntoFn();
  });
    
  $btn_serv
    .on('click touchstart', function() {
      OpenServs();
    });


//TODO: json
var $trab_no_mas = '#work_13',
        $trab_13 = '', // nada aun
        $trab_12 = 'vialfe',
        $trab_11 = 'bounous',
        $trab_10 = 'pronto-express',
         $trab_9 = 'auto-v5',
         $trab_8 = 'canapina',
         $trab_7 = 'minfraestructura',
         $trab_6 = 'marcas',
         $trab_5 = 'folletos',
         $trab_4 = 'cyd-schaffer',
         $trab_3 = 'bodyski',
         $trab_2 = 'xava-boards',
         $trab_1 = 'carteles';
    

// Si es movil o pc
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) // isMobile = true;
 {
  $.getScript( "/js/index-mobil.js");

} else {
 $.getScript( "/js/index-pc.js");
}

$to_top
  .on('click touchstart', function () {
    $('body,html').animate({ scrollTop: $('body,html').position().top }, 500, function() {

    });  
});
var $topButtons = $('.flags, .mail, .messenger, .skype, .face, .link, #footer_nav');

$('#home-pres').onScreen({
  doIn: function() {
    $topButtons.css({'transform':'scale(0)'});
    $title.css({'transform':'scale(1)'});
  },
  doOut: function() {
    $topButtons.css({'transform':'scale(1)'});
    $title.css({'transform':'scale(0)', 'transform-origin':'0 0'});
  },
});


$document.scroll(function() {
  if($('body').hasClass( "body_servs" )) {
    if ($document.scrollTop() >= 100) { 
      $btn_trab.removeClass('quieto').addClass('scroll');
    } else {
      $btn_trab.removeClass('scroll').addClass('quieto');
    }
    if ($document.scrollTop() >= 250) { 
      $servicios_links.css({'bottom':'25vh','top':'inherit'}); 
    } else {
      $servicios_links.css({'top':'10vh'});
    }
  } else {
    if ($document.scrollTop() >= 100) { 
      $punto.addClass('quieto');
      $btn_trab.removeClass('scroll').addClass('quieto');
      $btn_serv.removeClass('rotate').addClass('quieto');
    }
    else {
      $punto.removeClass('quieto');
      $btn_trab.removeClass('quieto').addClass('scroll');
      $btn_serv.addClass('rotate').removeClass('quieto');
    }
    if ($document.scrollTop() >= 950) { 
      $to_top.removeClass('como_hideado');
    } else {
      $to_top.addClass('como_hideado');
    }
  }
});

window.onbeforeunload = function () {
  window.scrollTo(0, 0);
  $('html, body').animate({ scrollTop: $(document).css({'top':'0'})},10);
}

$(window).ready(function(){
    window.history.pushState({}, document.title, "/" + "");
});