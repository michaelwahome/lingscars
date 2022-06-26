<?php 

    $this->extend('/templates/main_template');

    $this->section('content');

    
 
?>

    <!-- this section is the one above the navigation -->
    <section class="top">
        <div class="row">
            <div class="top-bar">
                <p>Edit the quantity and click add to cart</p>
            </div>
        </div>
    </section>  
    
    <div class="container">
        <form action="editquantity" method="post">
        <div style="padding: 10px;" class="card mb-3">
            <div class="row g-0">
                <div class="col-md-6">
                    <img style="width: 40vw; height: auto;" src="<?php echo $vehicle['image']; ?>" class="img-fluid rounded-start" alt="Vehicle image">
                </div>
                <div class="col-md-6">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $vehicle['vehicle_model']; ?></h5>
                        <p class="card-text"><?php echo $vehicle['vehicle_description']; ?></p>
                        <p><b>Price: €<?php echo $vehicle['unit_price']; ?></b></p>
                        <label for="quantity">Choose a quantity:  </label>
                        <input type="number" name="quantity" value=<?php echo $cartdetail['quantity']; ?> max=<?php echo $vehicle['available_quantity']; ?> min = 1>
                    </div>
                    <input type="text" style="display: none;" name="cartdetail_id" value="<?php echo $cartdetail["cartdetail_id"]; ?>">
                    <button style="margin: 0 225px 0 0;" type="submit" name="vehicle_id" value="<?php echo $vehicle['vehicle_id']; ?>" class="btn btn-dark text-center">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>
        </form>
    </div>

    
    
<?php $this->endSection();?>
