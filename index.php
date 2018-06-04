<!DOCTYPE html>
<html>
<head>

    <title>Autenticazione - <?php $sito_internet = "auth"; echo $sito_internet ?></title>

</head>
<body>

<?php
    include_once(__DIR__. "/config.php");
    global $CONFIG, $PAGINA;
    session_start();
    $_SESSION['pagina'] = "index.php";
    $PAGINA = $_SESSION['pagina'];


    if (isset($_SESSION['isLogged']) && ($_SESSION['isLogged']) ){
        echo "<a href ='".$CONFIG->webroot."logout.php' title = 'Pagina di logout'>Logout</a>";

    } else {
        echo "<a href ='".$CONFIG->webroot."login.php' title = 'Login'>Login</a>";
    }



    if (isset($_SESSION['isLogged']) && ($_SESSION['isLogged']) ){
        echo "<strong> Autenticato! </strong>";
    } else {
        if (isset($_GET['error_login']) && ($_GET['error_login'] == 1)  ) {

            echo "<strong> Errore di autenticazione! </strong>";
        }
        else {
            echo "<strong> Non sei Autenticato! </strong>";
        }
    }
?>

</body>
</html>