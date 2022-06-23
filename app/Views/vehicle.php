<?php 

    $this->extend('/templates/main_template');

    $this->section('content');

    
 
?>

    <!-- this section is the one above the navigation -->
    <section class="top">
        <div class="row">
            <div class="top-bar">
                <p>Choose a quantity and click add to cart</p>
            </div>
        </div>
    </section>  
    
    <div class="container">
        <form action="addtocart" method="post">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-6">
                    <img style="width: 40vw; height: auto;" src="<?php echo $vehicle['image']; ?>" class="img-fluid rounded-start" alt="Vehicle image">
                </div>
                <div class="col-md-6">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $vehicle['vehicle_model']; ?></h5>
                        <p class="card-text"><?php echo $vehicle['vehicle_description']; ?></p>
                        <p><b>€<?php echo $vehicle['unit_price']; ?></b></p>
                        <label for="quantity">Choose a quantity:  </label>
                        <input type="number" name="quantity" value="1" max=<?php echo $vehicle['available_quantity']; ?> min = 1>
                    </div>
                    <button style="margin: 0 225px 0 0;" type="submit" name="vehicle_id" value="<?php echo $vehicle['vehicle_id']; ?>" class="btn btn-dark text-center">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>
        </form>
    </div>

    
    
<?php $this->endSection();?>
