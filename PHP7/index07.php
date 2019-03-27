<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP7</title>
</head>

<body>

    <?php
       $cities4 = ['Tokijas', 'Vašingtonas', 'Maskva', 'Londonas'];
     ?>

    <ul>
     <?php
       for ($x=0; $x < count($cities4); $x++) {
           echo "<li>$cities4[$x]</li>";
       }
     ?>
    </ul><br>

    <ul>
     <?php
        foreach ($cities4 as $city) {
            echo "<li>$city</li>";
        }
     ?>
    </ul>

</body>

</html>
