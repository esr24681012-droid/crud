<?php include'./includes/header.php';

$id=$_GET['id'];
$sql="SELECT * FROM `products` WHERE id=$id";
$result=mysqli_query($conn,$sql); //الداتا الل راجعه على هيئه object محتاج احولها ل assosative array عشان اعرف اتعامل معاها
$product=mysqli_fetch_assoc($result) //convert object to assosative array;

?>



<div class="card mx-auto w-75">
    <div class="row mt-3">
        <div class="col-md-6 m-3">
            <h4><?= $product["name"] ?></h4>
            <p>price: <?= $product["price"]?></p>
            <p> added: <?= $product["created_at"] ?></p>
            <p> description:<?= $product["description"] ?></p>
            

            <a href="index.php" class="btn btn-primary">Back</a>
            <a href="update.php" class="btn btn-outline-secondary">Edit</a>

        </div>
    </div>
</div>



<?php include'./includes/footer.php'?>