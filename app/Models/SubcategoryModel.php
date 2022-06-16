<?php 

namespace App\Models;

use CodeIgniter\Model;

class SubcategoryModel extends Model
{
	protected $table = 'subcategories';

	protected $primaryKey = 'subcategory_id';

	protected $allowedFields =
		[
		'category_id',
		'subcategory_name',
		'subcategory_description',
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
		$query = $this->db->query("SELECT * FROM subcategories");

		foreach ($query->getResult() as $row)
		{
			$result[$row->subcategory_id] = array(
				'subcategory_id' => $row->subcategory_id, 
				'category_id' => $row->category_id, 
				'subcategory_name'=> $row->subcategory_name, 
				'subcategory_description' => $row->subcategory_description, 
				'created_at' => $row->created_at, 
				'updated_at' => $row->updated_at, 
				'is_deleted' => $row->is_deleted
			);
		}

		return $result;
	}

	//This funtion selects records from the table based on a foreign key
	public function selectUsingCategoryId($category_id)
	{
		$query = $this->db->query("SELECT * FROM subcategories WHERE category_id='$category_id'");

		$i = 0;

		foreach ($query->getResult() as $row)
		{
			$result[$i] = array(
				'subcategory_id' => $row->subcategory_id, 
				'category_id' => $row->category_id, 
				'subcategory_name'=> $row->subcategory_name, 
				'subcategory_description' => $row->subcategory_description, 
				'created_at' => $row->created_at, 
				'updated_at' => $row->updated_at, 
				'is_deleted' => $row->is_deleted
			);

			$i++;
		}

		return $result;
	}

	//This function selects one record from the table based on the primary key
	public function selectOne($subcategory_id)
	{
		$query = $this->db->query("SELECT * FROM subcategories WHERE subcategory_id='$subcategory_id'");

		foreach ($query->getResult() as $row)
		{
			$result = array(
				'subcategory_id' => $row->subcategory_id, 
				'category_id' => $row->category_id, 
				'subcategory_name'=> $row->subcategory_name, 
				'subcategory_description' => $row->subcategory_description, 
				'created_at' => $row->created_at, 
				'updated_at' => $row->updated_at, 
				'is_deleted' => $row->is_deleted
			);
		}

		return $result;
	}

	//This function adds a record to the table
	public function addRecord($category_id, $subcategory_name, $subcategory_description="")
	{
		if ($this->db->query("INSERT INTO subcategories (category_id, subcategory_name, subcategory_description) VALUES ('$category_id', '$subcategory_name', '$subcategory_description')"))
		{
		    return "Successful";
		}
		else
		{
		    return "Unsuccessful";
		}
	}
}