<?php
 use App\Controllers\Cart;
?>
<li class="flex py-6">
  <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
<!--    Source attribute to be filled with the path to the item-->
    <img src=" " alt="Cart item" class="h-full w-full object-cover object-center">
  </div>

  <div class="ml-4 flex flex-1 flex-col">
    <div>
      <div class="flex justify-between text-base font-medium text-gray-900">
        <h3>
<!--          Function that returns the name of an item that was placed in the user's cart-->
          <a href="#"> <?php
             /* Cart::name*/ ?> </a>
        </h3>
        <p class="ml-4"><!--Price for singular item--></p>
      </div>
      <p class="mt-1 text-sm text-gray-500"> <!-- Colour of the vehicle --></p>
    </div>
    <div class="flex flex-1 items-end justify-between text-sm">
      <p class="text-gray-500"> <!-- Quantity of ordered vehicles --></p>

      <div class="flex">
<!--        Function that is called upon when button is pressed to remove cart item-->
        <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
      </div>
    </div>
  </div>
</li>

<button type="submit" onclick="function homePage() {
  return view

}"></button>