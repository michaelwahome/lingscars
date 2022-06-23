<?php 

namespace App\Models;

use CodeIgniter\Model;

class SaleDetailModel extends Model
{
	protected $table = 'sale_details';

	protected $primaryKey = 'saledetail_id';

	protected $allowedFields =
		[
		'sale_id',
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
		$query = $this->db->query("SELECT * FROM sale_details");

		foreach ($query->getResult() as $row)
		{
			$result[$row->saledetail_id] = array(
				'saledetail_id' => $row->saledetail_id, 
				'sale_id' => $row->sale_id, 
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
	public function selectUsingUserId($sale_id)
	{
		$query = $this->db->query("SELECT * FROM sale_details WHERE sale_id='$sale_id'");

		$i = 0;

		foreach ($query->getResult() as $row)
		{
			$result[$i] = array(
				'saledetail_id' => $row->saledetail_id, 
				'sale_id' => $row->sale_id, 
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
	public function selectOne($saledetail_id)
	{
		
		$query = $this->db->query("SELECT * FROM sale_details WHERE saledetail_id='$saledetail_id'");

		foreach ($query->getResult() as $row)
		{
			$result = array(
				'saledetail_id' => $row->saledetail_id, 
				'sale_id' => $row->sale_id, 
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
	public function addRecord($sale_id, $vehicle_id, $unit_price, $quantity, $subtotal)
	{
		if ($this->db->query("INSERT INTO sale_details (sale_id, vehicle_id, unit_price, quantity, subtotal) VALUES ('$sale_id', '$vehicle_id', '$unit_price', '$quantity', '$subtotal')"))
		{
		    return "Successful";
		}
		else
		{
		    return "Unsuccessful";
		}
	}
}