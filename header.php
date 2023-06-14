

<!DOCTYPE html>
<html>
    <head>
        <title>Online grocery application</title>
        <link rel="icon" typr="image/icon" href="image/favicon.png">

        <!-- code for font awesome cdn-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- code for font awesome cdn-->

        <!-- code for linking css file -->
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- code for linking css file -->
        
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


    </head>
    <body>

        <!-- code for header section -->
        <header class="header">
            <a href="#" class="logo"> <i class="fa fa-shopping-basket"></i> Grocery </a>
           
            <nav class="navbar">
                <a href="#home">home</a>
                <a href="#features">features</a>
                <a href="#products">products</a>
                <a href="#categories">categories</a>
                <a href="#review">review</a>
                <a href="#blogs">blogs</a>
            </nav> 

            <div class="icons">
                <div class="fa fa-bars" id="menu-btn"></div>
                <div class="fa fa-search" id="search-btn"></div>
                <div class="fa fa-shopping-cart" id="cart-btn"></div>
                <div class="fa fa-user" id="login-btn"></div>
            </div>

            <form class="search-form">
                <input type="search" id="search-box" placeholder="Search here....">
                <label form="search-box" class="fa fa-search"></label>
            </form>

            <div>
                <a href="#" class="btn">My cart(0)</a>
            </div>   


            <form action="#" method="POST">
            <div class="login-form">
                <h3>login now</h3>
                <input type="text" placeholder="your name" class="box" name="full_name" required>
                <input type="email" placeholder="your email" class="box" name="email" required>
                <input type="password" placeholder="your passcode" class="box" name="pwd" required>
                <input type="tel" placeholder="phone number" class="box" name="p_number" required>

                <p>forgot your passcode <a href="#" >Click Here</a></p>
                <p>Don't have an account <a href="#" >Create account</a></p>

                <input type="submit" value="login" class="btn" name="login">
            </form>
</header>
</html>