<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet"> 
    <link href="css/landing-page-style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <title>Lings Cars</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!-- this section is the one above the navigation -->
    <section class="top">

        <div class="row">
            <div class="top-bar">
                <p><b>SALE 30%</b>NEW ARRIVAL</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
            <div class="dp-ellipse">
                    <img src="images/man.jpg" alt="">
                </div>
            </div>

            <div class="col">
                <input type="button" value="log in/sign up" class="btn btn-primary">
                <!-- <i class="fa fa-shopping-basket" aria-hidden="true"></i> -->
            </div>
        </div>
        <div class="row">
            <div class="navbar-main">
                <div class="menu-icon">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <div class="container-fluid">
                    <div class="navbar-brand">
                        <a href="#">Home</a>
                        <a href="#">About</a>
                        <a href="#">Contact</a>
                        <a href="#">Shop</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- this section contains the main picture for the page -->
    <section class="center-page">
        <div class="row">
            <div class="main-image">
                <img src="images/main-image.png" alt="">
            </div>
        </div>
        <a href="http://localhost:8080/overall_catalogue"><input type="button" value="Shop now" class="btn btn-dark"></a>
    </section>
    
     <!-- this section contains the main picture for the page -->
     <section class=" bottom-center-page">
        <div class="row">
            <div class="bottom-center-images">
                <div class="bottom-center-image">
                    <a href="http://localhost:8080/sedan_catalogue"><img src="images/center-image-one.png" alt=""></a>
                </div>
                <div class="bottom-center-image">
                <a href="http://localhost:8080/suv_catalogue"><img src="images/center-image-two.png" alt=""></a>
                </div>
                <div class="bottom-center-image">
                    <a href="http://localhost:8080/bike_catalogue"><img src="images/center-image-three.png" alt=""></a>
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
                        <a href="http://localhost:8080/sedan_catalogue"><img src="images/frame.png" alt=""></a>
                        </div>
                        <div class="price-part">
                            <p class="vehicles">Vehicles, Family</p>
                            <p class="sports"><b>Sports, Utility Vehicle,<br>Limited Edition</b></p>
                            <div class="button-and-strike-through">
                                <input type="button" class="btn btn-danger" value="20%">
                                <p><b>€1000</b></p>
                            </div>
                            <p class="euro">€800</p>
                        </div>
                    </div>

                    <div class="part-two">
                        <div class="frame-part">
                        <a href="http://localhost:8080/sedan_catalogue"><img src="images/frame.png" alt=""></a>
                        </div>
                        <div class="price-part">
                            <p class="vehicles">Vehicles, Family</p>
                            <p class="sports"><b>Sports, Utility Vehicle,<br>Limited Edition</b></p>
                            <div class="button-and-strike-through">
                                <input type="button" class="btn btn-danger" value="20%">
                                <p><b>€1000</b></p>
                            </div>
                            <p class="euro">€800</p>
                        </div>
                    </div>

                    <div class="part-three">
                        <div class="frame-part">
                        <a href="http://localhost:8080/sedan_catalogue"><img src="images/frame.png" alt=""></a>
                        </div>
                        <div class="price-part">
                            <p class="vehicles">Vehicles, Family</p>
                            <p class="sports"><b>Sports, Utility Vehicle,<br>Limited Edition</b></p>
                            <div class="button-and-strike-through">
                                <input type="button" class="btn btn-danger" value="20%">
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
                <a href="http://localhost:8080/sedan_catalogue"><img src="images/feature-car.png" alt=""></a>
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
                <a href="http://localhost:8080/sedan_catalogue"><img src="images/feature-car.png" alt=""></a>
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
                <a href="http://localhost:8080/sedan_catalogue"><img src="images/feature-car.png" alt=""></a>
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

    <footer>
        <div class="footer-words">
            <h1 class="follow"><b>Follow Our Socials</b></h1>
         </div>
        <div class="footer-icons">
            <img src="images/social-media-icons.png" alt="">
        </div>
        <div class="footer-blocks">
            <div class="footer-block">
                <div>
                    <i class="fa fa-archive" aria-hidden="true"></i>
                </div>
                <div>
                    <h1><b>Free Shipping</b></h1>
                </div>
                <div>
                    <p><b>On all Orders</b></p>
                </div>
            </div>

            <div class="footer-block">
                <div>
                    <i class="fa fa-cloud" aria-hidden="true"></i>
                </div>
                <div>
                    <h1><b>Secure Payment</b></h1>
                </div>
                <div>
                    <p><b>All cards accepted</b></p>
                </div>
            </div>

            <div class="footer-block">
                <div>
                    <i class="fa fa-headphones" aria-hidden="true"></i>
                </div>
                <div>
                    <h1><b>Online Support</b></h1>
                </div>
                <div>
                    <p><b>Technical Support</b></p>
                </div>
            </div>

            <div class="footer-block">
                <div>
                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                </div>
                <div>
                    <h1><b>Big Savings</b></h1>
                </div>
                <div>
                    <p><b>save a lot with<br>these deals</b></p>
                </div>
            </div>
            
        </div>
    </footer>

</body>
</html>
