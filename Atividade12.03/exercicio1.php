<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    date_default_timezone_set('America/Sao_Paulo');

    $t = date("H");

    if ($t < "20") {
        echo $t;
        echo "</br> Tenha um ótimo dia!";
    } else {
        echo $t;
        echo "</br> Tenha uma ótima noite!";
    }
    ?>  
</body>
</html>
