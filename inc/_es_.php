<?php
$lang = 'es';
$idioma = 'es';
$idioma_actual = 'es';

require "es-db.php";

$idioma_2 = 'en';
$idioma_2_text = 'Go to English Version';

// url es:
$url_works = 'trabajos/';
$contact_url = 'contacto/';

// url en:
$url_home = 'welcome/';
$url_works_switch = 'works/';

// errores
$err_404 = '404';
$err_404_t_e = 'no hay';
$err_404_t_e_2 = 'naranja';
$err_404_t_largo = 'la url ingresada no existe o <br/> es errónea.';

$err_403 = '403';
$err_403_t_e = 'no ';
$err_403_t_e_2 = 'permitido';
$err_403_t_largo = 'contenido de acceso restringido.';

$err_410 = '410';
$err_410_t_e = 'esto ya';
$err_410_t_e_2 = 'no está';
$err_410_t_largo = 'contenido eliminado.';

$err_413 = '..    :´(';
$err_413_t_e = '- te';
$err_413_t_e_2 = 'copaste';
$err_413_t_largo = 'pedime algo más sencillo.';

$err_503 = '503';
$err_503_t_e = 'sin';
$err_503_t_e_2 = 'servicio';
$err_503_t_largo = 'temporalmente no disponible.';

$err_50x = $err_413;
$err_50x_t_e = '- '.$err_503_t_e;
$err_50x_t_e_2 = $err_503_t_e_2;
$err_50x_t_largo = 'temporalmente no disponible.';

// HEAD
$titulo = 'Guillermo Luy';
$error_db = "Error: No es posible conectarse a la base de datos.";

$img_de = "Imagen de";

$texto = 'diseño web, 3d, animaciones, marcas, logos, editorial, desarrollo web';
$cliente_desc = 'Diseño gráfico - Desarrollo web';

$form_name = 'nombre';
$form_subject = 'asunto';
$form_mensaje = 'mensaje';
$form_send = 'Enviar';

$form_name_ph = 'Ingrese su '.$form_name;
$form_email_ph = 'No olvides la @ y todo eso...';
$form_subject_ph = 'Todo mensaje tiene un '.$form_subject;
$form_mensaje_ph = 'Ingrese aquí su '.$form_mensaje;


$required = '(obligatorio)';
$invalid = '(no es válido)';
$mail_sent = 'Mail enviado exitosamente. Muchas gracias.';
$mail_fail = 'Hubo problemas al enviar el mail :(';

$share = 'Compartir';
$close = 'Cerrar';
$fullscreen = 'Pantalla completa';
$next = 'Siguiente';
$prev = 'Anterior';
$fancy_error = 'No se puede acceder al contenido.<br/> Intente nuevamente más tarde.';
$slide_play = 'Comenzar slideshow';
$slide_stop = 'Pausar slideshow';
$thums = 'Imágenes';
$descargar = 'Descargar';
$zoom = 'Acercar';

$facebook_hi= "¡Hola! ¿En qué puedo ayudarte?";

$title_dis = 'Diseño gráfico: logo y editorial';
$title_des = 'Diseño y desarrollo web - 3D';

$aca = 'acá'; 
$empezar = 'Empezar';
$servicios = 'servicios';
$clientes =  'clientes';
$portfolio = 'Portfolio completo';
$title_home = '<strong>Guillermo Luy.</strong> Diseño gráfico & Programación.';
$title_diseno = 'diseño';
$title_progra = 'programación';
$trab_dest = 'Trabajos destacados:';
$serv_dis_des = 'Desarrollo/Diseño web';
$serv_redes = 'Gestión/Contenidos en redes sociales';
$serv_3d = '3d: modelado y animación';
$serv_vid = 'Videos, publicidades';
$serv_impr ='Impresos: folletos, <span>gigantografías, banners:</span>';
$serv_folletos ='Folletos varios';
$ademas = 'Además';
$serv_regist = 'Registro de dominios, alojamiento (hosting) de sitios web';
$serv_gestion = 'Gestión de trabajos de impresión';
$contact_text = 'Contacto con Guillermo Luy';
$contact_call = 'Llamar a Guillermo Luy';
$tel = 'Tel';

$ir_anterior = 'anterior';
$ir_siguiente = 'siguiente';
$ir_home = 'volver a inicio';


// linkear impresos  (efecto jquery), darkseeds, los stands, prototipos, automóviles, animaciones variadas, logotipos, diseños de plantillas web y sitios web, diseño web, creando interfaces, maquetación web y Control + U, y revisar que mas falte. No linkear el primer maqetado web principal, asi leen primero que es.
$link_dis_3d =  '<a href="javascript:" class="link_3d col_3">Modelador y animador 3d</a>';
$link_dis_web = '<a href="javascript:" class="link_web col_2">Diseño web</a>';
$link_sitio_web = '<a href="javascript:" class="link_web col_3">sitio web</a>';
$link_sitios_web = '<a href="javascript:" class="link_web col_3">sitios web</a>';
$link_impr =  '<a href="javascript:" class="link_impr col_3">impresos</a>';
$link_des_web =  '<a href="javascript:" class="link_web col_2">Desarrollo Web</a>';
$link_todos =  '<a href="javascript:" class="link_todos col_2">Diseño Gráfico</a>';
$link_marcas = '<a href="'.$img_trab_url.'me/marcas.jpg" data-fancybox data-type="image" class="link-marcas col_5">marcas/logotipos</a>';
$link_manuales =  '<a href="http://www.bounousmaquinarias.com/pdf/VB-100-HIDRO-HVP_manual_de_uso.pdf" class="link-bounous-manual col_1" target="_blank">manuales de productos</a>';
$link_carteles =  '<a href="'.$img_trab_url.'me/carteles.jpg" data-fancybox data-type="image" class="link-carteles col_4">carteles, gigantografías, banners</a>';
$link_folletos =  '<a href="'.$img_trab_url.'me/folletos.jpg" data-fancybox data-type="image" class="link-folletos col_4">folletos</a>';
$link_web_simple = '<a href="http://bounousmaquinarias.com" class="col_5" target="_blank">contenido fijo</a>';
$link_web_blog = '<a href="http://rinconrh.com.ar" target="_blank" class="col_1">blogs</a>';
$link_web_catalogos = '<a href="http://minfraestructura.com.ar" class="col_5" target="_blank">catálogos de productos</a>';
$link_tiendas = '<a href="https://thedarksideseeds.com" target="_blank" class="col_3">tiendas virtuales</a>';
$link_web_redes = '<a class="link_red col_2" href="javascript:">redes sociales</a>';
$link_videos = '<a class="link_vid col_5" href="javascript:">videos</a>';
$fancy_view_source = 'Esto';
$view_source = 'Control + U';
$url_linkedin = 'https://www.linkedin.com/in/guillermoluy/?locale=es_ES';


$cv_texto_init_1 = 'Hola, mi nombre es Guillermo Luy, soy un diseñador gráfico que con el tiempo adquirí experiencia en el campo de la programación, siendo un enlace entre ellos '.$link_dis_web.' y especialmente maquetado html, un trabajo no muy nombrado que se realiza entre el diseño y la programación de un '.$link_sitio_web.'.  '.$fancy_view_source.' se ve en tu computadora presionando '.$view_source.'.';
$cv_texto_init_2 = 'En '.$link_todos.' comencé en el año 2003, con trabajos de índole editorial y urbano ('.$link_marcas.', '.$link_manuales.', '.$link_carteles. ', '.$link_folletos.', '.$link_impr.').';
$cv_texto_init_3 = 'En el año 2005 comencé a trabajar en '.$link_dis_web.', creando interfaces y especializándome en maquetación web.';
$cv_texto_init_4 = 'A partir de 2008 fui adquiriendo conocimientos variados, desempeñándome como '.$link_dis_3d.'. He realizado stands para exposiciones, prototipos, automóviles, animaciones varias, y aprovechando este poderoso motor he realizado también logotipos, diseños de plantillas web y '.$link_sitios_web.' como también imágenes especiales para trabajos '.$link_impr.'. Durante este período hasta 2015, he trabajado para clientes y empresas de nivel local e internacional, formando parte también como socio en diversas empresas dedicadas a '.$link_todos.' y '.$link_dis_web.'.';
$cv_texto_init_5 = 'Con el paso del tiempo fui desarrollándome en todas éstas áreas, dominando y aplicando más conocimientos en programación y diseño, permitiéndome realizar '.$link_sitios_web.' de '.$link_web_simple.' como también portales de noticias, '.$link_web_blog.', '.$link_web_catalogos.' y '.$link_tiendas.'.';

$cv_texto_init_6 = 'Actualmente estoy trabajando en '.$link_sitios_web.', desde el diseño a la programación, como así también administrando '.$link_web_redes.', generando contenidos como  '.$link_videos.' e imágenes, banners publicitarios para portales de noticias (Google Ads) y distintos trabajos de impresión en general: tarjetería, banners, rotulados, menúes, etc.';

$cv_texto_init_7 = 'Mi currículum completo se encuentra en <a class="link_3d col_3" href='.$url_linkedin.' target="_blank">Linkedin</a> donde detallo mejor cada experiencia y los conocimientos que fui adquiriendo a lo largo de los años.';
$cv_texto_init_8 = 'El ícono del maletín a la derecha, te lleva a un resumen de todos mis trabajos a través del tiempo.';
$cv_texto_init_9 = 'Gracias por su tiempo.';