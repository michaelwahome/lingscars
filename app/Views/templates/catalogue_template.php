<?php $session = session(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet"> 
    
    <!--Fontawesome Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS -->
    <link href="../css/catalogue.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <link href="../css/main_template.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">

    <title>Lings Cars</title>
</head>
<body>
    <!-- <div class="container-fluid"> -->
        <header class="mb-5">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">LingsCars</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/overall_catalogue">Catalogue</a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="/sedan_catalogue" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sedan
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/sedan_catalogue">Toyota</a></li>
                                    <li><a class="dropdown-item" href="/sedan_catalogue">Honda</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="/sedan_catalogue">View All</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="/suv_catalogue" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    SUV
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/suv_catalogue">Toyota</a></li>
                                    <li><a class="dropdown-item" href="/suv_catalogue">Range Rover</a></li>
                                    <li><a class="dropdown-item" href="/suv_catalogue">Volkswagen</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="/suv_catalogue">View All</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="/bike_catalogue" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Bike
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/bike_catalogue">Yamaha</a></li>
                                    <li><a class="dropdown-item" href="/bike_catalogue">Kawasaki</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="/bike_catalogue">View All</a></li>
                                </ul>
                            </li>

                            
                        </ul>

                        <div class="d-flex" role="search">
                            <input onkeyup="search_car()" class="form-control me-2" name="search" type="search" id="searchbar" placeholder="Search" aria-label="Search">
                            <button onclick="search_car()" class="btn btn-outline-success" type="submit">Search</button>
                        </div>

                        <?php    if (isset($_SESSION["user_details"])){   ?>
                            <a href="/cart">
                                <button class="btn btn-secondary my-0 mx-5">
                                    <svg style = "width: 30px; height: auto;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z"/></svg>
                                    <?php 
                                        //This deals with displaying the number of cart items
                                        if($_SESSION["user_details"]["itemcount"] == 0)
                                            {
                                               echo $_SESSION["user_details"]["itemcount"]." items";
                                            }
                                        elseif($_SESSION["user_details"]["itemcount"] == 1)
                                            {
                                                echo $_SESSION["user_details"]["itemcount"]." item";
                                            }
                                        elseif($_SESSION["user_details"]["itemcount"] <=9)
                                            {
                                                echo $_SESSION["user_details"]["itemcount"]." items";
                                            }
                                        else
                                            {
                                                echo "9+ items";
                                            }
                                    ?> 
                                </button>
                            </a>

                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle my-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo $_SESSION["user_details"]["first_name"]." ".$_SESSION["user_details"]["last_name"];?>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">View Profile</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="/auth/logout">Logout</a></li>
                                </ul>
                            </div>


                        <?php   }else{    ?>

                        <a href="/auth/login"><button class="btn btn-secondary my-0 mx-5">Log In</button></a>

                        <a href="/auth/register"><button class="btn btn-primary my-0 ">Sign Up</button></a>

                        <?php   }     ?>
                    </div>
                </div>
            </nav>
        </header>


        <?php $this->renderSection('content'); ?>


        <footer class="mb-0 mt-5" style="bottom: 0;" id="footer"> 
            
            <div class="footer-top"> 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-lg-3 col-md-6 footer-links"> 
                            <h4>Useful Links</h4> 
                            <ul> 
                                <li>
                                    <i class="bx bx-chevron-right"></i> 
                                    <a href="/">Home</a>
                                </li> 
                                <li>
                                    <i class="bx bx-chevron-right"></i> 
                                    <a href="/catalogue">Catalogue</a>
                                </li> 
                                <li>
                                    <i class="bx bx-chevron-right"></i> 
                                    <a href="/auth/login">Login</a>
                                </li> 
                                <li>
                                    <i class="bx bx-chevron-right"></i> 
                                    <a href="/auth/register">Register</a>
                                </li> 
                                <li>
                                    <i class="bx bx-chevron-right"></i> 
                                    <a href="#">Back to Top</a>
                                </li> 
                            </ul> 
                        </div> 

                         
                        <div class="col-lg-3 col-md-6 footer-contact"> 
                            <h4>Contact Us</h4> 
                            <p>                                 
                                <strong>Phone:</strong> +254 333 433 333
                                <br> <strong>Email:</strong> ling@fakedomain.com
                                <br> 
                            </p> 
                        </div> 

                        <div class="col-lg-3 col-md-6 footer-info"> 
                            <h3>About LingsCars</h3> 
                            <p>We are a recently founded website that aims to deliver you the car of your dreams at no extra effort.</p> 
                            <div class="social-links mt-3"> 
                                <a href="#" class="twitter">
                                    <i class="bx bxl-twitter"></i>
                                </a> 
                                <a href="#" class="facebook">
                                    <i class="bx bxl-facebook"></i>
                                </a> 
                                <a href="#" class="instagram">
                                    <i class="bx bxl-instagram"></i>
                                </a> 
                                <a href="#" class="linkedin">
                                    <i class="bx bxl-linkedin"></i>
                                </a> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div> 
            <div class="container"> 
                <div class="copyright"> &copy; Copyright <strong><span>LingsCars</span></strong>. All Rights Reserved </div> 
                <div class="credits"> Designed by <a href="#">LingsCars</a> </div> 
            </div>
        </footer>    






    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script>
        function search_car() {
            let input = document.getElementById('searchbar').value
            input=input.toLowerCase();
            let x = document.getElementsByClassName('vehicle_name');
            let a = document.getElementsByClassName('td-words');
            let b = document.getElementsByClassName('td-car');
            
            
            for (i = 0; i < x.length,a.lenght,b.length; i++) { 
                if (!x[i].innerHTML.toLowerCase().includes(input)) {
                    x[i].style.display="none";
                    a[i].style.display="none";
                    b[i].style.display="none";
                }
                else {
                    x[i].style.display=""; 
                    a[i].style.display="";
                    b[i].style.display="";                
                }
            }
        }
    </script>
</body>
</html>
