<?php
include 'db.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $qty = $_POST['quantity'];
    $price = $_POST['price'];

    $sql = "INSERT INTO products(product_name, quantity, price)
            VALUES('$name','$qty','$price')";
    $conn->query($sql);

    echo "Product Added Successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

<h2>Add New Product</h2>

<form method="POST">
    Product Name:<br>
    <input type="text" name="name"><br><br>

    Quantity:<br>
    <input type="number" name="quantity"><br><br>

    Price:<br>
    <input type="number" name="price" step="0.01"><br><br>

    <input type="submit" name="submit" value="Add Product">
</form>

<br>
<a href="dashboard.php">Back to Dashboard</a>

</div>
</body>
</html>