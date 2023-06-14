<?php 
// include("manage_cart.php");
include("connection.php");
?>
<!DOCTYPE html>
<head>
  <title>fruits</title>

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<header class="header">
<a href="#" class="logo"> <i class="fa fa-shopping-basket"></i> Grocery </a>
     <h1 class="heading">fresh <span>fruits </span> </h1>
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
                <br>
                <br>
                <br>

                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/apple.png">
                    <h1>apple</h1>
                    <div class="price">RS.120</div>
                    <span class="Qty">1kg</span>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <button type="submit" name="Add_to_cart" class="btn">add to cart</button>
                    <input type="hidden" name="Item_Name" value="apple">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>
                <br>
                <br>
                <br>

                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/banana.png">
                    <h1>banana</h1>
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
                    <input type="hidden" name="Item_Name" value="banana">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>
                <br>
                <br>
                <br>
               
                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/cart-img-1.png">
                    <h1>watermelon</h1>
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
                    <input type="hidden" name="Item_Name" value="watermelon">
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
                    <img src="image/kiwi.png">
                    <h1>fresh kiwi</h1>
                    <div class="price">Rs.120</div>
                    <span class="Qty">1kg</span>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <button type="submit" name="Add_to_cart" class="btn">add to cart</button>
                    <input type="hidden" name="Item_Name" value="fresh kiwi">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>
                <br>
                <br>
                <br>

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
                <br>
                <br>
                <br>
                
                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/muskmelon.png">
                    <h1>muskmelon</h1>
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
                    <input type="hidden" name="Item_Name" value="muskmelon">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>
                <br>
                <br>
                <br> 
                
                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/strawberry.png">
                    <h1>strawberry</h1>
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
                    <input type="hidden" name="Item_Name" value="strawberry">
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
