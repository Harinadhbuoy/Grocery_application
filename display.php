<html>
<head>
    <title>Display</title>
</head>
</html>


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
    <h2>Displaying All Records</h2>
    <table border=1 cellspacing="5">
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