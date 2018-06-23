<?php

$twig->addGlobal('app', $app);
$twig->addGlobal("lang", $lang);


 $twig->addGlobal("url", $url); // /trabajos/
 $twig->addGlobal("host", $host); // des.luy.com/

//            $twig->addGlobal('pagerLinks', ( isset($pagerLinks) ? $pagerLinks : NULL ));
$twig->addGlobal('_GET', $_GET);
$twig->addGlobal('_POST', $_POST);
$twig->addGlobal('_REQUEST', $_REQUEST);
$twig->addGlobal('_ERROR', ( isset($error) ? $error : NULL));

$twig->addGlobal("AUTOR_WEB", AUTOR_WEB);
$twig->addGlobal("CLIENTE_NOMBRE", CLIENTE_NOMBRE);
$twig->addGlobal("CLIENTE_WEB", CLIENTE_WEB);
$twig->addGlobal("CLIENTE_DIRECCION", CLIENTE_DIRECCION);
$twig->addGlobal("CLIENTE_CP", CLIENTE_CP);
$twig->addGlobal("CLIENTE_CIUDAD", CLIENTE_CIUDAD);
$twig->addGlobal("CLIENTE_PROVINCIA", CLIENTE_PROVINCIA);
$twig->addGlobal("CLIENTE_CIUDAD_MIN", CLIENTE_CIUDAD_MIN);
$twig->addGlobal("CLIENTE_PROV_MIN", CLIENTE_PROV_MIN);
$twig->addGlobal("CLIENTE_TEL_PREFIJO", CLIENTE_TEL_PREFIJO);
$twig->addGlobal("CLIENTE_TEL1", CLIENTE_TEL1);
$twig->addGlobal("cliente_desc", $cliente_desc);
$twig->addGlobal("cliente_en_construccion", $cliente_en_construccion);
$twig->addGlobal("cliente_mail_1", $cliente_mail_1 );
$twig->addGlobal("cliente_mail_2", $cliente_mail_2);
$twig->addGlobal("telefono", $telefono);

$twig->addGlobal("img_url", $img_url);
$twig->addGlobal("img_trab_url", $img_trab_url);
$twig->addGlobal("img_gal_url", $img_gal_url);

$twig->addGlobal("img_gal_url", $img_gal_url);




// db
$twig->addGlobal("db_trabajos", $db_trabajos);
$twig->addGlobal("db_categories", $db_categories);
$twig->addGlobal("db_subcategorias", $db_subcategorias);
$twig->addGlobal("cat_db_id", $cat_db_id);
$twig->addGlobal("trabajos_ficha", $trabajos_ficha);
$twig->addGlobal("trabajos_gallery", $trabajos_gallery);


$twig->addGlobal("trabajos_dest", $trabajos_dest);
$twig->addGlobal("user_language", $user_language);


$twig->addGlobal("ficha_link_es", $ficha_link_es);
$twig->addGlobal("ficha_link_en", $ficha_link_en);
$twig->addGlobal("en_url", $en_url);
$twig->addGlobal("url_home", $url_home);
$twig->addGlobal("url_works", $url_works);
$twig->addGlobal("url_works_switch", $url_works_switch);
$twig->addGlobal("contact_url", $contact_url);


// $twig->addGlobal("", $);

$twig->addGlobal("THUMB_SIZE", THUMB_SIZE);
$twig->addGlobal("MED_SIZE", MED_SIZE);
$twig->addGlobal("BIG_SIZE", BIG_SIZE);


// lenguajes
$twig->addGlobal("titulo", $titulo);

$twig->addGlobal("error_db", $error_db);
$twig->addGlobal("img_de", $img_de);
$twig->addGlobal("texto", $texto);


$twig->addGlobal("form_name", $form_name);
$twig->addGlobal("form_subject", $form_subject);
$twig->addGlobal("form_mensaje", $form_mensaje);
$twig->addGlobal("form_send", $form_send);

$twig->addGlobal("form_name_ph", $form_name_ph);
$twig->addGlobal("form_email_ph", $form_email_ph);
$twig->addGlobal("form_subject_ph", $form_subject_ph);
$twig->addGlobal("form_mensaje_ph", $form_mensaje_ph);

//$


// $ = 'Ingrese aquí su '.$form_mensaje;
// $form_send = 'Enviar';



$twig->addGlobal("required", $required);
$twig->addGlobal("invalid", $invalid);
$twig->addGlobal("mail_sent", $mail_sent);
$twig->addGlobal("mail_fail", $mail_fail);
$twig->addGlobal("share", $share);
$twig->addGlobal("close", $close);
$twig->addGlobal("fullscreen", $fullscreen);
$twig->addGlobal("next", $next);
$twig->addGlobal("prev", $prev);
$twig->addGlobal("fancy_error", $fancy_error);
$twig->addGlobal("slide_play", $slide_play);
$twig->addGlobal("slide_stop", $slide_stop);
$twig->addGlobal("thums", $thums);
$twig->addGlobal("descargar", $descargar);
$twig->addGlobal("zoom", $zoom);
$twig->addGlobal("facebook_hi", $facebook_hi);
$twig->addGlobal("title_dis", $title_dis);
$twig->addGlobal("title_des", $title_des);
$twig->addGlobal("idioma_actual", $idioma_actual);
$twig->addGlobal("idioma_2", $idioma_2);
$twig->addGlobal("idioma_2_text", $idioma_2_text);
$twig->addGlobal("idioma_switch", $idioma_switch);
$twig->addGlobal("aca", $aca);
$twig->addGlobal("empezar", $empezar);
$twig->addGlobal("servicios", $servicios);
$twig->addGlobal("clientes", $clientes);
$twig->addGlobal("portfolio", $portfolio);
$twig->addGlobal("title_home", $title_home);
$twig->addGlobal("title_diseno", $title_diseno);
$twig->addGlobal("title_progra", $title_progra);
$twig->addGlobal("trab_dest", $trab_dest);
$twig->addGlobal("serv_dis_des", $serv_dis_des);
$twig->addGlobal("serv_redes", $serv_redes);
$twig->addGlobal("serv_3d", $serv_3d);
$twig->addGlobal("serv_vid", $serv_vid);
$twig->addGlobal("serv_impr", $serv_impr);
$twig->addGlobal("serv_folletos", $serv_folletos);
$twig->addGlobal("ademas", $ademas);
$twig->addGlobal("serv_regist", $serv_regist);
$twig->addGlobal("serv_gestion", $serv_gestion);
$twig->addGlobal("contact_text", $contact_text);
$twig->addGlobal("contact_call", $contact_call);
$twig->addGlobal("tel", $tel);
$twig->addGlobal("link_dis_3d", $link_dis_3d);
$twig->addGlobal("link_dis_web", $link_dis_web);
$twig->addGlobal("link_sitio_web", $link_sitio_web);
$twig->addGlobal("link_sitios_web", $link_sitios_web);
$twig->addGlobal("link_impr", $link_impr);
$twig->addGlobal("link_des_web", $link_des_web);
$twig->addGlobal("link_todos", $link_todos);
$twig->addGlobal("link_marcas", $link_marcas);
$twig->addGlobal("link_manuales", $link_manuales);
$twig->addGlobal("link_carteles", $link_carteles);
$twig->addGlobal("link_folletos", $link_folletos);
$twig->addGlobal("link_web_simple", $link_web_simple);
$twig->addGlobal("link_web_blog", $link_web_blog);
$twig->addGlobal("link_web_catalogos", $link_web_catalogos);
$twig->addGlobal("link_tiendas", $link_tiendas);
$twig->addGlobal("link_web_redes", $link_web_redes);
$twig->addGlobal("link_videos", $link_videos);
$twig->addGlobal("fancy_view_source", $fancy_view_source);
$twig->addGlobal("view_source", $view_source);
$twig->addGlobal("link_maqueta", $link_maqueta);
$twig->addGlobal("url_linkedin", $url_linkedin);
$twig->addGlobal("ir_anterior", $ir_anterior);
$twig->addGlobal("ir_siguiente", $ir_siguiente);
$twig->addGlobal("ir_home", $ir_home);

$twig->addGlobal("cv_texto_init_1", $cv_texto_init_1);
$twig->addGlobal("cv_texto_init_2", $cv_texto_init_2);
$twig->addGlobal("cv_texto_init_3", $cv_texto_init_3);
$twig->addGlobal("cv_texto_init_4", $cv_texto_init_4);
$twig->addGlobal("cv_texto_init_5", $cv_texto_init_5);
$twig->addGlobal("cv_texto_init_6", $cv_texto_init_6);
$twig->addGlobal("cv_texto_init_7", $cv_texto_init_7);
$twig->addGlobal("cv_texto_init_8", $cv_texto_init_8);

?>