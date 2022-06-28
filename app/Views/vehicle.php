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
        <div style="padding: 10px;" class="card mb-3">
            <div class="row g-0">
                <div class="col-md-6">
                    <img style="width: 40vw; height: auto;" src="../public/uploads/<?php echo $vehicle['image']; ?>" class="img-fluid rounded-start" alt="Vehicle image">
                </div>
                <div class="col-md-6">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $vehicle['vehicle_model']; ?></h5>
                        <p class="card-text"><?php echo $vehicle['vehicle_description']; ?></p>
                        <p><b>Price: €<?php echo $vehicle['unit_price']; ?></b></p>
                        <label for="quantity">Choose a quantity:  </label>
                        <input type="number" name="quantity" value="1" max=<?php echo $vehicle['available_quantity']; ?> min = 1>
                    </div>
                    <?php if(isset($_SESSION["user_details"])){ ?>
                        <button style="margin: 0 225px 0 0;" type="submit" name="vehicle_id" value="<?php echo $vehicle['vehicle_id']; ?>" class="btn btn-dark text-center">
                            Add to Cart
                        </button>
                    <?php } else { ?>
                        <a href="/auth/register" style="margin-right: 350px; width: 10vw; text-align: center;"><input style="transform: translate(-70px, 320px);" type="button" value="Add to Cart" class="btn btn-dark"></a>
                    <?php } ?>
                </div>
            </div>
        </div>
        </form>
    </div>

    
    
<?php $this->endSection();?>
