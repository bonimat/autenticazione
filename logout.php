<?php
/**
 * Created by PhpStorm.
 * User: matteo
 * Date: 03/06/18
 * Time: 20.42
 */
include_once(__DIR__. "/config.php");

global $CONFIG, $PAGINA;

session_start();
$PAGINA = $_SESSION['pagina'];

$_SESSION = array();
session_destroy();

$page_to=$CONFIG->webroot.$PAGINA;
header("Location:".$page_to);
