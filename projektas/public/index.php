<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Learning CSS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../app/css/styles.css">
</head>


 <body>

     <?php
       require __DIR__ . '/../app/src/app.php';
     ?>

     <?php
        include('../app/views/header.php');
        include('../app/views/content.php');
        include('../app/views/js.php');
        include('../app/views/footer.php');
       ?>




    </body>
</html>
