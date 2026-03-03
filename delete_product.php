<?php
include 'db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM products WHERE product_id = $id";
    $conn->query($sql);
}

header("Location: view_stock.php");
exit();
?>