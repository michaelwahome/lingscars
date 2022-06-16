<?php 

namespace App\Models;

use CodeIgniter\Model;

class SaleModel extends Model
{
	protected $table = 'sales';

	protected $primaryKey = 'sale_id';

	protected $allowedFields =
		[
		'user_id',
		'payment_method_id',
		'sale_total',
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
		$query = $this->db->query("SELECT * FROM sales");

		foreach ($query->getResult() as $row)
		{
			$result[$row->sale_id] = array(
				'sale_id' => $row->sale_id, 
				'user_id' => $row->user_id, 
				'payment_method_id' => $row->payment_method_id, 
				'sale_total'=> $row->sale_total,
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
		$query = $this->db->query("SELECT * FROM sales WHERE user_id='$user_id'");

		$i = 0;

		foreach ($query->getResult() as $row)
		{
			$result[$i] = array(
				'sale_id' => $row->sale_id, 
				'user_id' => $row->user_id, 
				'payment_method_id' => $row->payment_method_id, 
				'sale_total'=> $row->sale_total,
				'created_at' => $row->created_at, 
				'updated_at' => $row->updated_at, 
				'is_deleted' => $row->is_deleted
			);

			$i++;
		}

		return $result;
	}

	//This function selects one record from the table based on the primary key
	public function selectOne($sale_id)
	{
		$query = $this->db->query("SELECT * FROM sales WHERE sale_id='$sale_id'");

		foreach ($query->getResult() as $row)
		{
			$result = array(
				'sale_id' => $row->sale_id, 
				'user_id' => $row->user_id, 
				'payment_method_id' => $row->payment_method_id, 
				'sale_total'=> $row->sale_total,
				'created_at' => $row->created_at, 
				'updated_at' => $row->updated_at, 
				'is_deleted' => $row->is_deleted
			);
		}

		return $result;	
	}

	//This function adds a record to the table
	public function addRecord($user_id, $payment_method_id, $sale_total)
	{
		if ($this->db->query("INSERT INTO sales (user_id, payment_method_id, sale_total) VALUES ('$user_id', '$payment_method_id', '$sale_total')"))
		{
		    return "Successful";
		}
		else
		{
		    return "Unsuccessful";
		}
	}
}