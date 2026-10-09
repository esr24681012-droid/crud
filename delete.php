<?php
include'./includes/config.php'; //عشان مش هربط header or footer
$id=$_GET['id'];
$sql="DELETE FROM `products` WHERE id=$id";
mysqli_query($conn,$sql);
header("location:index.php");

?>