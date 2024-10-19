<?php
    require 'partials/header.php';
?>

<main class="container">
    <div class="row mb-5">
        <?php
            if(isset($_POST['saveBTN'])){
                // Upload product photo
                $photo_path = 'images/'.$_FILES['photo']['name'];
                move_uploaded_file($_FILES['photo']['tmp_name'], $photo_path);
                
                // 1- Connect to MySQL server
                try {
                    $conn = new PDO('mysql::host=localhost;dbname=mansoura_store',
                        'root',
                        '');
                } catch (Exception $e) {
                    echo $e->getMessage();
                }

                // 2- Send query
                $query = "INSERT INTO products (name, price, stock, photo, description)
                                   VALUES (:name, :price, :stock, :photo, :description)";
                $stat = $conn->prepare($query);

                $data = [
                        ':name' => $_POST['name'],
                        ':price' => $_POST['price'],
                        ':stock' => $_POST['stock'],
                        ':photo' => $photo_path,
                        ':description' => $_POST['description']
                ];

                $stat->execute($data);
                
                // Close connection
                

                echo '<div class="alert alert-success" role="alert">
                        The product has been saved!
                      </div>';
            }
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="mb-3">
                <label class="form-label">Product Price</label>
                <input type="text" class="form-control" name="price">
            </div>

            <div class="mb-3">
                <label class="form-label">Product Stock</label>
                <input type="text" class="form-control" name="stock">
            </div>

            <div class="mb-3">
                <label class="form-label">Product Description</label>
                <textarea type="text" class="form-control" name="description" rows="5"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Product Photo</label>
                <input class="form-control" type="file" id="formFile" name="photo">
            </div>

            <button type="submit" name="saveBTN" class="btn btn-primary mt-3">Save</button>
        </form>
    </div>
</main>
<?php require 'partials/footer.php'?>
