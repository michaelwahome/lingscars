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
    </div>
  </section> 

  <div class="row">
    <p style="text-align: center; font-size: 2em;"><b>Your order history is empty</b></p>   
    <a href="/catalogue" style="width: 40vw; padding: 10px; margin: 0 auto; text-align: center; font-size: 2em; text-decoration: none; background: black; color: white; border-radius: 20px;">Buy a car</a>   
  </div>


</div>



<?php $this->endSection();?>