<?php 
// include("manage_cart.php");
include("connection.php");
?>
<!DOCTYPE html>
<head>
  <title>meat products</title>

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<header class="header">
<a href="#" class="logo"> <i class="fa fa-shopping-basket"></i> Grocery </a>
     <h1 class="heading">meat <span>products </span> </h1>
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
                    <img src="image/crab.png">
                    <h1>fresh crab</h1>
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
                    <input type="hidden" name="Item_Name" value="fresh crab">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>
                <br>
                <br>
                <br>

                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/fish.png">
                    <h1>fresh fish</h1>
                    <div class="price">RS.120</div>
                    <span class="Qty">1kg</span>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <button type="submit" name="Add_to_cart" class="btn">add to cart</button>
                    <input type="hidden" name="Item_Name" value="fresh fish">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>
                <br>
                <br>
                <br>

                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/prawns.png">
                    <h1>prawns</h1>
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
                    <input type="hidden" name="Item_Name" value="prawns">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>
                <br>
                <br>
                <br>
               
                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/chiken-nuggets.png">
                    <h1>chiken nuggets</h1>
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
                    <input type="hidden" name="Item_Name" value="chiken nuggets">
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
                    <img src="image/eggs.png">
                    <h1>eggs</h1>
                    <div class="price">Rs.120</div>
                    <span class="Qty">1kg</span>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <button type="submit" name="Add_to_cart" class="btn">add to cart</button>
                    <input type="hidden" name="Item_Name" value="eggs">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>
                <br>
                <br>
                <br>

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
                <br>
                <br>
                <br>
                
                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/cart-img-3.png">
                    <h1>fresh chiken</h1>
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
                    <input type="hidden" name="Item_Name" value="fresh chiken">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>
                <br>
                <br>
                <br> 
                
                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/fish.png">
                    <h1>fish</h1>
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
                    <input type="hidden" name="Item_Name" value="fish">
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
