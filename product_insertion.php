<?php include("connection.php");?>

<form action="#" method="POST">
            <div class="Product Insertion">
                <h3>Insert item</h3>
                <input type="text" placeholder="product name" class="box" name="pname" required>
                <input type="file" name="images[]"  multiple/>
                <input type="text" placeholder="quantity" class="box" name="qty" required>
                <input type="price" placeholder="price" class="box" name="price" required>

                <input type="submit" value="insert" class="btn" name="insert">
            </form>



            <?php
if($_POST['insert'])
{
   $product_name     = $_POST['pname'];
   $image            = $_POST['images[]'];
   $product_quantity = $_POST['qty'];
   $product_price    = $_POST['price'];

      $query ="INSERT INTO PRODUCTS2 (pname,image,qty,price) VALUES('$product_name','$image','$product_quantity','$product_price')";

      $data = mysqli_query($conn,$query);

      if($data)
      {
       echo "<script>alert('data inserted into database');</script>";
       ?>
       
       <meta http-equiv = "refresh" content = "0; url = http://localhost/Grocery_application/display2.php" />

       <?php
      }
      else
      {
        echo "<script>alert('failed to insert data');</script>";
      } 
}   
?>

            