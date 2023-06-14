<?php
session_start();
?>

<html>
<head>
    <title>admin panel</title>

    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body>

<header class="header">
<a href="#" class="logo"> <i class="fa fa-shopping-basket"></i> Grocery </a>
     <h1 class="heading">Welcom <span>admin </span> </h1>

    <nav class="navbar">
                <a href="#manage products">manage products</a>
                <a href="#manage users">manage users</a>
                <a href="#insert product">insert product</a>
                <a href="#orders">orders</a>
    </nav>     
    <a href="logout.php" class="btn">logout</a>   

</header>
</body>
</html>

<section class="home" id="manage products">
<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM PRODUCTS2";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

//echo $total;

if($total != 0)
{
    ?>
    <div class="container">
        <div class="cart_table">
    <table class="table1" cellspacing="5">
        <tr>
        <th>id</th>    
        <th>product name</th>    
        <!-- <th>product image</th> -->
        <th>product quantity</th>
        <th>product price</th>
        <th>operations</th>
        </tr>

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
      echo " <tr>
             <td>$result[id]</td>
             <td>$result[pname]</td>
             <td>$result[qty]</td>
             <td>$result[price]</td>

           <td><a href='update_product.php?id=$result[id]'><input type='submit' value='update'></a>
           <a href='delete2.php?id=$result[id]'><input type='submit' value='delete' onclick = 'return checkdelete()'></a></td>
         </tr>";
    }
}    


else
{
    echo "no records found";
}
?>
</table>


<script>
    function checkdelete()
    {
        return confirm('are you sure to want to delete this record ?');
    }  

</script>
</section>

<section class="home" id="manage users">
<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM FORM";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

//echo $total;

if($total != 0)
{
    ?>
     <div class="container">
        <div class="cart_table">
    <table class="table1" cellspacing="5">
        <tr>
        <th>id</th>    
        <th>First name</th>
        <th>email</th>
        <th>phone number</th>
        <th>operations</th>
        </tr>

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo " <tr>
               <td>$result[id]</td>
               <td>$result[full_name]</td>
               <td>$result[email]</td>
               <td>$result[pnumber]</td>

               <td><a href='update_design.php?id=$result[id]'><input type='submit' value='update'></a>
               <a href='delete.php?id=$result[id]'><input type='submit' value='delete' onclick = 'return checkdelete()'></a></td>
        </tr>";
    }
}
else
{
    echo "no records found";
}
?>
</table>


<script>
    function checkdelete()
    {
        return confirm('are you sure to want to delete this record ?');
    }  

</script>
</section>



<section class="home" id="orders">
<div class="container">
  <div class="cart_table">
  <!-- <h1 class="heading"><span>Orders</span></h1> -->
   <table class="table" cellspacing="50">
         <tr>
          <th scope="col">S.NO</th>
          <th scope="col">Item name</th>
          <th scope="col">Item price</th>
          <th scope="col">Quantity</th>
          <th scope="col">status</th>
         </tr>
         </thead>
     <tbody class="text-center">
        <?php
        $total=0;
        if(isset($_SESSION['cart']))
        {
          foreach($_SESSION['cart'] as $key => $value)
          {
            $sr=$key+1;
            $total=$total+$value['Price'];
            echo"
               <tr>
               <td>$sr</td> 
               <td>$value[Item_Name]</td>
               <td>$value[Price]</td>
               <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10' </td>
               <td>Ordered</td>
               </tr>
            ";
          }
        }  
        ?>     
    </tbody>
    </table> 
    </div>
    </div>

    </section>   

    <!-- <a href="form.php" class="btn">close</a> -->
    <br>
    <br>
    <br>
    <br>
    <!-- <marquee><h2>thanks for shopping with us have a greate day .. visit again .. </h2></marquee> -->





<section class="home" id="insert product">
<div class="box1">
<form action="#" method="POST">
    <div class="boom">
            <div class="login-form">
                <h3>Insert item</h3>
                <input class="feild" type="text" placeholder="product name" name="pname" required><br>
                <input class="feild" type="file" name="images[]"  multiple/><br>
                <input class="feild" type="text" placeholder="quantity" name="qty" required><br>
                <input class="feild" type="price" placeholder="price" name="price" required><br>

                <input type="submit" value="insert" class="btn" name="insert">
                <br>
                <br>
 
            </form>
    <br>
    
</div>
</section>



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
       
       <meta http-equiv = "refresh" content = "0; url = http://localhost/crud/admin_panel.php" />

       <?php
      }
      else
      {
        echo "<script>alert('failed to insert data');</script>";
      } 
}   
?>


            