<?php 

    $this->extend('/templates/main_template');

    $this->section('content');

    
 
?>

    <!-- this section is the one above the navigation -->
    <section class="top">

        <div class="row">
            <div class="top-bar">
                <p>Sedans at a family friendly price</p>
            </div>
        </div>
    </section>    

    <section class="frames">
        <div class="row">
            <div class="frame-one">
                <h2><b>Description</b></h2>
                <p>This model is amazing. Features are even better than the last model. You will get maximum mileage from this. Enjoy the sleek new white color that is now available.<br>Reliable engine and amazing wheels that are sure to stand the test of time</p>
                <img src="images/frame16.png" alt="car">
            </div>
            <div class="frame-two">
                <h1><b>Sedan Highlights</b></h1>
                <div class="image-and-words">
                    <div class="picture">
                        <img src="images/frame15.png" alt="">
                    </div>
                    <div class="words">
                        <h2><b>Toyota Vitz</b></h2>
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
                        <h2><b>Honda Civic</b></h2>
                        <p>This model is amazing. Features are even better than the last model. You will get maximum mileage from this. Enjoy the sleek new white color that is now available. Reliable engine and amazing wheels that are sure to stand the test of time</p>
                        <div class="grey-and-black-words">
                            <p class="grey-words"><b>€1200</b></p>
                            <p class="black-words"><b>€900</b></p>
                        </div>
                        <input type="button" value="add to cart" class="btn btn-dark">
                    </div>
                    <div class="picture">
                        <img src="images/frame14.png" alt="car">
                    </div>
                </div>
            </div>
            <div class="frame-four">
                <div class="image-and-words">
                    <div class="picture">
                        <img src="images/frame13.png" alt="">
                    </div>
                    <div class="words">
                        <h2><b>Toyota Crown</b></h2>
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
                        <h2 class="car_names"><b>Honda Insight</b></h2>
                        <p>This model is amazing. Features are even better than the last model. You will get maximum mileage from this. Enjoy the sleek new white color that is now available. Reliable engine and amazing wheels that are sure to stand the test of time</p>
                        <div class="grey-and-black-words">
                            <p class="grey-words"><b>€2000</b></p>
                            <p class="black-words"><b>€1200</b></p>
                        </div>
                        <input type="button" value="add to cart" class="btn btn-dark">
                    </div>
                    <div class="picture">
                        <img src="images/frame17.png" alt="car">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
<?php $this->endSection();?>