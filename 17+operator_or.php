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
        // Operatory logiczny or czyli || zwraca fałsz jeśli po obu stronach
        // będzie fałsz, czyli jeśli jest chociaż jedna prawda z którejś 
        // strony to zwroci wartość true

        var_export( 1 == 1 || 10 != 10  ); echo("<br>"); // true
        var_export( 4 < 2 || 7 >= 8 ); echo("<br>"); // false
        var_export( 4 < 2 || 7 >= 7 ); echo("<br>"); // true
        var_export( 4 < 2 || 7 >= 10 || "B" == "B" ); echo("<br>"); // true

        
    ?>
</body>
</html>