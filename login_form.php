<!DOCTYPE html>
    <head>
        <title>login page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head> 
<body>

<header class="header">
<a href="#" class="logo"> <i class="fa fa-shopping-basket"></i> Grocery </a>
     <h1 class="heading">login <span>form </span> </h1>
     <a href="#" class="logo"> <i class="fa fa-shopping-basket"></i> Grocery </a>
</header>  
<br>


<div class="box1">
<form action="validate.php" method="POST">
     <div class="boom">
            <br> 
            <div class="login-form">
                <br>
                <br>
                <h3>login now</h3>
                <b>email</b>   :   <input class="feild" type="email" placeholder="your email" name="email" required><br>
              <b>passcode</b> : <input class="feild" type="password" placeholder="your passcode" name="pwd" required><br>

                <p>forgot your passcode <a href="#" class="feild">Click Here</a></p><br>
                <p>Don't have an account <a href="page.php" class="feild">Create account</a></p>

                <input class="btn" type="submit" name="login" value="login">
                <br>
                <br>
            </form>
            <br>
            </div>

    </div>
</body>
</html>

