<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
            Kombinacja if else if pozwala na sprawdzenie wiele warunków,
            jeżeli dany warunek nie będzie spełniony to sprawdzany jest
            kolejny po elseif. Na końcu możemy dodać domyślny else
            z blokiem kodu który będzie wykonany jeżeli żaden wcześniejszy
            nie będzie spełniony.
        */

        $a = 0;

        if ($a == 0) {
            echo("$a jest 0 <br>");
        } elseif ($a == 1) {
            echo("$a jest 1 <br>");
        } else if ($a == 3) {
            echo("$a jest 3 <br>");
        } elseif ($a == 5) {
            echo("$a jest 5 <br>");
        } elseif ($a == 7) {
            echo("$a jest 7 <br>");
        } else {
            echo("$a jest wartością $a <br>");
        }
        
        echo("Koniec programu");






    ?>
</body>
</html>