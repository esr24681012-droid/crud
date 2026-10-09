<?php include'./includes/header.php';
//show code
$id=$_GET['id'];
$sql="SELECT * FROM `products` WHERE id=$id";
$result=mysqli_query($conn,$sql); //الداتا الل راجعه على هيئه object محتاج احولها ل assosative array عشان اعرف اتعامل معاها
$product=mysqli_fetch_assoc($result);



?>

        <form action="" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name :</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $product['name'] ?>">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description :</label>
                <textarea type="text" class="form-control" id="description" name="description" ><?= $product['description'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price :</label>
                <input type="number" class="form-control" id="price" name="price" value=<?= $product['price'] ?>>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-warning w-100">Update Product</button>
            </div>
        </form>
    </div>
</div>


<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    // echo $_POST['name'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $description=$_POST['description'];
    // echo $name; //for testing
    $sql="UPDATE `products` SET `name`='$name',`price`='$price',`description`='$description' WHERE id=$id";
    mysqli_query($conn,$sql);
    header("location:index.php");

}

?>


<?php include'./includes/footer.php'?>