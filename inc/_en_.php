<?php
$lang = 'en';
$idioma = 'en';
$idioma_actual = 'en';

require "en-db.php";

$idioma_2 = 'es';
$idioma_2_text = 'Ir a versión Español';

// url en:
$url_works = 'works/';
$contact_url = 'contact/';

// url es:
$url_home = 'bienvenido/';
$url_works_switch = 'trabajos/';

// errores
$err_404 = '404';
$err_404_t_e = 'nothing';
$err_404_t_e_2 = 'here';
$err_404_t_largo = 'the url is bad or not exist.';

$err_403 = '403';
$err_403_t_e = 'forbidden';
$err_403_t_e_2 = '';
$err_403_t_largo = 'restricted content.';

$err_410 = '410';
$err_410_t_e = 'this is';
$err_410_t_e_2 = 'not alive ';
$err_410_t_largo = 'removed content';

$err_413 = '..    :´(';
$err_413_t_e = '- and?';
$err_413_t_e_2 = 'why?';
$err_413_t_largo = 'k.i.s.s. or k.i.s.a.';

$err_503 = '503';
$err_503_t_e = 'no';
$err_503_t_e_2 = 'service';
$err_503_t_largo = 'unavailable.';

$err_50x = $err_413;
$err_50x_t_e = '- '.$err_503_t_e;
$err_50x_t_e_2 = $err_503_t_e_2;
$err_50x_t_largo = $err_503_t_largo;

// HEAD
$titulo = 'Guillermo Luy';

$error_db = "Error: can not connect to db.";
$img_de = "Image of";

$texto = 'web design, 3d, motion, brands, logos, editorial, web development';
$cliente_desc = 'Graphic design - Web development';

$form_name = 'Name';
$form_subject = 'Subject';
$form_mensaje = 'Content';
$form_send = 'Send';
$required = '(required)';
$invalid = '(invalid)';
$mail_sent = 'Contact Mail Sent';
$mail_fail = 'Problem in Sending Mail';

$share = 'Share';
$close = 'Close';
$fullscreen = 'Full screen';
$next = 'Next';
$prev = 'Previous';
$fancy_error = 'The requested content cannot be loaded. <br/> Please try again later.';
$slide_play = 'Start slideshow';
$slide_stop = 'Pause slideshow';
$thums = 'Thumbnails';
$descargar = 'Download';
$zoom = 'Zoom';

$facebook_hi= "Hi! How can I help you?";

$title_dis = 'Graphic Design: logo and editorial';
$title_des = 'Web development & design. 3D works';

$aca = 'here';
$empezar = 'Start';
$servicios = 'services';
$clientes =  'clients';
$portfolio = 'Portfolio';
$title_home = '<strong>Guillermo Luy.</strong> Design & Development.';
$title_diseno = 'design';
$title_progra = 'development';
$trab_dest = 'Featured works:';
$serv_dis_des = 'Development/Web design';
$serv_redes = 'Social Networks management';
$serv_3d = '3d: modeling & animation';
$serv_vid = 'Videos, advertisements, ads';
$serv_impr ='Printed works: flyers, brochures <span>giant posters, banners:</span>';
$serv_folletos ='Flyers, brochures';
$ademas = 'Also';
$serv_regist = 'Domains registration, websites hosting';
$serv_gestion = 'Management of printing jobs';
$contact_text = 'Contact with Guillermo Luy';
$contact_call = 'Call Guillermo Luy';
$tel = 'Phone';
$ir_anterior = 'before';
$ir_siguiente = 'next';
$ir_home = 'go home';


// chequear nombre de clases en links si es que van a cambiar los nombres de categorías en inglés
$link_dis_3d =  '<a href="javascript:" class="link_3d col_3">3d Modeler and Animator</a>';
$link_dis_web = '<a href="javascript:" class="link_web col_2">Web Design</a>';
$link_sitio_web = '<a href="javascript:" class="link_web col_3">website</a>';
$link_sitios_web = '<a href="javascript:" class="link_web col_3">websites</a>';
$link_impr =  '<a href="javascript:" class="link_impr col_3">printeds</a>';
$link_des_web =  '<a href="javascript:" class="link_web col_2">Web Development</a>';
$link_todos =  '<a href="javascript:" class="link_todos col_2">Graphic Design</a>';
$link_marcas = '<a href="'.$img_trab_url.'me/marcas.jpg" data-fancybox data-type="image" class="link-marcas col_5">brand/logo</a>';
$link_manuales =  '<a href="http://www.bounousmaquinarias.com/pdf/VB-100-HIDRO-HVP_manual_de_uso.pdf" class="link-bounous-manual col_1" target="_blank">products manuals</a>';
$link_carteles =  '<a href="'.$img_trab_url.'me/carteles.jpg" data-fancybox data-type="image" class="link-carteles col_4">posters, billboards, banners</a>';
$link_folletos =  '<a href="'.$img_trab_url.'me/folletos.jpg" data-fancybox data-type="image" class="link-folletos col_4">brochures</a>';
$link_web_simple = '<a href="http://bounousmaquinarias.com" class="col_5" target="_blank">static content</a>';
$link_web_blog = '<a href="http://rinconrh.com.ar" target="_blank" class="col_1">blogs</a>';
$link_web_catalogos = '<a href="http://minfraestructura.com.ar" class="col_5" target="_blank">productos catalog</a>';
$link_tiendas = '<a href="https://thedarksideseeds.com" target="_blank" class="col_3">virtual shops</a>';
$link_web_redes = '<a class="link_red col_2" href="javascript:">social networks</a>';
$link_videos = '<a class="link_vid col_5" href="javascript:">videos</a>';
$fancy_view_source = 'This';
$view_source = 'Control + U';
$url_linkedin = 'https://www.linkedin.com/in/guillermoluy/';

$cv_texto_init_1 = 'Hi, mi name is Guillermo Luy, I am a graphic designer that along time was taking experience in programation, (web development), being '.$link_dis_web.' a connection between them. Especially html & web layout (front-end developer), an unknown work thats happens between the design and the programation of a '.$link_sitio_web.'. You can see '.$fancy_view_source.' in your computer pressing '.$view_source.'.';
$cv_texto_init_2 = 'I did star in '.$link_todos.' in 2003, with urbans and editorial works ('.$link_marcas.', '.$link_manuales.', '.$link_carteles. ', '.$link_folletos.', '.$link_impr.').';
$cv_texto_init_3 = 'In 2005 I did start in '.$link_dis_web.', creating interfaces and majoring on web layout.';
$cv_texto_init_4 = 'On 2008 I was gain varied knowledge, working as '.$link_dis_3d.'. I did create stands for exhibitions, prototypes, cars, various animations, and taking advantage of this powerful engine I have also made logos, web template designs and '.$link_sitios_web.'
as well as special images for '.$link_impr.' works. During this period until 2015, I have worked for clients and companies of local and international level, also forming part as partner in companies of '.$link_todos.' and '.$link_dis_web.'.';
$cv_texto_init_5 = 'Over years I was growing in all these areas, mastering and applying more knowledge in programming and design, allowing me perform '.$link_sitios_web.' of '.$link_web_simple.', news portals, '.$link_web_blog.', '.$link_web_catalogos.' and '.$link_tiendas.'.';
$cv_texto_init_6 = 'Actually I am working on '.$link_sitios_web.', from design to programming, managing '.$link_web_redes.' making content as '.$link_videos.' and advertising images, banners in news portals (Google Ads) and anothers printed works like: cards, banners, signs, menus, etc.';
$cv_texto_init_7 = 'Mi complete CV is in <a class="link_3d col_3" href='.$url_linkedin.' target="_blank">Linkedin</a>. There I detail each experience and knowledge that I acquired from my beginnings.';
$cv_texto_init_8 = 'The briefcase icon on the right, takes you to a summary of all my work up to the present.';
$cv_texto_init_9 = 'Thanks for your time.';