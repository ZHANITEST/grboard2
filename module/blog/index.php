<?php
if(!defined('GR_BOARD_2')) exit();

if( array_key_exists('page', $_GET) ) $ext_page = (int)$_GET['page']; else $ext_page = 1;
if( array_key_exists('articleNo', $_GET) ) $ext_articleNo = (int)$_GET['articleNo']; else $ext_articleNo = 0;

include $ext_action . '.php';
?>
