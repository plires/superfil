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
define('NOELIA', array(
    'noelia@cantofil.com.ar',
    'Noelia',
    'https://api.whatsapp.com/send/?phone=5491138889308&text=Hola%20Noelia!%20Necesito%20hacer%20una%20consulta!&app_absent=0',
    '11-3888-9308'
));

define('GISELA', array(
    'gisela@cantofil.com.ar',
    'Gisela',
    'https://api.whatsapp.com/send/?phone=5491158094444&text=Hola%20Gisela!%20Necesito%20hacer%20una%20consulta!&app_absent=0',
    '11-5809-4444'
));

define('MARTIN_C', array(
    'martin@cantofil.com.ar',
    'Martin',
    'https://api.whatsapp.com/send/?phone=5491131861400&text=Hola%20Martin!%20Necesito%20hacer%20una%20consulta!&app_absent=0',
    '11-3186-1400'
));

//////////////////////////////////////////////////////////////////////
/// Rotatividad de casillas segun rubros
//////////////////////////////////////////////////////////////////////
define('EMAIL_VENTAS_CIELORRASOS', array(GISELA));
define('EMAIL_VENTAS_JUNTAS', array(GISELA));
define('EMAIL_VENTAS_PALLETS', array(GISELA));
define('EMAIL_VENTAS_TUBOS', array(GISELA));
define('EMAIL_VENTAS_BANOS', array(MARTIN_C));
define('EMAIL_DEFAULT', array(MARTIN_C));
