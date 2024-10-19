<?php
    require 'partials/header.php';
?>

<main class="container">
    <div class="row mb-5">
        <?php
            if(isset($_POST['saveBTN'])){
                if (!empty($_FILES['photo']['name'])) {
                    // Upload product photo
                    $photo_path = 'images/'.$_FILES['photo']['name'];
                    move_uploaded_file($_FILES['photo']['tmp_name'], $photo_path);
                }
                
                $data = [
                    'id' => $_GET['id'],
                    'name' => $_POST['name'],
                    'price' => $_POST['price'],
                    'stock' => $_POST['stock'],
                    'description' => $_POST['description']
                ];
                
                if (isset($photo_path)) {
                    $data[':photo'] = $photo_path;
                }
                
                $columns = array_keys($data);
                
                $placeholders = array_map(function($item) {
                    return "$item=:$item";
                }, $columns);
                $placeholders = implode(', ', $placeholders);
                
                // 2- Send query
                $query = "UPDATE products SET $placeholders WHERE id = :id";
                $stat = $conn->prepare($query);
                $stat->execute($data);

                echo '<div class="alert alert-success" role="alert">
                        The product has been saved!
                      </div>';
            }
        ?>
        <?php
            $query = 'SELECT * FROM products WHERE id = :id';
            $stat = $conn->prepare($query);
            
            $stat->bindParam(':id', $_GET['id']);
            $stat->execute();
            
            $product = $stat->fetch(PDO::FETCH_ASSOC);
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" class="form-control" name="name" value="<?= $product['name']?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Product Price</label>
                <input type="text" class="form-control" name="price" value="<?= $product['price']?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Product Stock</label>
                <input type="text" class="form-control" name="stock" value="<?= $product['stock']?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Product Description</label>
                <textarea type="text" class="form-control" name="description" rows="5">
                    <?= $product['description']?>
                </textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Product Photo</label>
                <input class="form-control" type="file" id="formFile" name="photo">
                <img src="<?= $product['photo']?>" class="img-thumbnail" width="200">
            </div>

            <button type="submit" name="saveBTN" class="btn btn-primary mt-3">Save</button>
        </form>
    </div>
</main>
<?php require 'partials/footer.php'?>
