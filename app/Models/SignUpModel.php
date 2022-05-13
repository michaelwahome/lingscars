<?php 

namespace App\Models;

use CodeIgniter\Model;

class SignUpModel extends Model
{
	public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
        // OR $this->db = db_connect();
    }

    //Method to add a user
	public function signup($firstname, $lastname, $gender, $email, $phone, $password)
	{
		//Query
		if ($this->db->query("INSERT INTO users (first_name, last_name, gender, email, password) VALUES ('$firstname', '$lastname', '$gender', '$email', '$password')") AND $this->db->query("INSERT INTO carts (username, cart_total) VALUES ('$username', '0')") AND $this->db->query("INSERT INTO wallets (username, balance) VALUES ('$username', '0')"))
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
}