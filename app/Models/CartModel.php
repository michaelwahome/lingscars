<?php 

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
	protected $table = 'carts';

	protected $primaryKey = 'user_id';

	protected $allowedFields =
		[
		'cart_total',
		];

	public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
        // OR $this->db = db_connect();
    }

    //This funtion selects all the records from the table
	public function selectAll()
	{
		$query = $this->db->query("SELECT * FROM carts");

		foreach ($query->getResult() as $row)
		{
			$result[$row->user_id] = array(
				'user_id' => $row->user_id, 
				'cart_total'=> $row->cart_total,
				'created_at' => $row->created_at, 
				'updated_at' => $row->updated_at, 
				'is_deleted' => $row->is_deleted
			);
		}

		return $result;
	}

	//This function selects one record from the table based on the primary key
	public function selectOne($user_id)
	{
		$query = $this->db->query("SELECT * FROM carts WHERE user_id='$user_id'");

		foreach ($query->getResult() as $row)
		{
			$result = array(
				'user_id' => $row->user_id, 
				'cart_total'=> $row->cart_total,
				'created_at' => $row->created_at, 
				'updated_at' => $row->updated_at, 
				'is_deleted' => $row->is_deleted
			);
		}

		return $result;	
	}

	//This function adds a record to the table
	public function addRecord($user_id)
	{
		if ($this->db->query("INSERT INTO carts (user_id) VALUES ('$user_id')"))
		{
		    return "Successful";
		}
		else
		{
		    return "Unsuccessful";
		}
	}
}