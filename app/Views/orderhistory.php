<?php 
    $session = session();

    $this->extend('/templates/main_template');

    $this->section('content');

    
 
?>


<div class="container">

  <section class="top">
    <div class="row">
        <div class="top-bar">
            <p><?php echo $_SESSION["user_details"]["first_name"];?>'s Orders</p>
        </div>
    </div>
  </section> 

  <?php foreach($vehicle as $car) { ?>
  <hr>
    <form style="margin-top: 40px;" action="editcart" method="post">
      <div style="border:none;" class="card mb-3">
        <div class="row g-0">
            <div class="col-md-7">
                <img style="width: 60vw; height: auto;" src="../public/uploads/<?php echo $car["vehicle_details"]['image']; ?>" class="img-fluid rounded-start" alt="Vehicle image">
            </div>
            <div class="col-md-5">
              <div class="card-body text-center">
                  <h5 class="card-title"><?php echo $car["vehicle_details"]['vehicle_model']; ?></h5>
                  <p class="card-text"><?php echo $car["vehicle_details"]['vehicle_description']; ?></p>
                  <p><b>Price: €<?php echo $car["vehicle_details"]['unit_price']; ?></b></p>
                  <p><b>Quantity: <?php echo $car["saledetail_details"]['quantity']; ?></b></p>
                  <p><b>Subtotal: €<?php echo $car["saledetail_details"]['subtotal']; ?></b></p>
                  <p><b>Date: <?php echo $car["saledetail_details"]['created_at']; ?></b></p>
                </div>
              
            </div>
        </div>
      </div>
    </form>
  <?php } ?>


  <div class="row">
    <a href="/checkout" style="width: 40vw; padding: 10px; margin: 0 auto; text-align: center; font-size: 2em; text-decoration: none; background: black; color: white; border-radius: 20px;">Proceed to Checkout</a>   
  </div>


</div>



<?php $this->endSection();?>