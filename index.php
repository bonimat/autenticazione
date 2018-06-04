<!DOCTYPE html>
<html>
<head>

    <title>Autenticazione - <?php $sito_internet = "auth"; echo $sito_internet ?></title>

</head>
<body>

<?php

    session_start();
    if (isset($_SESSION['isLogged']) && ($_SESSION['isLogged']) ){
        echo "<a href ='logout.php' title = 'Pagina di logout'>Logout</a>";
    } else {
        echo "<a href ='loginform.php' title = 'Login'>Login</a>";
    }
    if (isset($_SESSION['isLogged']) && ($_SESSION['isLogged']) ){
        echo "<strong> Autenticato! </strong>";
    } else {
        if (isset($_GET['error_login']) &&lll ($_GET['error_login'] == 1)  ) {

            echo "<strong> Errore di autenticazione! </strong>";
        }
        else {
            echo "<strong> Non sei Autenticato! </strong>";
        }
    }
?>

</body>
</html>