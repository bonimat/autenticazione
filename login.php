<!DOCTYPE html>
<html>
<head>

    <title>Autenticazione </title>

</head>
<body>
<?php
include_once(__DIR__. "/config.php");
global $CONFIG, $PAGINA;

session_start();
$PAGINA = $_SESSION['pagina'];

if (isset($_SESSION['isLogged']) && ($_SESSION['isLogged'])) {

    $page_to = $CONFIG->webroot.$PAGINA;
    header("Location:".$page_to);
}

echo "pagina di ritorno: ".$CONFIG->webroot.$PAGINA;
?>

<form id="login" action=<?php echo $CONFIG->webroot."autenticazione.php" ?> method="post">
    <fieldset id="login_account">
        <input id="username" name="username" type="text" placeholder="Username" autofocus required>
        <input id="password" name="password" type="password" placeholder="Password" required>
    </fieldset>
    <fieldset id="actions">
        <input type="submit" id="submit" value="Collegati">
    </fieldset>
</form>

</body>
</html>