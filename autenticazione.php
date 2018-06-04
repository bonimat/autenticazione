<?php
include_once(__DIR__. "/config.php");

global $CONFIG, $PAGINA;

session_start();
$PAGINA = $_SESSION['pagina'];

$user = "user";
$pass = "password";

$page_to=$CONFIG->webroot.$PAGINA;

if (isset($_POST['username']) && isset($_POST['password'])) {

    if ( $_POST['username'] == $user && $_POST['password'] == $pass) {

        $_SESSION['isLogged'] = true;
        header("Location:".$page_to);
    }
    else {

        header("Location:$page_to?error_login=1");
    }
}

?>