<?php
include("connection.php");

if($_POST['login'])
{
    //echo "boom";
    $email_b    = $_POST['email'];
    $passcode_b = $_POST['pwd'];

    $email = mysqli_real_escape_string($conn,$email_b);
    $passcode = mysqli_real_escape_string($conn,$passcode_b);

    //echo $email;
    //echo $passcode;
 
    $query = "SELECT * FROM form WHERE email='$email' ";

    $result = mysqli_query($conn, $query);

    //print_r($result);

    if($result)
    {
        $row = mysqli_fetch_assoc($result);
        
        $login_status = $row['status'];

        if($login_status == 1)
        {
            echo "<script>
          alert('admin login successful');
          window.location.href='admin_panel.php';
          </script>";
        }

        elseif($login_status == 0)
        {
            echo "<script>
          alert('user login successful');
          window.location.href='form.php';
          </script>";
        }
        else
        {
            ?>
            <meta http-equiv = "refresh" content = "0; url = http://localhost/crud/page.php />

            <?php
        }
    }
    else
    {
        ?>
            <meta http-equiv = "refresh" content = "0; url = http://localhost/crud/page.php />

            <?php
    }    
}
else
{
    echo "you gonna succed";
    ?>
       <meta http-equiv = "refresh" content = "0; url = http://localhost/crud/page.php />

       <?php
}



?>




<?php
if($_POST['submit'] == 'Logout')
{
    echo "<script>
    alert('user login successful');
    window.location.href='form.php';
    </script>";
}
?>
