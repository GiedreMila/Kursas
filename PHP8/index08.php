<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP8</title>
</head>

<body>

    <?php
      $april_temperature = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
    ?>

    <ul>
    <?php
        rsort($april_temperature);
        foreach ($april_temperature as $temperature)
          echo"<li>$temperature</li>";
    ?>
    </ul>

    <ul>
    <?php
       $average = array_sum($april_temperature) / count($april_temperature);
        echo round($average);
    ?>
    </ul>

    <ul>
    <?php
       $x = array_unique($april_temperature);
       $highest_temperature = array_slice($x,0,5);
        print_r($highest_temperature);
    ?>
    </ul>

    <ul>
    <?php
       $lowest_temperature = array_slice($x,-5,5);
        print_r($lowest_temperature);
    ?>
    </ul>

</body>

</html>
