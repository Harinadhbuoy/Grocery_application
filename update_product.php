<?php include("connection.php");
$id =  $_GET['id'];

$query = "SELECT * FROM PRODUCTS2 where id= '$id'";
$data = mysqli_query($conn, $query);

$result = mysqli_fetch_assoc($data);

?>

<form action="#" method="POST">
            <div class="Product Insertion">
                <h3>Insert item</h3>
                <input type="text" placeholder="product name"  value="<?php echo $result['pname']; ?>" class="box" name="pname" required>
                <input type="file" name="images[]"  value="<?php echo $result['image']; ?>" multiple/>
                <input type="text" placeholder="quantity"  value="<?php echo $result['qty']; ?>" class="box" name="qty" required>
                <input type="price" placeholder="price"  value="<?php echo $result['price']; ?>" class="box" name="price" required>

                <input type="submit" value="update" class="btn" name="update">
            </form>



            <?php
if($_POST['update'])
{
   $product_name      = $_POST['pname'];
   $image             = $_POST['images[]'];
   $product_quantity  = $_POST['qty'];
   $product_price     = $_POST['price'];
   
      $query ="UPDATE PRODUCTS2 set pname='$product_name',image='$image',qty='$product_quantity',price='$product_price' WHERE id='$id'";

      $data = mysqli_query($conn,$query);

      if($data)
      {
       echo "<script>alert('record updated');</script>";
       ?>
       <meta http-equiv = "refresh" content = "0; url = http://localhost/Grocery_application/admin_panel.php"/>

       <?php
      }
      else
      {
        echo "<script>alert('failed to update record');</script>";
      } 
}   
?>             