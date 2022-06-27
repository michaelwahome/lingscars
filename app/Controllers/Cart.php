<?php

namespace App\Controllers;

use App\Models\VehicleModel;
use App\Models\CartModel;
use App\Models\CartDetailModel;

class Cart extends BaseController
{
  public function index()
  {
    $vehicleModel = new VehicleModel();
    $cartDetailModel = new CartDetailModel();

    $session = session();
    $user_id = $_SESSION["user_details"]["user_id"];
    $items = $cartDetailModel->selectUsingUserId($user_id);

    if($items[0] == 0)
    {
      return view('empty_cart');
    }

    $i = 0;

    foreach($items as $row)
    {
      $vehicles[$i]["cartdetail_id"] = $row["cartdetail_id"];
      $vehicles[$i]["vehicle_id"] = $row["vehicle_id"];
      $i++;
    }

    $i = 0;

    foreach($vehicles as $row)
    {
      $data["vehicle"][$i]["cartdetail_details"] = $cartDetailModel->selectOne($row["cartdetail_id"]);
      $data["vehicle"][$i]["vehicle_details"] = $vehicleModel->selectOne($row["vehicle_id"]);
      $i++;
    }
    
    $data["cart_total"] = $this->cartTotal();

    echo view('cart', $data);
    
  }

//    Function to remove items from the cart
  public function removeItem()
  {
    $cartModel = new CartModel();
    $cartDetailModel = new CartDetailModel();

    $session = session();
    $cartdetail_id = $_SESSION['deletecartdetail_id'];
    $cartDetailModel->deleteOne($cartdetail_id);

    $_SESSION["user_details"]["itemcount"]--;
    unset($_SESSION['deletecartdetail_id']);

    $user_id = $_SESSION["user_details"]["user_id"];
    $cart_total = $this->cartTotal();
    $data2 =
    [
      'cart_total' => $cart_total,
    ];
    $cartModel->update($user_id, $data2);

    return redirect()->to('cart');
  }

//  Function to calculate the total for a customer's cart
  public function cartTotal()
  {
    $cartDetailModel = new CartDetailModel();

    $session = session();
    $user_id = $_SESSION["user_details"]["user_id"];

    $cart_total = $cartDetailModel->sumCart($user_id);

    return $cart_total;
  }

  // Function to load page to select quantity of cars for new cart item
  public function vehicle()
    {
      $vehicleModel = new VehicleModel();

      $vehicle_id = $this->request->getPost('vehicle_id');
      $data["vehicle"] = $vehicleModel->selectOne($vehicle_id);
      return view('vehicle', $data);
    }

//  Function to add items into a user's cart
  public function addToCart()
  {
    $cartModel = new CartModel();
    $cartDetailModel = new CartDetailModel();
    $vehicleModel = new VehicleModel();
    
    $session = session();
    $user_id = $_SESSION["user_details"]["user_id"];
    
    $vehicle_id = $this->request->getPost('vehicle_id');
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

    $cart_total = $this->cartTotal();
    $data2 =
    [
      'cart_total' => $cart_total,
    ];
    $cartModel->update($user_id, $data2);

    return redirect()->to('overall_catalogue');

  }


//Function to load page to edit quantity of cars for existing cart item
  public function editCart()
  {
    if(isset($_POST["deletecartdetail_id"]))
    {
      $session = session();
      $_SESSION["deletecartdetail_id"] = $_POST["deletecartdetail_id"];
      return redirect()->to('removeitem');
    }

    $cartDetailModel = new CartDetailModel();
    $vehicleModel = new VehicleModel();
  
    $vehicle_id = $this->request->getPost('vehicle_id');
    $data["vehicle"] = $vehicleModel->selectOne($vehicle_id);

    $cartdetail_id = $this->request->getPost('cartdetail_id');
    $data["cartdetail"] = $cartDetailModel->selectOne($cartdetail_id);


    return view('edit_vehicle', $data);
  }

//Function to edit quantity of item in user's cart
  public function editQuantity()
  {
    $cartModel = new cartModel();
    $cartDetailModel = new CartDetailModel();
    $vehicleModel = new VehicleModel();

    $vehicle_id = $this->request->getPost('vehicle_id');
    $vehicle = $vehicleModel->selectOne($vehicle_id);
    $unit_price = $vehicle["unit_price"];
    $quantity = $this->request->getPost('quantity');

    $subtotal = $unit_price * $quantity;

    $id = $this->request->getPost('cartdetail_id');

    $data=
    [
      'quantity' => $quantity,
      'subtotal' => $subtotal
    ];

    $cartDetailModel->update($id, $data);

    $session = session();
    $user_id = $_SESSION["user_details"]["user_id"];
    $cart_total = $this->cartTotal();
    $data2 =
    [
      'cart_total' => $cart_total,
    ];
    $cartModel->update($user_id, $data2);

    return redirect()->to('cart');
  }
}