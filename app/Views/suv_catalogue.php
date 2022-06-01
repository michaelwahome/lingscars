<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet"> 
    <link href="css/catalogue.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <title>Lings Cars</title>
</head>
<body>
    <div class="row">
            <div class="col">
                <div class="dp-ellipse">
                    <img src="images/man.jpg" alt="">
                </div>
            </div>
            <div class="col">
            <input onkeyup="search_car()" type="text" name="search" id="searchbar" class="search-bar" placeholder="search">
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
    <!-- this section is the one above the navigation -->
    <section class="top">

        <div class="row">
            <div class="top-bar">
                <p><b>SUV models</b></p>
            </div>
        </div>
    </section>    

    <section class="frames">
        <div class="row">
            <div class="frame-one">
                <h2><b>Description</b></h2>
                <p>This model is amazing. Features are even better than the last model. You will get maximum mileage from this. Enjoy the sleek new white color that is now available.<br>Reliable engine and amazing wheels that are sure to stand the test of time</p>
                <img src="images/frame1.png" alt="car">
            </div>
            <div class="frame-two">
                <h1><b>SUV Highlights</b></h1>
                <div class="image-and-words">
                    <div class="picture">
                        <img src="images/frame6.png" alt="">
                    </div>
                    <div class="words">
                        <h2><b>Toyota Highlander</b></h2>
                        <p>This model is amazing. Features are even better than the last model. You will get maximum mileage from this. Enjoy the sleek new white color that is now available. Reliable engine and amazing wheels that are sure to stand the test of time</p>
                        <div class="grey-and-black-words">
                            <p class="grey-words"><b>€1000</b></p>
                            <p class="black-words"><b>€800</b></p>
                        </div>
                        <input type="button" value="add to cart" class="btn btn-dark">
                    </div>
                </div>
            </div>
            <div class="frame-three">
                <div class="image-and-words">
                    <div class="words">
                        <h2><b>Range Rover Prado</b></h2>
                        <p>This model is amazing. Features are even better than the last model. You will get maximum mileage from this. Enjoy the sleek new white color that is now available. Reliable engine and amazing wheels that are sure to stand the test of time</p>
                        <div class="grey-and-black-words">
                            <p class="grey-words"><b>€1200</b></p>
                            <p class="black-words"><b>€900</b></p>
                        </div>
                        <input type="button" value="add to cart" class="btn btn-dark">
                    </div>
                    <div class="picture">
                        <img src="images/frame3.png" alt="car">
                    </div>
                </div>
            </div>
            <div class="frame-four">
                <div class="image-and-words">
                    <div class="picture">
                        <img src="images/frame4.png" alt="">
                    </div>
                    <div class="words">
                        <h2><b>Volkswagen Prado</b></h2>
                        <p>This model is amazing. Features are even better than the last model. You will get maximum mileage from this. Enjoy the sleek new white color that is now available. Reliable engine and amazing wheels that are sure to stand the test of time</p>
                        <div class="grey-and-black-words">
                            <p class="grey-words"><b>€1500</b></p>
                            <p class="black-words"><b>€700</b></p>
                        </div>
                        <input type="button" value="add to cart" class="btn btn-dark">
                    </div>
                </div>
            </div>
            <div class="frame-five">
                <div class="image-and-words">
                    <div class="words">
                        <h2><b>Toyota RAV4</b></h2>
                        <p>This model is amazing. Features are even better than the last model. You will get maximum mileage from this. Enjoy the sleek new white color that is now available. Reliable engine and amazing wheels that are sure to stand the test of time</p>
                        <div class="grey-and-black-words">
                            <p class="grey-words"><b>€2000</b></p>
                            <p class="black-words"><b>€1200</b></p>
                        </div>
                        <input type="button" value="add to cart" class="btn btn-dark">
                    </div>
                    <div class="picture">
                        <img src="images/frame5.png" alt="car">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function search_car() {
            let input = document.getElementById('searchbar').value
            input=input.toLowerCase();
            let x = document.getElementsByClassName('image-and-words');
            
            for (i = 0; i < x.length; i++) { 
                if (!x[i].innerHTML.toLowerCase().includes(input)) {
                    x[i].style.display="none";
                }
                else {
                    x[i].style.display="";                 
                }
            }
        }
    </script>
</body>
</html> 