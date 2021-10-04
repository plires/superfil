<?php

////////////////////////
///Valores URI
////////////////////////
define('URI', $_SERVER['REQUEST_URI']);
define('BASE', 'http://superfil.test/');

////////////////////////
///Valores de DB 
////////////////////////
define('DSN', 'mysql:host=localhost;dbname=lc_superfil;charset=utf8;port:3306');
define('DB_USER', 'homestead');
define('DB_PASS', 'secret');

//////////////////////////////
///Valores de Envio de emails
//////////////////////////////
define('SMTP', '0.0.0.0'); 
define('USERNAME', 'testuser');
define('EMAIL_PASS', 'testpwd'); 
define('EMAIL_PORT', 1025);

define('EMAIL_SENDER', 'envios@jokerhotel.com.ar');
define('EMAIL_SENDER_SHOW', 'carlos.castro.1975.2@gmail.com');
define('EMAIL_RECIPIENT', 'carlos.castro.1975.2@gmail.com');
define('EMAIL_BCC', 'pablolires@gmail.com');

define('NAME_SENDER_SHOW', 'Superfil');
define('EMAIL_SUBJECT', 'Gracias por tu contacto');
define('EMAIL_CHARSET', 'utf-8');
define('EMAIL_ENCODING', 'quoted printable');

////////////////////////
///API KEY RECAPTCHA
////////////////////////
define('RECAPTCHA_KEY_SITE', '6Lfjx9YbAAAAAD5dEWVt8q0w6-7WgbqSLj8mst6S');
define('RECAPTCHA_KEY_SECRET', '6Lfjx9YbAAAAAMOrW1hSbBicsifEzyvD9XI0I3x2');

////////////////////////
///URL AMIGABLES
////////////////////////
define('CAMARAS', 'camaras-frigorificas');
define('CAMARAS_TITLE', 'Cámaras Frigoríficas');
define('CAMARAS_URL', 'perfiles-pvc-zocalos-sanitarios');

define('FURGONES', 'furgones-termicos');
define('FURGONES_TITLE', 'Línea Furgones Térmicos');
define('FURGONES_URL', 'pvc-rigido-coextruido-perfiles-plasticos-furgones-termicos');

define('CIELORRASO', 'cielorraso');
define('CIELORRASO_TITLE', 'Línea Cielorrasos');
define('CIELORRASO_URL', 'perfil-pvc-cielorraso-encastre-revestimiento');

define('PUBLICIDAD', 'publicidad');
define('PUBLICIDAD_TITLE', 'Publicidad');
define('PUBLICIDAD_URL', 'portaprecio-diferentes-sujecciones-tipo-ganchera');

define('REVESTIMIENTO', 'revestimiento-exterior');
define('REVESTIMIENTO_TITLE', 'Línea Revestimiento Exterior');
define('REVESTIMIENTO_URL', 'revestimiento-exterior-fachada-quiebravista-policarbonato-uv');

define('NAUTICA', 'nautica');
define('NAUTICA_TITLE', 'Náutica');
define('NAUTICA_URL', 'botazo-nautico-botazo-protector-para-marina');

define('POLICARBONATO', 'policarbonato');
define('POLICARBONATO_TITLE', 'Línea Policarbonato');
define('POLICARBONATO_URL', 'policarbonato-pvc-perfiles-union');

define('TERMINACIONES', 'terminaciones');
define('TERMINACIONES_URL', 'pisos-vinilicos-zocalos-ocultos-pvc-flexibles-nariz-escalon-juntas');

define('ILUMINACION', 'iluminacion');
define('ILUMINACION_TITLE', 'Línea Iluminación');
define('ILUMINACION_URL', 'cobertor-perfiles-iluminacion-policarbonato');

define('TUBOS', 'tubos-pvc');
define('TUBOS_TITLE', 'Tuberias de PVC');
define('TUBOS_URL', 'tubos-pvc');

define('LISTEX', 'listex');
define('LISTEX_TITLE', 'Listex');
define('LISTEX_URL', 'zocalos-madera-sintetica-polimeros');

define('JUNTAS', 'juntas');
define('JUNTAS_TITLE', 'Juntas Waterstop');
define('JUNTAS_URL', 'juntas-waterstop-bandas-flexibles-pvc-sella-juntas-construccion-expansion');

define('GUARDACAMILLAS', 'guardacamillas');
define('GUARDACAMILLAS_TITLE', 'Guardacamillas');
define('GUARDACAMILLAS_URL', 'guardacamillas-hospitales-clinicas');

define('PALLETS', 'pallets');
define('PALLETS_TITLE', 'Pallets');
define('PALLETS_URL', 'pallets-plasticos-pvc');

?>