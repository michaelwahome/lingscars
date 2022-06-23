<?php 

namespace App\Models;

use CodeIgniter\Model;

class CartDetailModel extends Model
{
	protected $table = 'cart_details';

	protected $primaryKey = 'cartdetail_id';

	protected $allowedFields =
		[
		'user_id',
		'vehicle_id',
		'unit_price',
		'quantity',
		'subtotal',
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
		$query = $this->db->query("SELECT * FROM cart_details");

		foreach ($query->getResult() as $row)
		{
			$result[$row->cartdetail_id] = array(
				'cartdetail_id' => $row->cartdetail_id, 
				'user_id' => $row->user_id, 
				'vehicle_id'=> $row->vehicle_id,
				'unit_price'=> $row->unit_price,
				'quantity'=> $row->quantity,
				'subtotal'=> $row->subtotal,
				'created_at' => $row->created_at, 
				'updated_at' => $row->updated_at, 
				'is_deleted' => $row->is_deleted
			);
		}

		return $result;
	}

	//This funtion selects records from the table based on a foreign key
	public function selectUsingUserId($user_id)
	{
		$query = $this->db->query("SELECT * FROM cart_details WHERE user_id='$user_id'");

		$i = 0;

		foreach ($query->getResult() as $row)
		{
			$result[$i] = array(
				'cartdetail_id' => $row->cartdetail_id, 
				'user_id' => $row->user_id, 
				'vehicle_id'=> $row->vehicle_id,
				'unit_price'=> $row->unit_price,
				'quantity'=> $row->quantity,
				'subtotal'=> $row->subtotal,
				'created_at' => $row->created_at, 
				'updated_at' => $row->updated_at, 
				'is_deleted' => $row->is_deleted
			);

			$i++;
		}

		return $result;
	}

	//This function selects one record from the table based on the primary key
	public function selectOne($cartdetail_id)
	{
		$query = $this->db->query("SELECT * FROM cart_details WHERE cartdetail_id='$cartdetail_id'");

		foreach ($query->getResult() as $row)
		{
			$result = array(
				'cartdetail_id' => $row->cartdetail_id, 
				'user_id' => $row->user_id, 
				'vehicle_id'=> $row->vehicle_id,
				'unit_price'=> $row->unit_price,
				'quantity'=> $row->quantity,
				'subtotal'=> $row->subtotal,
				'created_at' => $row->created_at, 
				'updated_at' => $row->updated_at, 
				'is_deleted' => $row->is_deleted
			);
		}

		return $result;
	}

	//This function adds a record to the table
	public function addRecord($user_id, $vehicle_id, $unit_price, $quantity, $subtotal)
	{
		if ($this->db->query("INSERT INTO carts (user_id, vehicle_id, unit_price, quantity, subtotal) VALUES ('$user_id', '$vehicle_id', '$unit_price', '$quantity', '$subtotal')"))
		{
		    return "Successful";
		}
		else
		{
		    return "Unsuccessful";
		}
	}

	//This function counts the number of items in a cart by counting the number of rows in the cartdetails table with the same user_id
	public function countCart($user_id)
	{
		$query = $this->db->query("SELECT COUNT(cartdetail_id) AS itemcount FROM cart_details WHERE user_id='$user_id'");

		foreach ($query->getResult() as $row)
		{
			$result = $row->itemcount;
		}

		return $result;
	}
}