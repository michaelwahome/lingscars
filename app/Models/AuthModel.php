<?php 

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
	public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
        // OR $this->db = db_connect();
    }

    //Method to add a user
	public function signup($firstname, $lastname, $gender, $email, $password)
	{
		//Query
		if ($this->db->query("INSERT INTO users (first_name, last_name, gender, email, password, role_id) VALUES ('$firstname', '$lastname', '$gender', '$email', '$password', '1')"))
		{
		    $confirmation = "Successful";
		}
		else
		{
		    $confirmation = "Unsuccessful";
		}

		//Return array
		return $confirmation;

		//TEST
		return "New user added: Name - $firstname $lastname";
	}

	public function login($email, $password)
	{
	
		//Temporarily define $user_info
		$user_info = array();

		//Query
		$query = $this->db->query("SELECT * FROM users WHERE email='$email' AND password = '$password'");

		//Store details in array
		foreach ($query->getResult() as $row)
		{
		//Initialize User Info Array
		$user_info = array('user_id' => $row->user_id, 'role_id'=> $row->role_id, 'first_name' => $row->first_name, 'last_name' => $row->last_name, 'gender' => $row->gender, 'email' => $row->email, 'phone_number' => $row->phone_number);
		}

		//Return array
		return $user_info;
		

		//Model Test
		//return "Data Transfered to Model Successfully: Username - ".$username.", Password - ".$password; 
	}
}