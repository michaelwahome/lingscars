<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\CartDetailModel;
use App\Models\SaleModel;
use App\Models\SaleDetailModel;
use App\Controllers\Cart;


class Sale extends BaseController
{
    public function index()
    {
        $cart = new Cart();

        $data["total"] = $cart->cartTotal();

        return view('checkout', $data);
    }

    public function checkout()
    {
        $cart = new Cart();

        $data["total"] = $cart->cartTotal();

        return view('checkout', $data);
    }

    public function purchase($method = false)
    {
        $cartModel = new CartModel();
        $cartDetailModel = new CartDetailModel();
        $saleModel = new SaleModel();
        $saleDetailModel = new SaleDetailModel();

        $session = session();
        $user_id = $_SESSION["user_details"]["user_id"];

        $cart = $cartModel->selectOne($user_id);

        $datax = 
        [
            'user_id' => $user_id,
            'payment_method_id' => $method,
            'sale_total' => $cart["cart_total"],
        ];

        $saleModel->save($datax);

        $sale = $saleModel->selectLast($user_id);

        $items = $cartDetailModel->selectUsingUserId($user_id);

        foreach($items as $item)
        {
            $data=
            [
                'sale_id' => $sale["sale_id"],
                'vehicle_id' => $item["vehicle_id"],
                'unit_price'=> $item["unit_price"],
				'quantity'=> $item["quantity"],
				'subtotal'=> $item["subtotal"],
            ];

            $saleDetailModel->save($data);
        }

        $cartModel->deleteOne($user_id);
        $cartDetailModel->deleteSome($user_id);

        unset($_SESSION["user_details"]["cart"]);
        unset($_SESSION["user_details"]["itemcount"]);

        $cartModel->addRecord($user_id);
        $_SESSION["user_details"]["cart"] = $cartModel->selectOne($user_id);
        $_SESSION["user_details"]["itemcount"] = $cartDetailModel->countCart($user_id);

        return redirect()->to('home');
    }
}
