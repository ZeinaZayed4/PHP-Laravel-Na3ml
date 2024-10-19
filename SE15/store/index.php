<?php
    require 'partials/header.php';
    
    if (isset($_GET['id'])) {
        $query = 'DELETE FROM products WHERE id=:id';
        $stat = $conn->prepare($query);
        
        $stat->bindParam(':id', $_GET['id']);
        $stat->execute();
    }
?>
 <main class="container">
     <div class="row mb-5">
            <?php
                $query = 'SELECT * FROM products';
                $stat = $conn->prepare($query);
                
                $stat->execute();
                while ($row = $stat->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col-8 p-4 d-flex flex-column position-static">
                        <h3 class="mb-0"><?= $row['name'] ?></h3>
                        <p class="card-text mb-auto mt-3">
                            <?php echo substr($row['description'], 0, 120) ?>...
                        </p>
                        <div>
                            <a href="#" class="btn btn-primary">Details</a>
                            <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                            <a href="?id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                    <div class="col-4 d-none d-lg-block">
                        <img src="<?= $row['photo'] ?>" width="200" height="250" alt="" srcset=""/>
                    </div>
                </div>
            </div>
            <?php } ?>
 </main>
<?php require 'partials/footer.php'?>
