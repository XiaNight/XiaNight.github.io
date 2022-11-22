<?php
// require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";

ini_set('display_errors', 1);

define('DIR_BASE', dirname( __FILE__ ) . '/');

// --- COMMON ---

define('UTIL',    DIR_BASE . 'util/');
define('HEADER',   DIR_BASE . 'header.php');

define('TOOL', UTIL . 'tool.mdl.php');

// --- DatabaseHW ---
define('DBHW',    DIR_BASE . 'Projects/DatabaseHW/');


define('DIR_MDL',    DBHW . 'modules/');
define('DIR_INC',    DBHW . 'includes/');
define('DIR_VIEWS',     DBHW . 'views/');
define('DIR_DATA',     DBHW . 'database/');


define('DATA_MANIP',     DIR_DATA . 'data_manipulation.mdl.php');
define('DATA_CUSTOMER',     DIR_DATA . 'customer_data.php');

define('DIR_CUSTOMER',    DIR_MDL . 'customer_data/');
define('DIR_PRODUCT',    DIR_MDL . 'product_date/');

define('DB_CONNECT',    DIR_INC . 'db_connect.inc.php');

define('VIEW_HEADER',   DIR_VIEWS . 'header.php');
define('VIEW_NAVIGATION',   DIR_VIEWS . 'navigation.php');
define('VIEW_FOOTER',   DIR_VIEWS . 'footer.php');
?>