<?php 
    $session = session();

    $this->extend('/templates/main_template');

    $this->section('content');

    
 
?>
    <?php if(isset($_SESSION["user_details"])){ ?>
    <!-- this section is the one above the navigation -->
    <section class="top">

    <div class="row">
        <div class="top-bar">
            <p>Welcome, <?php echo $_SESSION["user_details"]["first_name"];?></p>
        </div>
    </div>
    </section> 

    <?php }  ?>

    <!-- this section contains the main picture for the page -->
    <section class="center-page">
        <div class="row">
            <div class="main-image">
                <img src="../images/main-image.png" alt="">
            </div>
        </div>
        <a href="/catalogue"><input type="button" value="Shop now" class="btn btn-dark primary-cta"></a>
    </section>
    
    <!-- this section contains the offers of the day -->
    <section class="offers-of-the-day">
        <div class="row">
            <div class="offers-of-day-background">
                <div class="offers-of-day-top">
                    <div class="words">
                        <h1><b>The Best Offers Today</b></h1>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="offers-vehicles">
                    <?php foreach($offers as $offer) { ?>
                        <div class="offers-vehicle">
                            <div class="feature-top-image">
                            <a href="/vehicle/<?php echo $offer['vehicle_id']; ?>"><img src="../public/uploads/<?php echo $offer['image']; ?>" alt=""></a>
                            </div>
                            <div class="feature-top-words">
                                <?php
                                    $discount = rand(10, 40);
                                    $fake_original_price = ($offer['unit_price'] * (100+$discount))/100;
                                ?>
                                <input type="button" class="btn btn-danger" value="<?php echo $discount ?>% off!">
                                <h4><?php echo $offer['vehicle_model']; ?></h4>
                                <h5>Old price: <b style="text-decoration: line-through;">€<?php echo $fake_original_price; ?></b></h5>
                                <h5>New price: <b>€<?php echo $offer['unit_price']; ?></b></h5>
                            </div>
                            <?php if(isset($_SESSION["user_details"])){  ?>
                                <a href="/vehicle/<?php echo $offer['vehicle_id']; ?>" class="btn-top-product">Add to Cart</a>
                            <?php } else{ ?>
                                <a href="/auth/register" class="btn-top-product">Add to Cart</a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

     <!-- this section contains the categories for the page -->
     <section class="bottom-center-page">
        <h3 style="font-size: 2.5em; margin-bottom: 30px;"><b>Vehicle Categories</b></h3>
        <div class="row">
            <div class="bottom-center-images">
                <div class="bottom-center-image">
                    <a href="/catalogue/categorycatalogue/1"><img src="../images/center-image-one.png" alt=""></a>
                </div>
                <div class="bottom-center-image">
                <a href="/catalogue/categorycatalogue/2"><img src="../images/center-image-two.png" alt=""></a>
                </div>
                <div class="bottom-center-image">
                    <a href="/catalogue/categorycatalogue/3"><img src="../images/center-image-three.png" alt=""></a>
                </div>
            </div>
        </div>
    </section>


    <!-- this section features top products -->
    <section class="top-products">
        <h3 style="font-size: 2.5em; margin-bottom: 30px;"><b>Top Vehicles</b></h3>
        <div class="feature-top-products">
            <?php foreach($top_products as $top_product) { ?>
                <div class="feature-top-product">
                    <div class="feature-top-image">
                    <a href="/vehicle/<?php echo $top_product['vehicle_id']; ?>"><img src="../public/uploads/<?php echo $top_product['image']; ?>" alt=""></a>
                    </div>
                    <div class="feature-top-words">
                        <h4><?php echo $top_product['vehicle_model']; ?></h4>
                        <h5>Price: <b>€<?php echo $top_product['unit_price']; ?></b></h5>
                        <p><?php echo $top_product['vehicle_description'] ?></p>
                    </div>
                    <?php if(isset($_SESSION["user_details"])){  ?>
                        <a href="/vehicle/<?php echo $top_product['vehicle_id']; ?>" class="btn-top-product">Add to Cart</a>
                    <?php } else{ ?>
                        <a href="/auth/register" class="btn-top-product">Add to Cart</a>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>

    <?php $this->endSection();?>
