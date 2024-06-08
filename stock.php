<?php
@include 'config.php';

if(isset($_POST['update_stock'])){
   $product_id = $_POST['product_id'];
   $new_stock = $_POST['new_stock'];

   $update_query = mysqli_query($conn, "UPDATE `products` SET stock = '$new_stock' WHERE id = '$product_id'") or die('query failed');

   if($update_query){
      $message[] = 'Stock updated successfully';
   } else {
      $message[] = 'Stock update failed';
   }
}

$select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Stock Management</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<?php
if(isset($message)){
   foreach($message as $msg){
      echo '<div class="message"><span>'.$msg.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
}
?>

<?php include 'header.php'; ?>

<div class="container">
   <section class="stock-management">
      <h1 class="heading">Manage Stock</h1>

      <table>
         <thead>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Current Stock</th>
            <th>Update Stock</th>
         </thead>
         <tbody>
            <?php while($row = mysqli_fetch_assoc($select_products)) { ?>
            <tr>
               <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
               <td><?php echo $row['name']; ?></td>
               <td><?php echo $row['stock']; ?></td>
               <td>
                  <form action="" method="post">
                     <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                     <input type="number" name="new_stock" min="0" value="<?php echo $row['stock']; ?>" required>
                     <input type="submit" name="update_stock" value="Update" class="btn">
                  </form>
               </td>
            </tr>
            <?php } ?>
         </tbody>
      </table>
   </section>
</div>

<script src="js/script.js"></script>

</body>
</html>
