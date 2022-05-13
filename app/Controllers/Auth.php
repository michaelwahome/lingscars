<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\LoginModel;
use App\Model\SignUpModel;

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
        //1. Create an instance of the model
		$loginModel = new UsersModel();

		//Temporary checkpoint
		//echo "Model instance successfully created<br>";

		//2. Retrieve form data
	    if($this->request->getMethod() === 'post')
	    {
	        $email = $this->request->getPost('email');
	        $password  = $this->request->getPost('password');
	    }

	    //Temporary Checkpoint
	    echo "<br>Data retrieved from form successfully!";
	    echo "<br>Email - ".$email;
	    echo "<br>Password - ".$password;


	    //3. Method function call
	    $user_info = $loginModel-> login($email, $password);

	    // Model Test
	    echo "<br><br>Result: ";
	    print_r($user_info);

	    //4. If array is empty:
		if(empty($user_info))
		{
			//-> EMPTY: Redirect to login page
			return redirect()->to('auth/login');
		}
		else
		{
			//-> NOT EMPTY: Create a session to store user info and redirect to admin or home page
			$session = session();
			$session->set('user_details', $user_info);

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
		//1. Create an instance of the model
		$registerModel = new SignUpModel();

		//TEST
		echo "Model instance successfully created<br>";

		//2. Data retrieval
		//-> Retrieve form data from register()
		if($this->request->getMethod() === 'post')
		{
	        $firstname = $this->request->getPost('fname');
	        $lastname = $this->request->getPost('lname');
	        $gender= $this->request->getPost('gender');
			$email = $this->request->getPost('email');
			$password = $this->request->getPost('password');
	    }

		//Temporary Checkpoint
	    echo "<br>Data retrieved from form successfully!";
		echo "<br>Email - ".$email;
		echo "<br>Password - ".$password;
		echo "<br>First Name - ".$firstname;
	    echo "<br>Last Name - ".$lastname;
	    echo "<br>Gender - ".$gender;

	    //3. Method function call
	    $confirmation = $registerModel->signup($firstname, $lastname, $gender, $email, $password);

	    //TEST
	    echo "<br><br>Result - $confirmation";

	    //4. Redirect to Login page
	    return redirect()->to('Auth/login');
	}
}
