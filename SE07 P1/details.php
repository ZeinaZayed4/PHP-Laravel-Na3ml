<?php
global $products;
require 'db.php';

$product = $products[$_GET['sn']];
?>

<!doctype html>
<html lang="en">
    <?php require 'header.php'?>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-2 border">
                    <img class="img-fluid" src="images/<?=$product['photo']?>" alt="">
                </div>
                <div class="col-8">
                    <h3><?=$product['name']?></h3>
                    <hr />
                    <p><strong>Price: </strong><?=$product['price']?> EGP</p>
                    <p><strong>Stock: </strong><?=$product['stock']?></p>
                    <a href="index.php" class="btn btn-primary">Continue Shopping</a>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
