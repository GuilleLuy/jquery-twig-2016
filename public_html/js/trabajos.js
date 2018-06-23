
var $document = $(document),
  $btn_home = $('li.trabajos'),
  $menu_lista = $('ol#menu-lista'),
  $menu_lista_li = $('ol#menu-lista li'),
  $menu_lista_li_strong = $('ol#menu-lista li strong'),
  $trabajos_lista = $('#trabajos-lista'),
  $trabajos_lista_li = $('#trabajos-lista li')
;

$(document).on('ready',function() { 
  $trabajos_lista.filterable();

// el acoordeón. deshabilitado por ahora
  // $menu_lista_li.addClass('noactive');
  // $('<span class="cierralo"></span>').appendTo($menu_lista_li_strong);
  // $('ol#menu-lista li.noactive strong').click(function(){
  //     $menu_lista_li.removeClass('active').addClass('noactive');
  //     $(this).parent().parent().removeClass('noactive').addClass('active');
  // });

}); // $(document).on('ready',function()

$('#trabajos-lista li').addClass('tresde');
$trabajos_lista_li.addClass('all');

window.onbeforeunload = function () {
 // window.scrollTo(0, 0);
   $('html, body').animate({ scrollTop: $(document).css({'top':'0'})}, 1000);
}

$(window).ready(function(){
  window.history.pushState({}, 
    document.title, "/" + $url_works);
});

$btn_home.on('click',function() {
  window.location.href = '/';
});

