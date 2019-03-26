<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP4</title>
</head>

<body>

    <?php

      $cities = ['Berlynas','Roma','Londonas'];
      $cities[3] = 'Tokijas';
      $cities2 = ['Tokijas'=>13.6,'Vašingtonas'=>0.6,'Maskva'=>11.5];
      $cities2['Londonas'] = 8.6;

       print_r($cities);

    ?>

      <ul>
         <?php echo "<li>$cities[1]</li>";?>
      </ul>

      <ul>
         <?php echo "Gyventojų skaičius: {$cities2['Tokijas']} mln.";?>
      </ul>

</body>

</html>
