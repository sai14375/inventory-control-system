<?php
include 'db.php';

$id = $_GET['id'];

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $sql = "UPDATE products 
            SET product_name='$name',
                quantity='$quantity',
                price='$price'
            WHERE product_id=$id";

    $conn->query($sql);

    header("Location: view_stock.php");
    exit();
}

$result = $conn->query("SELECT * FROM products WHERE product_id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Edit Product</h2>

    <form method="POST">
        Product Name:<br>
        <input type="text" name="name" 
               value="<?php echo $row['product_name']; ?>"><br><br>

        Quantity:<br>
        <input type="number" name="quantity" 
               value="<?php echo $row['quantity']; ?>"><br><br>

        Price:<br>
        <input type="number" step="0.01" name="price" 
               value="<?php echo $row['price']; ?>"><br><br>

        <input type="submit" name="update" value="Update Product">
    </form>

    <br>
    <a href="view_stock.php">Back</a>
</div>

</body>
</html>