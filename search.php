<?php 
// include("manage_cart.php");
include("connection.php");
?>
<!DOCTYPE html>
<head>
  <title>Search data</title>

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<header class="header">
<a href="#" class="logo"> <i class="fa fa-shopping-basket"></i> Grocery </a>
     <h1 class="heading">searched <span>data </span> </h1>
     <a href="#" class="logo"> <i class="fa fa-shopping-basket"></i> Grocery </a>
</header>

<section class="home" id="home">
    <div class="container">
         <!-- <h1 class="heading">Searched Data</h1> -->
    <?php     
      if(isset($_POST['submit']))
      {
        $search = $_POST['search'];

        $query = "SELECT * FROM products2 WHERE id like '%$search%' or pname like '%$search%' ";

        $query_run = mysqli_query($conn,$query);
      
    ?>
     <div class="container">
        <div class="cart_table">
    <table class="table2" cellspacing="5">
      <tr>
         <th scope="col">id</th>
         <th scope="col">pname</th>
         <th scope="col">qty</th>
         <th scope="col">price</th>
         <th scope="col">Add</th>
      </tr>
      </thead>
      <tbody class="text-center">
        <?php
         if(mysqli_num_rows($query_run)>0)
         {
            while($row = mysqli_fetch_array($query_run))
            {

        ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['pname']; ?></td>
            <td><?php echo $row['qty']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td>
            <form action='manage_cart.php' method='POST'>
                  <button name='Add to cart' class='btn'>add to cart</button>
                  <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
               </form>
               </td>
          </tr>
      <?php
        }
      }
      else
      {
        echo " <h3>Data not Found</h3> ";
      }
      ?>
      </tbody>
      </table>
      
    </div>
    <?php
    }
    ?>
</body>
</html>
