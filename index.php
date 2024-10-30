<?php

$name = "Richard R";

$isLogged = false;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php-base</title>
</head>
<body>
<header>
    <?php if ($isLogged) { ?>

        <p>Bonjour <?php echo $name; ?></p>

    <?php } else { ?>

        <p>Veuillez vous connecter</p>

    <?php } ?>

</header>

<main>
    <h1>Le super blog de la piscine</h1>
    <p>Découvrez les dernières actus !</p>
</main>

</body>
</html>