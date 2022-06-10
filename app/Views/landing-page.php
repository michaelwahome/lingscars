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
        <a href="http://localhost:8080/overall_catalogue"><input type="button" value="Shop now" class="btn btn-dark"></a>
    </section>
    
     <!-- this section contains the main picture for the page -->
     <section class=" bottom-center-page">
        <div class="row">
            <div class="bottom-center-images">
                <div class="bottom-center-image">
                    <a href="http://localhost:8080/sedan_catalogue"><img src="../images/center-image-one.png" alt=""></a>
                </div>
                <div class="bottom-center-image">
                <a href="http://localhost:8080/suv_catalogue"><img src="../images/center-image-two.png" alt=""></a>
                </div>
                <div class="bottom-center-image">
                    <a href="http://localhost:8080/bike_catalogue"><img src="../images/center-image-three.png" alt=""></a>
                </div>
            </div>
        </div>
    </section>

    <!-- this section contains the offers of the day -->
    <section class="offers-of-the-day">
        <div class="row">
            <div class="offers-of-day-background">
                <div class="offers-of-day-top">
                    <div class="words">
                        <h1><b>The Best Offer Today</b></h1>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="frame-and-price">
                    <div class="part-one">
                        <div class="frame-part">
                        <a href="http://localhost:8080/sedan_catalogue"><img src="../images/frame.png" alt=""></a>
                        </div>
                        <div class="price-part">
                            <p class="vehicles">Vehicles, Family</p>
                            <p class="sports"><b>Sports, Utility Vehicle,<br>Limited Edition</b></p>
                            <div class="button-and-strike-through">
                                <input type="button" class="btn btn-danger discount-price" value="20%">
                                <p><b>€1000</b></p>
                            </div>
                            <p class="euro">€800</p>
                        </div>
                    </div>

                    <div class="part-two">
                        <div class="frame-part">
                        <a href="http://localhost:8080/sedan_catalogue"><img src="../images/frame.png" alt=""></a>
                        </div>
                        <div class="price-part">
                            <p class="vehicles">Vehicles, Family</p>
                            <p class="sports"><b>Sports, Utility Vehicle,<br>Limited Edition</b></p>
                            <div class="button-and-strike-through">
                                <input type="button" class="btn btn-danger discount-price" value="20%">
                                <p><b>€1000</b></p>
                            </div>
                            <p class="euro">€800</p>
                        </div>
                    </div>

                    <div class="part-three">
                        <div class="frame-part">
                        <a href="http://localhost:8080/sedan_catalogue"><img src="../images/frame.png" alt=""></a>
                        </div>
                        <div class="price-part">
                            <p class="vehicles">Vehicles, Family</p>
                            <p class="sports"><b>Sports, Utility Vehicle,<br>Limited Edition</b></p>
                            <div class="button-and-strike-through">
                                <input type="button" class="btn btn-danger discount-price" value="20%">
                                <p><b>€1000</b></p>
                            </div>
                            <p class="euro">€800</p>
                        </div>

                </div>
            </div>
        </div>
    </section>

    <!-- this section features top products -->
    <section class="top-products">
        <h3><b>Top Products</b></h3>
        <div class="feature-top-products">
            <div class="feature-top-product">
                <div class="feature-top-image">
                <a href="http://localhost:8080/sedan_catalogue"><img src="../images/feature-car.png" alt=""></a>
                </div>
                <div class="feature-top-words">
                    <p class="vehicles">Sports car, Highly<br>Rated</p>
                    <p class="sports"><b>Premier Sports Car</b></p>
                    <div class="button-and-strike-through">
                        <input type="button" class="btn btn-danger" value="20%">
                        <p><b>€2000</b></p>
                    </div>
                    <p class="euro">€1500</p>
                </div>
            </div>

            <div class="feature-top-product">
                
                <div class="feature-top-image">
                <a href="http://localhost:8080/sedan_catalogue"><img src="../images/feature-car.png" alt=""></a>
                </div>
                <div class="feature-top-words">
                    <p class="vehicles">Sports car, Highly<br>Rated</p>
                    <p class="sports"><b>Premier Sports Car</b></p>
                    <div class="button-and-strike-through">
                        <input type="button" class="btn btn-danger" value="20%">
                        <p><b>€2000</b></p>
                    </div>
                    <p class="euro">€1500</p>
                </div>
            </div>

            <div class="feature-top-product">
                <div class="feature-top-image">
                <a href="http://localhost:8080/sedan_catalogue"><img src="../images/feature-car.png" alt=""></a>
                </div>
                <div class="feature-top-words">
                    <p class="vehicles">Sports car, Highly<br>Rated</p>
                    <p class="sports"><b>Premier Sports Car</b></p>
                    <div class="button-and-strike-through">
                        <input type="button" class="btn btn-danger" value="20%">
                        <p><b>€2000</b></p>
                    </div>
                    <p class="euro">€1500</p>
                </div>
            </div>
        </div>
    </section>

    <?php $this->endSection();?>
