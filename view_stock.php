<?php
include 'db.php';
$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Stock</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Current Stock Details</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php
        while($row = $result->fetch_assoc()){

            $status = "";
            $color = "";

            if($row['quantity'] <= 5){
                $status = "Low Stock";
                $color = "style='color:red; font-weight:bold;'";
            } else {
                $status = "In Stock";
                $color = "style='color:green; font-weight:bold;'";
            }

            echo "<tr>
                    <td>".$row['product_id']."</td>
                    <td>".$row['product_name']."</td>
                    <td>".$row['quantity']."</td>
                    <td>".$row['price']."</td>
                    <td $color>$status</td>
                    <td>
                        <a href='edit_product.php?id=".$row['product_id']."'>Edit</a> |
                        <a href='delete_product.php?id=".$row['product_id']."' 
                           onclick=\"return confirm('Are you sure?');\">
                           Delete
                        </a>
                    </td>
                  </tr>";
        }
        ?>
    </table>

    <br>
    <a href="dashboard.php">Back to Dashboard</a>
</div>

</body>
</html>