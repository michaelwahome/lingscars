<?php 
    $session = session();

    $this->extend('/templates/main_template');

    $this->section('content');

    
 
?>


<div class="container">

  <section class="top">

  <div class="row">
      <div class="top-bar">
          <p><?php echo $_SESSION["user_details"]["first_name"];?>'s Cart</p>
      </div>
      <p style="text-align: center; font-size: 2em;"><b>Current total: €<?php echo $cart_total ?></b></p>      
  </div>
  </section> 

  <?php foreach($vehicle as $car) { ?>
  <hr>
    <form style="margin-top: 40px;" action="editcart" method="post">
      <div style="border:none;" class="card mb-3">
        <div class="row g-0">
            <div class="col-md-7">
                <img style="width: 60vw; height: auto;" src="<?php echo $car["vehicle_details"]['image']; ?>" class="img-fluid rounded-start" alt="Vehicle image">
            </div>
            <div class="col-md-5">
              <div style="text-align: right; margin: 20px 20px 0 0;">
                <button style="border: none; background: none;" type="submit" name="deletecartdetail_id" value="<?php echo $car["cartdetail_details"]["cartdetail_id"]; ?>">
                  <svg style="width: 20px; height: auto;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z"/></svg>
                </button>
              </div>
              <div class="card-body text-center">
                  <h5 class="card-title"><?php echo $car["vehicle_details"]['vehicle_model']; ?></h5>
                  <p class="card-text"><?php echo $car["vehicle_details"]['vehicle_description']; ?></p>
                  <p><b>Price: €<?php echo $car["vehicle_details"]['unit_price']; ?></b></p>
                  <p><b>Quantity: <?php echo $car["cartdetail_details"]['quantity']; ?></b></p>
                  <p><b>Subtotal: €<?php echo $car["cartdetail_details"]['subtotal']; ?></b></p>
                </div>
              <input type="text" style="display: none;" name="cartdetail_id" value="<?php echo $car["cartdetail_details"]["cartdetail_id"]; ?>">
              <button style="margin: 0 187px 40px 0;" type="submit" name="vehicle_id" value="<?php echo $car["vehicle_details"]['vehicle_id']; ?>" class="btn btn-dark text-center">
                Edit Item
              </button>
            </div>
        </div>
      </div>
    </form>
  <?php } ?>
</div>



<?php $this->endSection();?>