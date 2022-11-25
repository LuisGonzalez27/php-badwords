<?php

$dato = $_GET['dati'];
$censura = $_GET['parola'];

$sostituisce = str_replace($censura, '***', $dato);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1><?php echo "Paragrafo inserito : $dato"?></h1>
    <h3>La sua lunghezza del paragrafo è di: <?php echo strlen($dato); ?></h3>
    <br>
    <h2><?php echo "Paragrafo censurato: $sostituisce"?></h2>
    <h3>La sua lunghezza del paragrafo è di: <?php echo strlen($sostituisce ); ?></h3>
</body>
</html>