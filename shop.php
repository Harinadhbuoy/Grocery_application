<?php 
// include("manage_cart.php");
include("connection.php");
?>
<!DOCTYPE html>
<head>
  <title>products</title>

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<header class="header">
<a href="#" class="logo"> <i class="fa fa-shopping-basket"></i> Grocery </a>
     <h1 class="heading">our <span>products </span> </h1>
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



<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


        <script type="text/javascript" src="script.js"></script>    

</body>
</html>
