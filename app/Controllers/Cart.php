<?php

  namespace App\Controllers;

  use App\Models\LoginModel;
  use App\Models\SignUpModel;
  use App\Models\VehicleModel;
  use App\Models\CartModel;
  use App\Models\CartDetailModel;

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

//  Function to add items into a user's cart
  public function addToCart()
  {
    $cartModel = new CartModel();
    $cartDetailModel = new CartDetailModel();
    $vehicleModel = new VehicleModel();

    $vehicle_id = $this->request->getPost('vehicle_id');
    
    $session = session();
    $user_id = $_SESSION["user_details"]["user_id"];

    $vehicle = $vehicleModel->selectOne($vehicle_id);
    $unit_price = $vehicle["unit_price"];
    $quantity = $this->request->getPost('quantity');

    $subtotal = $unit_price * $quantity;

    $data=
    [
      'user_id' => $user_id,
      'vehicle_id' => $vehicle_id,
      'unit_price' => $unit_price,
      'quantity' => $quantity,
      'subtotal' => $subtotal
    ];
    $cartDetailModel->save($data);
    $_SESSION["user_details"]["itemcount"]++;
    return redirect()->to('overall_catalogue');


  }
}