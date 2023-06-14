<?php
session_start();
error_reporting(0);
?>


<!DOCTYPE html>
<head>
    <title>Cart</title>

    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<header class="header">
<a href="#" class="logo"> <i class="fa fa-shopping-basket"></i> Grocery </a>
     <h1 class="heading">your <span>order </span> </h1>
     <a href="#" class="logo"> <i class="fa fa-shopping-basket"></i> Grocery </a>
</header>    

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
  <div class="cart_table">
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
    </div> 
    </tbody>
    </table> 
    <a href="form.php" class="btn">close</a>
    <br>
    <br>
    <br>
    <br>
    <marquee><h2>thanks for shopping with us have a greate day .. visit again .. </h2></marquee>
</body>
</html>