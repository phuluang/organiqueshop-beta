<?php
// BACKEND CONFIG

// HTTP
define('HTTP_SERVER', 'http://liomus.com/organiqueshop-beta/admin/');
define('HTTP_CATALOG', 'http://liomus.com/organiqueshop-beta/');
define('HTTP_IMAGE', 'http://liomus.com/organiqueshop-beta/image/');
define('HTTP_ADMIN', 'http://liomus.com/organiqueshop-beta/admin/');

// HTTPS
define('HTTPS_SERVER', HTTP_SERVER);
define('HTTPS_IMAGE', HTTP_IMAGE);

// DIR
define('DIR_CATALOG', '/home/phuluang/public_html/organiqueshop-beta/catalog/');
define('DIR_APPLICATION', '/home/phuluang/public_html/organiqueshop-beta/admin/');
define('DIR_SYSTEM', '/home/phuluang/public_html/organiqueshop-beta/system/');
define('DIR_DATABASE', DIR_SYSTEM.'database/');
define('DIR_LANGUAGE', DIR_APPLICATION.'language/');
define('DIR_TEMPLATE', DIR_APPLICATION.'view/template/');
define('DIR_CONFIG', DIR_SYSTEM.'config/');
define('DIR_IMAGE', '/home/phuluang/public_html/organiqueshop-beta/image/');
define('DIR_CACHE', DIR_SYSTEM.'cache/');
define('DIR_DOWNLOAD', '/home/phuluang/public_html/organiqueshop-beta/download/');
define('DIR_LOGS', DIR_SYSTEM.'logs/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'organiqueshop');
define('DB_PASSWORD', 'adminadmin');
define('DB_DATABASE', 'organiqueshop');
define('DB_PREFIX', 'oc_');

?>