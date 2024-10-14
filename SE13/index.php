<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Blog Posts</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
              rel="stylesheet"
              integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
              crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <?php
            // 1- Open connection to MySQL
            $conn = mysqli_connect('localhost', 'root', '', 'blog2');
            if (!$conn) {
                echo 'Connection failed';
            }

            // 2- Send query to DB
            $query = "SELECT * FROM posts";
            $results = mysqli_query($conn, $query);

            // 3- Handling results from step 2
            if (mysqli_num_rows($results)) {
                while($row = mysqli_fetch_assoc($results)) {
                    echo '<div class="card mt-5">
                      <div class="card-header">
                      ' . date('d / m / Y', strtotime($row['publish_date'])) . ' 
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">'. $row['title'] . '</h5>
                        <p class="card-text">' . $row['content'] . '</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                    </div>';
                }
            } else {
                echo 'No posts found! <br />';
            }

            // 4- Close connection
            mysqli_close($conn);
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </body>
</html>