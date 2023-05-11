<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function isPrime($n)
{
    // 1 n'est pas premier
    if ($n <= 1) {
        return false;
    }

    // Vérifier si n est divisible par un nombre autre que 1 et lui-même
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }

    // n est premier
    return true;
}

// Afficher tous les nombres premiers jusqu'à 1000 avec un retour à la ligne entre chaque nombre
for ($i = 1; $i <= 1000; $i++) {
    if (isPrime($i)) {
        echo $i . "<br />";
    }
}

?>

</body>
</html>