<?php include'./includes/header.php'?>

<div class="card p-3 w-50 mx-auto">
    <div class="card-header text-center text-white bg-primary">
        <h3>Add New Product</h3>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name :</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description :</label>
                <textarea type="text" class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price :</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary w-100">Add New Product</button>
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
    $sql="INSERT INTO `products`(`name`, `price`, `description`) VALUES ('$name','$price','$description')";
    mysqli_query($conn,$sql);
    header("location:index.php");

}

?>


<?php include'./includes/footer.php'?>