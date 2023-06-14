<?php 
// include("manage_cart.php");
include("connection.php");
?>
<!DOCTYPE html>
<head>
  <title>vegitables</title>

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<header class="header">
<a href="#" class="logo"> <i class="fa fa-shopping-basket"></i> Grocery </a>
     <h1 class="heading">fresh <span>vegitables </span> </h1>
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
                    <img src="image/vegi1.png">
                    <h1>capsicom</h1>
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
                    <input type="hidden" name="Item_Name" value="capsicom">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>
                <br>
                <br>
                <br>

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
                <br>
                <br>
                <br>

                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/pumpkin.png">
                    <h1>pumpkin</h1>
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
                    <input type="hidden" name="Item_Name" value="pumpkin">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>
                <br>
                <br>
                <br>
               
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
                <br>
                <br>

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
                <br>
                <br>
                <br>

                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/ladyfinger.png">
                    <h1>ladyfinger</h1>
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
                    <input type="hidden" name="Item_Name" value="ladyfinger">
                    <input type="hidden" name="Price" value="120/-">
                </div>
                </form>
                <br>
                <br>
                <br>
                
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
                <br>
                <br>
                <br> 
                
                <div class="swiper-slide box">
                <form action="manage_cart.php" method="POST">
                    <img src="image/beetroot.png">
                    <h1>beetroot</h1>
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
                    <input type="hidden" name="Item_Name" value="beetroot">
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
