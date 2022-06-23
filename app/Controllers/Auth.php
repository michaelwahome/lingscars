<?php

namespace App\Controllers;

use App\Models\AuthModel;
use App\Models\CartModel;
use App\Models\CartDetailModel;

class Auth extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function processLogin()
    {
        //Create instances of the models
		$authModel = new AuthModel();
		$cartModel = new CartModel();
		$cartDetailModel = new CartDetailModel();

		//Retrieve form data using post
	    if($this->request->getMethod() === 'post')
	    {
	        $email = $this->request->getPost('email');
	        $password  = $this->request->getPost('password');
	    }

	     //Call actual login function and assign record to user_info
	    $user_info = $authModel-> login($email, $password);

		if(empty($user_info))
		{
			//Redirect to login page if login fails i.e. if user_info is empty
			return redirect()->to('auth/login');
		}
		else
		{
			//Retrieve user cart from db and add it to user_info
			$user_info["cart"] = $cartModel->selectOne($user_info["user_id"]);

			//Retrieve number of items in cart from db and add it to user_info
			$user_info["itemcount"] = $cartDetailModel->countCart($user_info["user_id"]);

			//Initialise a session and pass user_info to the session
			$session = session();
			$session->set('user_details', $user_info);

			//Redirect to Home page
			return redirect()->to('/');

		// 	//Admin or User clearance level
        //  1. User role_id -> Redirect to user landing page
		// 	if($user_info['role_id'] == "")
		// 	{
		// 		echo "<br>User Account";
		// 		return redirect()->to('Home/index');
		// 	}
        //  2. Admin role_id -> Redirect to admin landing page
		// 	elseif($user_info['role_id'] == "")
		// 	{
		// 		//echo "<br>Admin Account";
		// 		return redirect()->to('');
		// 	}
		}
    }

    public function register()
    {
        return view('auth/register');
    }

	public function processRegistration()
	{
		//Create instances of the models
		$authModel = new AuthModel();
		$cartModel = new CartModel();
		$cartDetailModel = new CartDetailModel();

		//Retrieve form data using post
		if($this->request->getMethod() === 'post')
		{
	        $firstname = $this->request->getPost('fname');
	        $lastname = $this->request->getPost('lname');
	        $gender= $this->request->getPost('gender');
			$email = $this->request->getPost('email');
			$password = $this->request->getPost('password');
	    }

	    //Call actual signup function
	    $confirmation = $authModel->signup($firstname, $lastname, $gender, $email, $password);

	    //Use login function to retireve registered user details and assign to user_info
		$user_info = $authModel->login($email, $password);

		//Add a new cart for user using their retrieved user_id
		$cartModel->addRecord($user_info["user_id"]);

		//Retrieve user cart from db and add it to user_info
		$user_info["cart"] = $cartModel->selectOne($user_info["user_id"]);

		//Retrieve number of items in cart from db and add it to user_info
		$user_info["itemcount"] = $cartDetailModel->countCart($user_info["user_id"]);

		//Initialise a session and pass user_info to the session
		$session = session();
		$session->set('user_details', $user_info);

		//Redirect to Home page
	    return redirect()->to('home');
	}

	public function logout(){
		$session = session();
		unset($_SESSION["user_details"]);
		return redirect()->to("home");
	}
}
