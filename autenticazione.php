<?php

session_start();

$user = "user";
$pass = "password";

$page_to="http://192.168.33.11/index.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    if ( $_POST['username'] == $user ){
        echo "uno";
    }

    if ( $_POST['password']== $pass ){
        echo "due";
    }

    if ( $_POST['username'] == $user && $_POST['password'] == $pass) {

        $_SESSION['isLogged'] = "true";
        header("Location:".$page_to);
        echo "ok ".$page_to;
    }
    else {

        header("Location:$page_to?error_login=1");
        echo "err ".$page_to;
    }
}
else {

   // header("Location:$page_to?error_login=1");
}
?>