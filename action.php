

<?php
//variabili ;
$paragrafo= $_GET["paragrafo"];
$parola= $_GET["parola"];
//cambiamenti con le funzioni di php
$lunghezza= strlen($paragrafo);
$sostituire=str_replace($parola,"***",$paragrafo);
$nuovo=strlen($sostituire);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>action</title>
</head>
<body>
    <h1>Censura testo </h1>
    <h2>Testo non censurato </h2>
    <p><?php echo"$paragrafo lunghezza $lunghezza" ?></p>
    <h2>Testo censurato </h2>
    <p><?php echo"$sostituire lunghezza $nuovo" ?></p>
</body>
</html>