<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nested Array</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <table class="table table-striped">
            <?php
                $degrees = [
                    ["Student Name", "Arabic", "Math", "English", "Physics"],
                    [ "Sherouk", 90, 80, 95, 80],
                    [ "Kholoud", 90, 80, 95, 80],
                    [ "Ohoud", 90, 80, 95, 80],
                    [ "Zeina", 90, 80, 95, 80]
                ];
                foreach ($degrees as $info) {
                    echo "<tr>";
                    foreach ($info as $item) {
                        echo "<td>$item</td>";
                    }
                    echo "</tr>";
                }
            ?>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
