<html>
<head>
    <title>Display</title>
</head>
</html>


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
    <h2>Displaying All Records</h2>
    <table border=1 cellspacing="5">
        <tr>
        <th>id</th>    
        <th>product name</th>    
        <th>product image</th>
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
             <td>$result[image]</td>
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