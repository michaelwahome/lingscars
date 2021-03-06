<?php
namespace App\Models;
use CodeIgniter\Model;

class VehicleModel extends model
{

    protected $table='vehicles';

    protected $primaryKey='vehicle_id';

	protected $allowedFields =
		[
		'category_id',
		'subcategory_id',
		'vehicle_model'	,
		'unit_price',	
		'available_quantity',
		'image',	
		'vehicle_description',	
		'manufacturer',
		'year_of_manufacture',	
		'mileage',	
		'registration',	
		'vehicle_condition',	
		'serial_number',	
		'color'
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
		$query = $this->db->query("SELECT * FROM vehicles");
		$i = 0;
		$result[$i] = 0;

		foreach ($query->getResult() as $row)
		{
			$result[$i] = array(
				'vehicle_id' => $row->vehicle_id, 
				'category_id' => $row->category_id, 
				'subcategory_id' => $row->subcategory_id, 
				'vehicle_model'=> $row->vehicle_model, 
				'unit_price'=> $row->unit_price, 
				'available_quantity' => $row->available_quantity, 
				'image' => $row->image, 
				'vehicle_description' => $row->vehicle_description, 
				'manufacturer' => $row->manufacturer, 
				'year_of_manufacture' => $row->year_of_manufacture, 
				'mileage' => $row->mileage, 
				'registration' => $row->registration, 
				'vehicle_condition' => $row->vehicle_condition, 
				'serial_number' => $row->serial_number, 
				'color' => $row->color, 
				'created_at' => $row->created_at, 
				'updated_at' => $row->updated_at, 
				'is_deleted' => $row->is_deleted
			);

			$i++;
		}

		return $result;
	}

	//This funtion selects records from the table based on a foreign key
	public function selectUsingCategoryId($category_id)
	{
		$query = $this->db->query("SELECT * FROM vehicles WHERE category_id='$category_id'");

		$i = 0;
		$result[$i] = 0;

		foreach ($query->getResult() as $row)
		{
			$result[$i] = array(
				'vehicle_id' => $row->vehicle_id, 
				'category_id' => $row->category_id, 
				'subcategory_id' => $row->subcategory_id, 
				'vehicle_model'=> $row->vehicle_model, 
				'unit_price'=> $row->unit_price, 
				'available_quantity' => $row->available_quantity, 
				'image' => $row->image, 
				'vehicle_description' => $row->vehicle_description, 
				'manufacturer' => $row->manufacturer, 
				'year_of_manufacture' => $row->year_of_manufacture, 
				'mileage' => $row->mileage, 
				'registration' => $row->registration, 
				'vehicle_condition' => $row->vehicle_condition, 
				'serial_number' => $row->serial_number, 
				'color' => $row->color, 
				'created_at' => $row->created_at, 
				'updated_at' => $row->updated_at, 
				'is_deleted' => $row->is_deleted
			);

			$i++;
		}

		return $result;
	}

	//This funtion selects records from the table based on a foreign key
	public function selectUsingSubcategoryId($subcategory_id)
	{
		$query = $this->db->query("SELECT * FROM vehicles WHERE subcategory_id='$subcategory_id'");

		$i = 0;
		$result[$i] = 0;

		foreach ($query->getResult() as $row)
		{
			$result[$i] = array(
				'vehicle_id' => $row->vehicle_id, 
				'category_id' => $row->category_id, 
				'subcategory_id' => $row->subcategory_id, 
				'vehicle_model'=> $row->vehicle_model, 
				'unit_price'=> $row->unit_price, 
				'available_quantity' => $row->available_quantity, 
				'image' => $row->image, 
				'vehicle_description' => $row->vehicle_description, 
				'manufacturer' => $row->manufacturer, 
				'year_of_manufacture' => $row->year_of_manufacture, 
				'mileage' => $row->mileage, 
				'registration' => $row->registration, 
				'vehicle_condition' => $row->vehicle_condition, 
				'serial_number' => $row->serial_number, 
				'color' => $row->color, 
				'created_at' => $row->created_at, 
				'updated_at' => $row->updated_at, 
				'is_deleted' => $row->is_deleted
			);

			$i++;
		}

		return $result;
	}

	//This function counts all records
	public function countAll()
	{
		$query = $this->db->query("SELECT COUNT(*) AS count FROM vehicles");

		foreach ($query->getResult() as $row)
		{
			$result = $row->count;
		}

		return $result;
	}

	//This function selects one record from the table based on the primary key
	public function selectOne($vehicle_id)
	{
		$query = $this->db->query("SELECT * FROM vehicles WHERE vehicle_id='$vehicle_id'");

		foreach ($query->getResult() as $row)
		{
			$result = array(
				'vehicle_id' => $row->vehicle_id, 
				'category_id' => $row->category_id, 
				'subcategory_id' => $row->subcategory_id, 
				'vehicle_model'=> $row->vehicle_model, 
				'unit_price'=> $row->unit_price, 
				'available_quantity' => $row->available_quantity, 
				'image' => $row->image, 
				'vehicle_description' => $row->vehicle_description, 
				'manufacturer' => $row->manufacturer, 
				'year_of_manufacture' => $row->year_of_manufacture, 
				'mileage' => $row->mileage, 
				'registration' => $row->registration, 
				'vehicle_condition' => $row->vehicle_condition, 
				'serial_number' => $row->serial_number, 
				'color' => $row->color, 
				'created_at' => $row->created_at, 
				'updated_at' => $row->updated_at, 
				'is_deleted' => $row->is_deleted
			);
		}

		return $result;	
	}

	//This function selects three records from the table
	public function selectThree()
	{
		$query = $this->db->query("SELECT * FROM vehicles LIMIT 3");
		$i = 0;
		$result[$i] = 0;

		foreach ($query->getResult() as $row)
		{
			$result[$i] = array(
				'vehicle_id' => $row->vehicle_id, 
				'category_id' => $row->category_id, 
				'subcategory_id' => $row->subcategory_id, 
				'vehicle_model'=> $row->vehicle_model, 
				'unit_price'=> $row->unit_price, 
				'available_quantity' => $row->available_quantity, 
				'image' => $row->image, 
				'vehicle_description' => $row->vehicle_description, 
				'manufacturer' => $row->manufacturer, 
				'year_of_manufacture' => $row->year_of_manufacture, 
				'mileage' => $row->mileage, 
				'registration' => $row->registration, 
				'vehicle_condition' => $row->vehicle_condition, 
				'serial_number' => $row->serial_number, 
				'color' => $row->color, 
				'created_at' => $row->created_at, 
				'updated_at' => $row->updated_at, 
				'is_deleted' => $row->is_deleted
			);

			$i++;
		}

		return $result;
	}

	//This function selects the next three records from the table
	public function selectNextThree()
	{
		$query = $this->db->query("SELECT * FROM vehicles LIMIT 3 OFFSET 3");
		$i = 0;
		$result[$i] = 0;

		foreach ($query->getResult() as $row)
		{
			$result[$i] = array(
				'vehicle_id' => $row->vehicle_id, 
				'category_id' => $row->category_id, 
				'subcategory_id' => $row->subcategory_id, 
				'vehicle_model'=> $row->vehicle_model, 
				'unit_price'=> $row->unit_price, 
				'available_quantity' => $row->available_quantity, 
				'image' => $row->image, 
				'vehicle_description' => $row->vehicle_description, 
				'manufacturer' => $row->manufacturer, 
				'year_of_manufacture' => $row->year_of_manufacture, 
				'mileage' => $row->mileage, 
				'registration' => $row->registration, 
				'vehicle_condition' => $row->vehicle_condition, 
				'serial_number' => $row->serial_number, 
				'color' => $row->color, 
				'created_at' => $row->created_at, 
				'updated_at' => $row->updated_at, 
				'is_deleted' => $row->is_deleted
			);

			$i++;
		}

		return $result;
	}


	//This function adds a record to the table
	public function addRecord($subcategory_id, $vehicle_model, $unit_price, $available_quantity, $image="", $vehicle_description="")
	{
		if ($this->db->query("INSERT INTO subcategories (subcategory_id, vehicle_model, unit_price, available_quantity, image, vehicle_description) VALUES ('$subcategory_id', '$vehicle_model', '$unit_price', '$available_quantity', '$image', '$vehicle_description')"))
		{
		    return "Successful";
		}
		else
		{
		    return "Unsuccessful";
		}
	}

	//This function deletes some vehicles based on the foreign key
    public function deleteSome($category_id)
    {
      if ($this->db->query("DELETE FROM vehicles WHERE category_id = '$category_id'"))
      {
          return "Successful";
      }
      else
      {
          return "Unsuccessful";
      }
    }

	//This function deletes some vehicles based on the foreign key
    public function deleteSomeSub($subcategory_id)
    {
      if ($this->db->query("DELETE FROM vehicles WHERE subcategory_id = '$subcategory_id'"))
      {
          return "Successful";
      }
      else
      {
          return "Unsuccessful";
      }
    }
}
