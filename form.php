<?php include("connection.php");
session_start();
?>
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

            <form action="search.php" method="POST">
                <input type="text" placeholder="Search here........" name="search">
                <button class="btn" name="submit">search</button>
            </form>

            <div>
                <?php
                  $count=0;
                  if(isset($_SESSION['cart']))
                  {
                    $count=count($_SESSION['cart']);
                  }
                ?>
                <a href="mycart.php" class="btn">My cart (<?php echo $count; ?>)</a>
            </div>   
            <!-- <a href="logout.php" class="btn">logout</a> -->


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
        <!-- code for header section -->



        <!-- code for banner section -->
        <section class="home" id="home">
            <div class="content">
                <h3>Fresh and <span>wholesale</span> products for you</h3>
                <p>This website is designed to buy grocery products easily and safely</p>

                <a href="shop.php" class="btn">shop now</a>
            </div>
        </section>
       <!-- code for banner section -->


       
       <!-- code for feartures section -->
       <section class="features" id="features">
            <h1 class="heading"> our <span>features</span></h1> 


            <div class="box-container">
                <div class="box">
                    <img src="image/feature-img-1.png">
                    <h3>fresh and wholesale</h3>
                    <p>our products are fresh and available at wholesale prices</p>

                    <a href="fresh_wholesale.php" class="btn">read more</a>
                </div>

                <div class="box">
                    <img src="image/feature-img-2.png">
                    <h3>free delivery</h3>
                    <p>our products are fresh and available at wholesale prices</p>

                    <a href="free_delivery.php" class="btn">read more</a>
                </div>

                <div class="box">
                    <img src="image/feature-img-3.png">
                    <h3>easy payments</h3>
                    <p>our products are fresh and available at wholesale prices</p>

                    <a href="easy_payments.php" class="btn">read more</a>
                </div>

            </div>

       </section>
       <!-- code for feature section -->

       
        <!-- code for products section -->
       <section class="products" id="products">
           <h1 class="heading">our <span>products</span></h1>

           <form action="manage_cart.php" method="POST">
           <div class="swiper product-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="image/product-1.png">
                    <h1>fresh orange</h1>
                    <div class="price">Rs.120</div>
                    <span class="Qty">1kg</span>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <button type="submit" name="Add_to_cart" class="btn">add to cart</button>
                    <input type="hidden" name="Item_Name" value="fresh orange">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>
     
                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/product-2.png">
                    <h1>fresh onion</h1>
                    <div class="price">RS.120</div>
                    <span class="Qty">1kg</span>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <button type="submit" name="Add_to_cart" class="btn">add to cart</button>
                    <input type="hidden" name="Item_Name" value="fresh onion">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>
                

               
                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/product-3.png">
                    <h1>fresh meat</h1>
                    <div class="price">RS.120</div>
                    <span class="Qty">1kg</span>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <button type="submit" name="Add_to_cart" class="btn">add to cart</button>
                    <input type="hidden" name="Item_Name" value="fresh meat">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>

               
                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/product-4.png">
                    <h1>fresh cabbage</h1>
                    <div class="price">RS.120</div>
                    <span class="Qty">1kg</span>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <button type="submit" name="Add_to_cart" class="btn">add to cart</button>
                    <input type="hidden" name="Item_Name" value="fresh cabbage">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>

            </div>

           </div>


           <form action="manage_cart.php" method="POST">
           <div class="swiper product-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="image/product-5.png">
                    <h1>fresh potatos</h1>
                    <div class="price">Rs.120</div>
                    <span class="Qty">1kg</span>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <button type="submit" name="Add_to_cart" class="btn">add to cart</button>
                    <input type="hidden" name="Item_Name" value="fresh potatos">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>

                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/product-6.png">
                    <h1>fresh avacado</h1>
                    <div class="price">RS.120</div>
                    <span class="Qty">1kg</span>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <button type="submit" name="Add_to_cart" class="btn">add to cart</button>
                    <input type="hidden" name="Item_Name" value="fresh avacado">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>

                
                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/product-7.png">
                    <h1>fresh carrot</h1>
                    <div class="price">Rs.120</div>
                    <span class="Qty">1kg</span>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <button type="submit" name="Add_to_cart" class="btn">add to cart</button>
                    <input type="hidden" name="Item_Name" value="fresh carrot">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>

                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/product-8.png">
                    <h1>fresh lemons</h1>
                    <div class="price">Rs.120</div>
                    <span class="Qty">1kg</span>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <button type="submit" name="Add_to_cart" class="btn">add to cart</button>
                    <input type="hidden" name="Item_Name" value="fresh lemons">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>

            </div>

           </div>


       </section> 
       <!-- code for products section -->




       <!-- code for categories section -->
       <section class="categories" id="categories">
        <h1 class="heading">product <span>categories</span></h1>

        <div class="box-container">
            <div class="box">
                <img src="image/cat-1.png">
                <h3>vegetables</h3>
                <p>upto 25% off</p>
                <a href="vegitables.php" class="btn">shop now</a>
            </div>

            <div class="box">
                <img src="image/cat-2.png">
                <h3>fresh fruits</h3>
                <p>upto 25% off</p>
                <a href="fruits.php" class="btn">shop now</a>
            </div>

            <div class="box">
                <img src="image/cat-3.png">
                <h3>dairy products</h3>
                <p>upto 25% off</p>
                <a href="dairy_products.php" class="btn">shop now</a>
            </div>

            <div class="box">
                <img src="image/cat-4.png">
                <h3>fresh meat</h3>
                <p>upto 25% off</p>
                <a href="meat_products.php" class="btn">shop now</a>
            </div>
        </div>
       </section>
    <!-- code for categories section -->



    <!-- code for footer section -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
               <h3>Groco<i class="fa fa-shopping-basket"></i></h3>
               <p>Feel free to follow us our social media handlers</p> 
               <div class="share">
                  <a href="#" class="fa fa-facebook"></a>
                  <a href="#" class="fa fa-twitter"></a>
                  <a href="#" class="fa fa-instagram"></a>
                  <a href="#" class="fa fa-linkedin"></a> 
               </div>

            </div>

            <div class="box">
                <h3>Contact info</h3>
                <a href="#" class="links"><i class="fa fa-phone"></i>+91 1234567890</a>
                <a href="#" class="links"><i class="fa fa-phone"></i>+91 2222287387</a>
                <a href="#" class="links"><i class="fa fa-envelope"></i>dummy@gmail.com</a>
                <a href="#" class="links"><i class="fa fa-map-marker"></i>AP,India</a>
 
            </div>

            
            <div class="box">
                <h3>Quick links</h3>
                <a href="#" class="links"><i class="fa fa-arrow-right"></i>home</a>
                <a href="#" class="links"><i class="fa fa-arrow-right"></i>features</a>
                <a href="#" class="links"><i class="fa fa-arrow-right"></i>products</a>
                <a href="#" class="links"><i class="fa fa-arrow-right"></i>categories</a>
 
            </div>

        </div>
    </section>
    


    <!-- code for footer section -->
    

       <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


        <script type="text/javascript" src="script.js"></script>    

    </body>
</html>




<?php
if($_POST['login'])
{
   $full_name = $_POST['full_name'];
   $email     = $_POST['email'];
   $passcode  = $_POST['pwd'];
   $pnumber   = $_POST['p_number'];

      $query ="INSERT INTO FORM (full_name,email,passcode,pnumber) VALUES('$full_name','$email','$passcode','$pnumber')";

      $data = mysqli_query($conn,$query);

      if($data)
      {
       echo "<script>alert('data inserted into database');</script>";
      }
      else
      {
        echo "<script>alert('failed to insert data');</script>";
      } 
}   
?>




