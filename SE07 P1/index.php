<?php
require 'db.php';
?>

<!doctype html>
<html lang="en">
    <?php require 'header.php'?>

    <body>
        <div class="container mt-5">
            <div class="row">
                <?php foreach ($products as $id => $details) { ?>
                    <div class="card mx-3" style="width: 18rem;">
                        <img src="images/<?=$details['photo']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?=$details['name']?></h5>
                            <p class="card-text">
                                <p><strong>Price: </strong><?=$details['price']?> EGP</p>
                                <p><strong>Stock: </strong><?=$details['stock']?></p>
                            </p>
                            <a href="details.php?sn=<?=$id?>" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>