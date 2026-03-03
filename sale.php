<?php
include 'db.php';

$message = "";

if(isset($_POST['submit'])){
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Check current stock
    $check = $conn->query("SELECT quantity FROM products WHERE product_id = $product_id");
    $row = $check->fetch_assoc();
    $current_stock = $row['quantity'];

    if($quantity > $current_stock){
        $message = "Not enough stock available!";
    } else {
        $sql = "UPDATE products 
                SET quantity = quantity - $quantity 
                WHERE product_id = $product_id";

        $conn->query($sql);
        $message = "Sale Recorded Successfully!";
    }
}

$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sell Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Sell Product</h2>

    <?php if($message != "") echo "<p style='color:red;'>$message</p>"; ?>

    <form method="POST">
        Product:<br>
        <select name="product_id" required>
            <?php
            while($row = $result->fetch_assoc()){
                echo "<option value='".$row['product_id']."'>".$row['product_name']." (Stock: ".$row['quantity'].")</option>";
            }
            ?>
        </select><br><br>

        Quantity:<br>
        <input type="number" name="quantity" required><br><br>

        <input type="submit" name="submit" value="Sell Product">
    </form>

    <br>
    <a href="dashboard.php">Back to Dashboard</a>
</div>

</body>
</html>