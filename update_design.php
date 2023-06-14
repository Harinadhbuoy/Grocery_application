<?php include("connection.php");
$id =  $_GET['id'];

$query = "SELECT * FROM FORM where id= '$id'";
$data = mysqli_query($conn, $query);

$result = mysqli_fetch_assoc($data);

?>


<form action="#" method="POST">
            <div class="login-form">
                <h3>login now</h3>
                <input type="text" placeholder="your name" value="<?php echo $result['full_name']; ?>" class="box" name="full_name" required>
                <input type="email" placeholder="your email"  value="<?php echo $result['email']; ?>" class="box" name="email" required>
                <input type="password" placeholder="your passcode"  value="<?php echo $result['passcode']; ?>"class="box" name="pwd" required>
                <input type="tel" placeholder="phone number"  value="<?php echo $result['pnumber']; ?>" class="box" name="p_number" required>

                <p>forgot your passcode <a href="#" >Click Here</a></p>
                <p>Don't have an account <a href="#" >Create account</a></p>

                <input type="submit" value="update" class="btn" name="update">
            </form>

            <?php
if($_POST['update'])
{
   $full_name = $_POST['full_name'];
   $email     = $_POST['email'];
   $passcode  = $_POST['pwd'];
   $pnumber   = $_POST['p_number'];
   
      $query ="UPDATE FORM set full_name='$full_name',email='$email',passcode='$passcode',pnumber='$pnumber' WHERE id='$id'";

      $data = mysqli_query($conn,$query);

      if($data)
      {
       echo "<script>alert('record updated');</script>";
       ?>
       <meta http-equiv = "refresh" content = "0; url = http://localhost/Grocery_application/admin_panel.php?#" />

       <?php
      }
      else
      {
        echo "<script>alert('failed to update record');</script>";
      } 
}   
?>            