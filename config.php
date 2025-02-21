<?php

/**
 * Constant Variables*/

date_default_timezone_set("Asia/Calcutta");

// error_reporting(E_ALL);

ini_set('display_errors', 'Off');

/** MySQL hostname */

define('DB_HOST', 'localhost');

/** Database Name */

define('DB_NAME', 'contact_leads');

/** Database User */

define('DB_USER', 'root');

/** Database User */

define('DB_PASS', '');

define('_TABLE_NAME_', 'verde_vista_lp_leads');

/** Site Base URL */

define('BASE_URL', '');

define('LP_NAME', 'Verde Vista');

define('EMAIL_FROM_NAME', '');

define('FROM_EMAIL', '');

define('LOGIN_NAME', 'admin');

define('LOGIN_PASSWORD', 'gLZzL4()d64o9i>3');

DEFINE('CONTACT_TO', '');

//MULTIPLE EMAIL COMMA SEPERATED

DEFINE('CONTACT_CC', ''); //MULTIPLE EMAIL COMMA SEPERATED

DEFINE('CONTACT_BCC', ''); //MULTIPLE EMAIL COMMA SEPERATED

DEFINE('CONTACT_SUBJECT', LP_NAME);

global $conn;

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

// session start

set_time_limit(0);

session_start();
