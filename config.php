<?php
// FRONTEND CONFIG

// HTTP
define('HTTP_SERVER', 'http://organiqueshop.net/organiqueshop-beta/');
define('HTTP_CATALOG', 'http://organiqueshop.net/organiqueshop-beta/');
define('HTTP_IMAGE', 'http://organiqueshop.net/organiqueshop-beta/image/');
define('HTTP_ADMIN', 'http://organiqueshop.net/organiqueshop-beta/admin/');

// HTTPS
define('HTTPS_SERVER', HTTP_SERVER);
define('HTTPS_IMAGE', HTTP_IMAGE);

// DIR
define('DIR_CATALOG', '/home/phuluang/public_html/organiqueshop-beta/catalog/');
define('DIR_APPLICATION', DIR_CATALOG);
define('DIR_SYSTEM', '/home/phuluang/public_html/organiqueshop-beta/system/');
define('DIR_DATABASE', DIR_SYSTEM.'database/');
define('DIR_LANGUAGE', DIR_APPLICATION.'language/');
define('DIR_TEMPLATE', DIR_APPLICATION.'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM.'config/');
define('DIR_IMAGE', '/home/phuluang/public_html/organiqueshop-beta/image/');
define('DIR_CACHE', DIR_SYSTEM.'cache/');
define('DIR_DOWNLOAD', '/home/phuluang/public_html/organiqueshop-beta/download/');
define('DIR_LOGS', DIR_SYSTEM.'logs/');

// DB
//define('DB_DRIVER', 'mysql');
//define('DB_HOSTNAME', 'localhost');
//define('DB_USERNAME', 'phuluang_oc2');
//define('DB_PASSWORD', 'Z*N7of&l#i80^(3');
//define('DB_DATABASE', 'phuluang_oc2');
//define('DB_PREFIX', 'oc_');
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'organiqueshop');
define('DB_PASSWORD', 'adminadmin');
define('DB_DATABASE', 'organiqueshop');
define('DB_PREFIX', 'oc_');

?>