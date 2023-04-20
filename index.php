<?php

require_once __DIR__ . '/partials/functions.php';

session_start();

$generatedPassword = '';
if (isset($_GET['length']) && $_GET['length'] >= 4) {

    $generatedPassword = generatePassword($_GET['length']);

    $_SESSION['generatedPassword'] = $generatedPassword;

    header('Location: showPassword.php');
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>

<body>
    <h1>Password Generator</h1>

    <form action="index.php" method="GET">

        <label for="length">Lunghezza della password da generare</label>
        <input name="length" id="length" type="number" min="4" placeholder="lunghezza della password da generare">

        <hr>

        <button type="submit">Genera</button>

    </form>

    <hr>

    <?php
    if ($generatedPassword != "") {

        ?>

        <h2>Password generata:</h2>
        <h3>
            <?= $_GET['length'] ?> caratteri
        </h3>

        <pre><?= $generatedPassword ?></pre>

        <?php

    }
    ?>
</body>

</html>