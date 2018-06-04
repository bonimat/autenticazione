<!DOCTYPE html>
<html>
<head>

    <title>Autenticazione - <?php echo $sito_internet ?></title>

</head>
<body>

<form id="login" action="autenticazione.php" method="post">
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