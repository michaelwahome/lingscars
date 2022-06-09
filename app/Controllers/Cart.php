<?php

  namespace App\Controllers;

//  use App\Models\UsersModel;
  use App\Models\LoginModel;
  use App\Models\SignUpModel;

class Cart extends BaseController
{
  public function index()
  {
    return view('cart');
  }
//    Function to get the items that are in a user's cart
  public function getItems($user)
  {

  }

//    Function to remove items from the cart
  public function removeItem()
  {

  }

//  Function to calculate the total for a customer's basket
  public function cartTotal()
  {

  }
}