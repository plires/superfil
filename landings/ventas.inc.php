<?php

//////////////////////////////////////////////////////////////////////
///Copias de los mensajes
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
///Copias de los mensajes
//////////////////////////////////////////////////////////////////////
define('EMAIL_BCC_MARTIN', 'martin@cantofil.com.ar');
define('NAME_BCC_MARTIN', 'Martin Calcagno');

//////////////////////////////////////////////////////////////////////
///Casillas con datos
//////////////////////////////////////////////////////////////////////
define('YANINA', array(
    'yanina@cantofil.com.ar',
    'Yanina',
    'https://api.whatsapp.com/send/?phone=5491138889308&text=Hola,%20Necesito%20hacer%20una%20consulta!&app_absent=0',
    '11-3888-9308'
));

define('DAIANA', array(
    'daiana@cantofil.com.ar',
    'Daiana',
    'https://api.whatsapp.com/send/?phone=5491138889308&text=Hola%20Necesito%20hacer%20una%20consulta!&app_absent=0',
    '11-3888-9308'
));

// define('NATALIA', array(
//     'natalia@cantofil.com.ar',
//     'Natalia',
//     'https://api.whatsapp.com/send/?phone=5491138889308&text=Hola%20Natalia!%20Necesito%20hacer%20una%20consulta!&app_absent=0',
//     '11-3888-9308'
// ));

define('MARTIN_C', array(
    'martin@cantofil.com.ar',
    'Martin',
    'https://api.whatsapp.com/send/?phone=5491138889308&text=Hola%20Necesito%20hacer%20una%20consulta!&app_absent=0',
    '11-3888-9308'
));



//////////////////////////////////////////////////////////////////////
/// Rotatividad de casillas segun rubros
//////////////////////////////////////////////////////////////////////
define('EMAIL_VENTAS_CIELORRASOS', array(YANINA, DAIANA));
define('EMAIL_VENTAS_JUNTAS', array(YANINA, DAIANA));
define('EMAIL_VENTAS_PALLETS', array(YANINA, DAIANA));
define('EMAIL_VENTAS_TUBOS', array(YANINA, DAIANA));
define('EMAIL_VENTAS_BANOS', array(MARTIN_C));
define('EMAIL_DEFAULT', array(MARTIN_C));
