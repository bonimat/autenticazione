<?php
/**
 * Created by PhpStorm.
 * User: matteo
 * Date: 03/06/18
 * Time: 20.42
 */
session_start();
unset($_SESSION['\'isLogged\'']);
session_destroy();
$page_to="http://192.168.33.11/index.php";
header("Location:".$page_to);
