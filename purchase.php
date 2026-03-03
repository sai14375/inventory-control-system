<?php
include 'db.php';

if(isset($_POST['submit'])){
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Increase stock
    $sql = "UPDATE products 
            SET quantity = quantity + $quantity 
            WHERE product_id = $product_id";

    $conn->query($sql);

    echo "Purchase Recorded & Stock Increased!";
}

$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Purchase Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Purchase Product</h2>

<form method="POST">
    Product:<br>
    <select name="product_id">
        <?php
        while($row = $result->fetch_assoc()){
            echo "<option value='".$row['product_id']."'>".$row['product_name']."</option>";
        }
        ?>
    </select><br><br>

    Quantity:<br>
    <input type="number" name="quantity" required><br><br>

    <input type="submit" name="submit" value="Add Stock">
</form>

<br>
<a href="dashboard.php">Back to Dashboard</a>
</div>

</body>
</html>