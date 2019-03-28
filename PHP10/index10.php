<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP10</title>
</head>

<body>

    <title>stačiakampio plotas</title>

    <?php

     function plotas($aukštis, $plotis) {
         $rezultatas = $aukštis * $plotis;
         echo "Stačiakampio plotas: $rezultatas";
     }

       plotas(3, 7);

    ?>

</body>
</html>
