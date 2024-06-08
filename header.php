<?php
// Ensure the database connection is established
$conn = mysqli_connect("localhost", "root", "", "order");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Execute the query to count the rows in the cart table
$select_rows = mysqli_query($conn, "SELECT * FROM `cart`");

if (!$select_rows) {
    die("Query failed: " . mysqli_error($conn));
}

$row_count = mysqli_num_rows($select_rows);
?>

<header class="header">
    <div class="flex">
        <a href="#" class="logo">Mushroom Delivery System</a>

        <nav class="navbar">
            
            <a href="products.php">view products</a>
        </nav>

        <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span></a>

        <div id="menu-btn" class="fas fa-bars"></div>
    </div>
</header>