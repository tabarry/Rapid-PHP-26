<?php

/*
 * SULATA FRAMEWORK
 * Version: 25
 * Date: February 2017
 */
//Error reporting
error_reporting("E_ALL & ~E_NOTICE & ~E_DEPRECATED");
//ini_set('display_errors',1);
//MISC SETTINGS
define('LOCAL_URL', 'http://localhost/#SITE_FOLDER#/');
define('WEB_URL', 'http://localhost/#SITE_FOLDER#/');
define('ADMIN_FOLDER', '_admin'); //This is the name of admin folder
define('SESSION_PREFIX', '#SESSION_PREFIX#');
define('UID_LENGTH', 14);
define('COOKIE_EXPIRY_DAYS', '30');
define('PHP_EXTENSION', ''); //This will add or remove '.php' in file links
//URLs and db settings
//Other settings are in sulata_settings table
//If local
if (!strstr($_SERVER['HTTP_HOST'], ".")) {
    if (!isset($_GET['debug'])) { //Debug mode can be toggled from querystring as ?debug=0 or ?debug=1
        define('DEBUG', TRUE);
    } else {
        define('DEBUG', $_GET['debug']);
    }
    define('BASE_URL', LOCAL_URL);
    define('ADMIN_URL', BASE_URL . ADMIN_FOLDER . '/');
    define('ADMIN_SUBMIT_URL', ADMIN_URL);
    define('PING_URL', BASE_URL . 'static/ping.html');
    define('NOSCRIPT_URL', BASE_URL . 'sulata/static/no-script.html');
    define('ACCESS_DENIED_URL', BASE_URL . 'sulata/static/access-denied.html');
    define('ADMIN_UPLOAD_PATH', '../files/');
    define('PUBLIC_UPLOAD_PATH', 'files/');
    define('LOCAL', TRUE);
    //API Settings
    define('API_URL', BASE_URL . 'phpMyRest/');
    define('API_KEY', '#API_KEY#');
    define('API_DEBUG', FALSE);
    //MySQL DB Settings
    define('DB_HOST', 'localhost');
    define('DB_NAME', '#DB_NAME#');
    define('DB_USER', '#DB_USER#');
    define('DB_PASSWORD', '#DB_PASSWORD#');
} else {
    if (!isset($_GET['debug'])) { //Debug mode can be toggled from querystring as ?debug=0 or ?debug=1
        define('DEBUG', TRUE);
    } else {
        define('DEBUG', $_GET['debug']);
    }
    define('BASE_URL', WEB_URL);
    define('ADMIN_URL', BASE_URL . ADMIN_FOLDER . '/');
    define('ADMIN_SUBMIT_URL', ADMIN_URL);
    define('PING_URL', BASE_URL . 'sulata/ping.html');
    define('NOSCRIPT_URL', BASE_URL . 'sulata/static/no-script.html');
    define('ACCESS_DENIED_URL', BASE_URL . 'sulata/static/access-denied.html');
    define('ADMIN_UPLOAD_PATH', '../files/');
    define('PUBLIC_UPLOAD_PATH', 'files/');
    define('LOCAL', FALSE);
    //API Settings
    define('API_URL', BASE_URL . 'phpMyRest/');
    define('API_KEY', '#API_KEY#');
    define('API_DEBUG', FALSE);
    //MySQL Settings
    define('DB_HOST', 'localhost');
    define('DB_NAME', '#DB_NAME#');
    define('DB_USER', '#DB_USER#');
    define('DB_PASSWORD', '#DB_PASSWORD#');
}
//Display errors
if (DEBUG == TRUE) {
    ini_set('display_errors', 1);
} else {
    ini_set('display_errors', 0);
}
//Edit delete download access
$editAccess = TRUE;
$duplicateAccess = TRUE;
$deleteAccess = TRUE;
$restoreAccess = TRUE;
$addAccess = TRUE;
$downloadAccessCSV = TRUE;
$downloadAccessPDF = TRUE;
//Exclude pages from the sidebar and modules
$sidebarExclude = array(
    '.',
    '..',
    'index.html',
    'index.php',
    'login.php',
    'reload.php',
    'settings.php',
    'template.php',
    'logout.php',
    'message.php',
    'lost-password.php',
    'notes.php',
    'themes.php',
    'modules.php',
    'css',
    'scss',
    'fonts',
    'img',
    'js',
    'less'
);
