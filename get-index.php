<?php

$dato = $_GET['dati'];

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
    <h1><?php echo "Hai inserito : $dato"?></h1>
    <br>
    <h2>La sua lunghezza è di : <?php echo strlen($dato); ?></h2>
    <br>
    <h3><?php echo str_replace($dato,"***",$dato);?></h3>
</body>
</html>