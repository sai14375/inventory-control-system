<?php
include 'db.php';

// Total Products
$totalProductsResult = $conn->query("SELECT COUNT(*) as total FROM products");
$totalProducts = $totalProductsResult->fetch_assoc()['total'];

// Total Stock Quantity
$totalStockResult = $conn->query("SELECT SUM(quantity) as total_stock FROM products");
$totalStock = $totalStockResult->fetch_assoc()['total_stock'];
if($totalStock == null) $totalStock = 0;

// Low Stock Count (quantity <=5)
$lowStockResult = $conn->query("SELECT COUNT(*) as low_stock FROM products WHERE quantity <= 5");
$lowStock = $lowStockResult->fetch_assoc()['low_stock'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inventory Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="dashboard">

    <h1>Inventory Control Dashboard</h1>

    <div style="margin-top:30px;">
        <p><strong>Total Products:</strong> <?php echo $totalProducts; ?></p>
        <p><strong>Total Stock Quantity:</strong> <?php echo $totalStock; ?></p>
        <p style="color:red;"><strong>Low Stock Items:</strong> <?php echo $lowStock; ?></p>
    </div>

    <hr style="width:50%; margin:20px auto;">

    <div style="margin-top:20px;">

        <p><a href="add_product.php">Add Product</a></p>

        <p><a href="view_stock.php">View Stock</a></p>

        <p><a href="sale.php">Sell Product</a></p>

        <p><a href="purchase.php">Purchase Product</a></p>

        <p><a href="index.php" style="color:red;">Logout</a></p>

    </div>

</div>

</body>
</html>