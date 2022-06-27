<?php 
    $session = session();

    $this->extend('/templates/main_template');

    $this->section('content');

    
 
?>

<section class="top">
    <div class="row">
        <div class="top-bar">
            <p>How would you like to pay?</p>
        </div>
    </div>
</section>


<div class="checkout-flip-cards-div">
    <div class = "checkout-flip-card">
        <div class = "checkout-inner-flip-card">
            <div class="checkout-flip-card-front checkout-flip-card-front-one">
                <h1>MPESA</h1>
            </div>
            <div class="checkout-flip-card-back">
                <ol class="list-group list-group-numbered checkout-flip-card-back-list checkout-flip-card-back-list-one">
                    <li class="list-group-item">Go to your MPESA App/ Sim Toolkit.</li>
                    <li class="list-group-item">Select Pay/ Lipa na M-PESA.</li>
                    <li class="list-group-item">Select Buy Goods/ Buy Goods and Services.</li>
                    <li class="list-group-item">Enter the till number: <b> 456654 </b>.</li>
                    <li class="list-group-item">Enter the amount: <b>€<?php echo $total ?></b>, followed by your pin.</li>
                    <li class="list-group-item">Enter the confirmation code: <input type="text" name="" id=""></li>
                    <li class="list-group-item">Click confirm payment.</li>
                    <a href="/purchase/1"><li style="height: 100px;" class="list-group-item">Confirm payment</li></a>
                </ol>   
            </div>
        </div>
    </div>

    <div class = "checkout-flip-card">
        <div class = "checkout-inner-flip-card">
            <div class="checkout-flip-card-front checkout-flip-card-front-two">
                <h1>VISA</h1>
            </div>
            <div class="checkout-flip-card-back">
                <ol class="list-group list-group-numbered checkout-flip-card-back-list checkout-flip-card-back-list-two">
                    <li class="list-group-item">The amount will be: <b>€<?php echo $total ?></b>.</li>
                    <li class="list-group-item">Credit Card Number: <input type="text" name="" id=""></li>
                    <li class="list-group-item">Expiry Date: <input type="text" name="" id=""></li>
                    <li class="list-group-item">3-Digit CVV: <input type="text" name="" id=""></li>
                    <li class="list-group-item">Click confirm payment.</li>
                    <a href="/purchase/2"><li style="height: 100px;" class="list-group-item">Confirm payment</li></a>
                </ol> 
            </div>
        </div>
    </div>
</div>








<?php $this->endSection();?>