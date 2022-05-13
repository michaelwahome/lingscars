<?php 

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
	public function __construct()
    {
        //parent::__construct();
        //$this->db = \Config\Database::connect();
        $this->db = db_connect();
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
		$user_info = array('user_id' => $row->user_id, 'first_name' => $row->first_name, 'last_name' => $row->last_name, 'gender' => $row->gender, 'email' => $row->email, 'phone_number' => $row->phone_number);
		}

		//Return array
		return $user_info;
		

		//Model Test
		//return "Data Transfered to Model Successfully: Username - ".$username.", Password - ".$password; 
	}
}