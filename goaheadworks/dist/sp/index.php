<?php
include_once('../app_config.php');
include(APP_PATH_WP."wp-load.php");

$_SERVER['REQUEST_URI'] = str_replace('sp/','',$_SERVER['REQUEST_URI']);
wp();

require(CMS_PATH_SP . 'load.php');

?>