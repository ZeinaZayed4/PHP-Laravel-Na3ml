<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
              rel="stylesheet"
              integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
              crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <?php
                    $errors = [];
                    if(isset($_GET['btn'])) {
                        // Validate Email
                        if(empty($_GET['email'])) { // required
                            $errors['email'][] = 'Email field is required.';
                        }
                        if(!strpos($_GET['email'], '@')) { // Valid format
                            $errors['email'][] = 'Email format is invalid.';
                        }
//                        if (!empty($errors)) {
//                            echo '<div class="alert alert-danger">';
//                            foreach (array_merge(...array_values($errors)) as $error) {
//                                echo "<li>$error</li>";
//                            }
//                            echo '</div>';
//                        }
                        if (empty($_GET['password'])) {
                            $errors['password'][] = 'Password field is required.';
                        }
                        if (strlen($_GET['password']) < 6) {
                            $errors['password'][] = 'Password must be at least 6 characters.';
                        }
                    }
                ?>
                <form action="">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="text" name="email" class="form-control <?= isset($errors['email']) ? 'is-invalid' : ''?>">
                        <?php
                            if (isset($errors['email'])) {
                                echo "<small class='text-danger'>". $errors['email'][0] ."</small>";
                            }
                        ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control <?= isset($errors['email']) ? 'is-invalid' : ''?>">
                        <?php
                            if (isset($errors['password'])) {
                                echo "<small class='text-danger'>". $errors['password'][0] ."</small>";
                            }
                        ?>
                    </div>
                    <button type="submit" name="btn" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>