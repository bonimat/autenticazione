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
$_SESSION['pagina'] = "paginadaproteggere.php";

$PAGINA = $_SESSION['pagina'];


if ((isset($_SESSION['isLogged'])) && ($_SESSION['isLogged'])) {
    echo "<h2> DATI PROTETTI VISIBILI </h2>.\n";
    echo "<a href ='".$CONFIG->webroot."logout.php'> Logout</a>";
} else {
    echo "<h2> Prima autenticati  <a href ='".$CONFIG->webroot."login.php'> vai alla Login</a>  </h2>";
}
?>

</body>
</html>

