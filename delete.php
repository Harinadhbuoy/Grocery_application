<?php
include("connection.php");

$id =  $_GET['id'];

$query = "DELETE FROM FORM WHERE id='$id'";
$data = mysqli_query($conn,$query);

if($data)
{
    echo "<script>alert('record deleted')</script>";
    ?>
       <meta http-equiv = "refresh" content = "0; url = http://localhost/Grocery_application/admin_panel.php" />
    <?php
}
else
{
    echo "<script>alert('record deleted')</script>";
}
?>