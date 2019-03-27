<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP6</title>
</head>

<body>

    <?php
      $metai = 1774;
      $cities3 = [
                 'Tokijas' => [3.6, 1868, 'Japonija'],
                 'Vašingtonas' => [0.6, 1790, 'JAV'],
                 'Maskva' => [11.5, 1147, 'Rusija']
                 ];
      $year = $cities3['Vašingtonas'][1] - $metai;
    ?>

    <?php
     if ($metai >= $cities3['Vašingtonas'][1]) {
         echo "Vašingtonas yra JAV sostinė.";
     }
    ?><br>

    <?php
     if ($metai = 1774) {
        echo "JAV sostinė vis dar Filadelfijoje.";
     } elseif ($metai >= $cities3['Vašingtonas'][1]) {
        echo"Vašingtonas yra JAV sostinė.";
     } else {
        echo "Vašingtonas vis dar yra JAV sostinė.";
     }
    ?><br>

    <?php
     if ($metai = 1774) {
        echo "Liko $year metai (-ų) iki Vašingtono įkūrimo.";
     } else {
        echo 'Vašingtonas dar neįkurtas';
     }
    ?><br>

</body>

</html>
