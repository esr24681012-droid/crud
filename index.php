<?php
include_once __DIR__ . '/includes/config.php';
include './includes/header.php';

$sql="SELECT * FROM `products`";
$products=mysqli_query($conn,$sql);

?>

<h3>all products</h3>
<a href="create.php" class="btn btn-primary my-3">Add Product</a>


<div
    class="table-responsive-md"
>
    <table
        class="table "
    >
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Discription</th>
                <th scope="col">Created-At</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>

            <tr class="">
                <td scope="col"><?= $product["id"] ?></td>
                <td scope="col"><?= $product["name"] ?></td>
                <td scope="col"><?= $product["price"] ?></td>
                <td scope="col"><?= $product["description"] ?></td>
                <td scope="col"><?= $product["created_at"] ?></td>
                <td scope="col">
                    <a href="show.php?id=<?= $product['id'] ?>" class="btn btn-success">show</a>
                    <a href="update.php?id=<?= $product['id'] ?>" class="btn btn-warning">update</a>
                    <a href="delete.php?id=<?= $product['id'] ?>" class="btn btn-danger">delete</a>
                </td>
            </tr>


            <?php endforeach ?>


        </tbody>
    </table>
</div>





<?php include './includes/footer.php' ?>
