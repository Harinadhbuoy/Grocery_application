<?php 
// include("manage_cart.php");
include("connection.php");
?>
<!DOCTYPE html>
<head>
  <title>dairy products</title>

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<header class="header">
<a href="#" class="logo"> <i class="fa fa-shopping-basket"></i> Grocery </a>
     <h1 class="heading">dairy <span>products </span> </h1>
     <a href="#" class="logo"> <i class="fa fa-shopping-basket"></i> Grocery </a>
</header>
<br>
<br>
<br>


<section class="products" id="products">
           <h1 class="heading">our <span>products</span></h1>

           <form action="manage_cart.php" method="POST">
           <div class="swiper product-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="image/cheese.png">
                    <h1>fresh cheese</h1>
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
                    <input type="hidden" name="Item_Name" value="fresh cheese">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>
                <br>
                <br>
                <br>

                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/butter.png">
                    <h1>fresh butter</h1>
                    <div class="price">RS.120</div>
                    <span class="Qty">1kg</span>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <button type="submit" name="Add_to_cart" class="btn">add to cart</button>
                    <input type="hidden" name="Item_Name" value="fresh butter">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>
                <br>
                <br>
                <br>

                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/icecream.png">
                    <h1>ice-cream</h1>
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
                    <input type="hidden" name="Item_Name" value="ice-cream">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>
                <br>
                <br>
                <br>
               
                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/lassi.png">
                    <h1>sweet lassi</h1>
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
                    <input type="hidden" name="Item_Name" value="sweet lassi">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>
                </div>
                <br>
                <br>

           <form action="manage_cart.php" method="POST">
           <div class="swiper product-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="image/milk.png">
                    <h1>fresh milk</h1>
                    <div class="price">Rs.120</div>
                    <span class="Qty">1kg</span>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <button type="submit" name="Add_to_cart" class="btn">add to cart</button>
                    <input type="hidden" name="Item_Name" value="fresh milk">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>
                <br>
                <br>
                <br>

                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/milk-chocolate.png">
                    <h1>milk chocolate</h1>
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
                    <input type="hidden" name="Item_Name" value="milk chocoolate">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>
                <br>
                <br>
                <br>
                
                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/burfi.png">
                    <h1>burfi sweet</h1>
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
                    <input type="hidden" name="Item_Name" value="burfi sweet">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>
                <br>
                <br>
                <br> 
                
                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/paneer.png">
                    <h1>fresh paneer</h1>
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
                    <input type="hidden" name="Item_Name" value="fresh paneer">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>

            </div>

           </div>

</section>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script type="text/javascript" src="script.js"></script>    

</body>
</html>
