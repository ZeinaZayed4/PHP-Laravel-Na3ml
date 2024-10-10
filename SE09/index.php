<?php
    require 'classes/Car.php';
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <?php
            $blueCar = new Car('blue', 50);
            $blueCar->show();

            $whiteCar = new Car('white', 55);
            $whiteCar->show();

            $grayCar = new Car('gray', 80);
            $grayCar->show();
        ?>
    </body>
</html>