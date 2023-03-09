<?php 
    $parola = $_GET["parola"];
    $testo = $_GET["testo"];
    $testo_censurato = str_replace($parola, '***' , $testo);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>
    <h1>
        Ecco quello che hai inviato
    </h1>
    <h3>
        la parola censurata è:
        <?php echo $parola?>
    </h3>
    <p>
        <div>
            cio che hai scritto è lungo <?php echo strlen($testo) ?>
        </div>
        <?php echo $testo ?>
    </p>
    <br>
    <h1>
        Ecco il testo censurato
    </h1>
    <br>
    <p>
        <div>
            cio che hai scritto è lungo <?php echo strlen($testo_censurato) ?>
        </div>
        <?php echo $testo_censurato ?>
    </p>
</body>
</html>